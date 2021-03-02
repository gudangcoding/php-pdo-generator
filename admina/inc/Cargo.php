<?php 

class Cargo{
	protected $db;
	
	public function __construct(){
		global $db;
		$this->db = $db;
	}

	public function get_pengiriman($pengiriman_id){
		return $this->db->fetch_custom_single('SELECT * FROM pengiriman WHERE id=?',[$pengiriman_id]);
	}
	public function get_all_pengiriman_detail($pengiriman_id){
		return $this->db->fetch_custom('SELECT b.* FROM pengiriman_detail b JOIN pengiriman a ON a.no_resi=b.no_resi WHERE a.id=?',[$pengiriman_id])->fetchAll();
	}
	public function get_pengiriman_detail($id){
		return $this->db->fetch_custom_single('SELECT * FROM pengiriman_detail WHERE id=?',[$id]);
	}
	
	public function get_pengirimanid_by_noresi($no_resi){
		return $this->db->fetch_custom_single('SELECT id FROM pengiriman WHERE no_resi=?',[$no_resi])->id;
	}

	public function add_pengiriman($data){
		return $this->db->insert('pengiriman', $data);
	}
	public function edit_pengiriman($pengiriman_id){
		//belum
		$this->db->get_where();
	}

	public function delete_pengiriman($pengiriman_id){
		return $this->db->fetch_custom("CALL hapus_pengiriman(?)", [$pengiriman_id]);
	}

	public function add_pengiriman_detail($data){
		$pengiriman_id = $this->get_pengirimanid_by_noresi($data['no_resi']);
		$res = $this->db->insert('pengiriman_detail', $data);
		$this->recalculate_pengiriman($pengiriman_id);
		return true;
	}

	public function get_hpp($no_resi, $id_cabang=109){
		$q = $this->db->fetch_custom_single('SELECT hpp.*,pengiriman.total_berat_pakai  FROM hpp JOIN pengiriman ON hpp.no_resi=pengiriman.no_resi WHERE hpp.no_resi=? AND hpp.id_cabang=?',[$no_resi, $id_cabang]);
		if($q){
			$pengiriman = $this->db->fetch_custom_single('SELECT * FROM pengiriman WHERE no_resi=?',[$no_resi]);
			$q->layanan = $pengiriman->layanan;
			$q->total_berat_pakai = $pengiriman->total_berat_pakai;
			$q->total_hpp = ($q->hpp_ongkir * $pengiriman->total_berat_pakai) +$q->stuffing + $q->hpp_pickup+ $q->hpp_ops + $q->sewa_truck + $q->hpp_asuransi + $q->hpp_packaging + $q->fee_customer + $q->biaya_lainnya;
		}
		return $q;
	}

	public function edit_pengiriman_detail($id){
		//belum
	}

	public function delete_pengiriman_detail($id){
		$detail = $this->get_pengiriman_detail($id);
		if(!$detail) return false;
		$this->db->fetch_custom('DELETE FROM pengiriman_detail WHERE id=?', $id);
		$pengiriman_id = $this->get_pengirimanid_by_noresi($detail->no_resi);
		$this->recalculate_pengiriman($pengiriman_id);
		return true;
	}

	public function recalculate_hpp_by_id_pemesanan($id){
		$pengiriman = $this->get_pengiriman($id);
		if($pengiriman){
			$this->recalculate_hpp($pengiriman->no_resi);
		}
	}

	public function get_pengiriman_full($pengiriman_id){
		return $this->db->fetch_custom_single('SELECT *, a.asuransi AS pengiriman_asuransi FROM pengiriman a LEFT JOIN pengiriman_detail b ON a.no_resi=b.no_resi WHERE a.id=?',[$pengiriman_id]);
	}
	public function get_pengiriman_detail_full($pengiriman_id){
		return $this->db->fetch_custom('SELECT *, a.asuransi AS pengiriman_asuransi FROM pengiriman a LEFT JOIN pengiriman_detail b ON a.no_resi=b.no_resi WHERE a.id=?',[$pengiriman_id]);
	}

	public function get_hpp_asuransi($pengiriman_id){
		$q = $this->get_pengiriman_full($pengiriman_id);
		if($q->pengiriman_asuransi>0){
			if($q->nilai_barang>=100000000){
				$hpp = 0.01 * $q->pengiriman_asuransi;
			}else{
				$hpp = 150000;
			}
		}else{
			$hpp = 0;
		}
		return (int) $hpp;
	}

	public function get_hpp_packaging($pengiriman_id){
		$q = $this->get_pengiriman_detail_full($pengiriman_id);
		if($q){
			$total = 0;
			foreach($q as $row){
				$total += $row->biaya_packaging;
			}
			$hpp = 0.7 * $total;
		}else{
			$hpp = 0;
		}
		return (int) $hpp;
	}

	public function recalculate_hpp($no_resi, $id_cabang=109){
		$q = $this->get_hpp($no_resi, $id_cabang);
		$total_hpp = 0;
		$berat = (int) $this->db->fetch_custom_single("SELECT SUM(berat_pakai) AS total FROM pengiriman_detail WHERE no_resi=?",[$no_resi])->total;
		$pengiriman_id = $this->get_pengirimanid_by_noresi($no_resi);

		if($q){//print_r($q);
			$q->hpp_asuransi = $this->get_hpp_asuransi($pengiriman_id);
			$q->hpp_packaging = $this->get_hpp_packaging($pengiriman_id);
			if($berat < 100)$berat = 100;
			$total_hpp = ($q->hpp_ongkir * $berat) +$q->stuffing + $q->hpp_pickup+ $q->hpp_ops + $q->sewa_truck + $q->hpp_asuransi + $q->hpp_packaging + $q->fee_customer + $q->biaya_lainnya;
			$this->db->update('hpp', ['hpp_asuransi'=>$q->hpp_asuransi, 'hpp_packaging'=>$q->hpp_packaging], 'id_hpp',$q->id_hpp);
		}
		$this->db->update('pengiriman', ['hpp'=>$total_hpp],'no_resi',$no_resi);
		$this->recalculate_pengiriman($pengiriman_id);
		return true;
	}


	public function recalculate_pengiriman($pengiriman_id){
		$pengiriman = $this->db->fetch_custom_single('SELECT * FROM pengiriman WHERE id=?',[$pengiriman_id]);
		if(!empty($pengiriman)){
			$subtotal = 0;
			$grandtotal = 0;
			$biaya_packaging = 0;
			$asuransi = (int) $pengiriman->asuransi;
			$tipe_pickup = (int) $pengiriman->tipe_pickup;
			$biaya_pickup = (int) $pengiriman->biaya_pickup;
			$jumlah_ppn = 0;
			$jumlah_pph = 0;
			$koli = 0;
			$berat = 0;
			
			if($pengiriman->layanan=='Sewa Armada'){
				$tipe_pickup = 3;
				$biaya_pickup = 0;
				//sewa armada
				$subtotal = $pengiriman->harga;
				$grandtotal = $subtotal +$asuransi ;
				if($pengiriman->pajak_pph==1){
					$jumlah_ppn = 0.02 * $grandtotal;
				}

				if($pengiriman->pajak==1){
					$jumlah_ppn = 0.01 * $subtotal;
				}
				$koli = $pengiriman->qty;
			}else{
				//retail
				$detail = $this->db->fetch_custom("SELECT * FROM pengiriman_detail WHERE no_resi=?",[$pengiriman->no_resi])->fetchAll();
				if(!empty($detail)){
					$berat = (int) $this->db->fetch_custom_single("SELECT SUM(berat_pakai) AS total FROM pengiriman_detail WHERE no_resi=?",[$pengiriman->no_resi])->total;
					$koli = (int) $this->db->fetch_custom_single("SELECT SUM(jumlah) AS total FROM pengiriman_detail WHERE no_resi=?",[$pengiriman->no_resi])->total;
					foreach($detail as $row){
						if($row->harga != $pengiriman->harga){
							$this->db->update("pengiriman_detail", ['harga'=>$pengiriman->harga], 'id', $row->id);
						}
						$subtotal +=$row->sub_total;
						//$biaya_pickup +=$row->biaya_pickup;
						$biaya_packaging +=$row->biaya_packaging;
						//$berat +=$row->berat_pakai;
					}
					if($berat < 100) {
						$berat = 100;
						$subtotal = $berat * $pengiriman->harga;
					}
					if($berat>=500){
						$biaya_pickup=0;
					}else{
						$biaya_pickup = (int) $this->db->fetch_custom_single('SELECT biaya FROM tipe_pickup WHERE id=?',[$tipe_pickup])->biaya;
					}
				}else{
					//do nothing kayaknya
				}
			}
			$grandtotal = $subtotal + $biaya_packaging + $biaya_pickup + $asuransi ;
			if($pengiriman->pajak_pph==1){
				$jumlah_ppn = 0.02 * $grandtotal;
			}

			if($pengiriman->pajak==1){
				$jumlah_ppn = 0.01 * $subtotal;
			}
			
			$grandtotal += $jumlah_ppn;

			$data=[
				'tipe_pickup'=>$tipe_pickup,
				'biaya_pickup'=>$biaya_pickup,
				'biaya_packaging'=>$biaya_packaging,
				'jumlah_ppn'=>$jumlah_ppn,
				'jumlah_pph'=>$jumlah_pph,
				'qty'=>$koli,
				'total_berat_pakai'=>$berat,
				'grandtotal'=>$grandtotal,
			];
			$this->db->update('pengiriman', $data, 'id',$pengiriman->id);
			//print_r($data+[$subtotal]);
		}else{
			//data kosong - do nothing
		}
	}

	public function recalculate_pengiriman_detail_all($pengiriman_id){
		$pengiriman = $this->get_pengiriman($pengiriman_id);
		if(!empty($pengiriman)){
			$details = $this->db->fetch_custom('SELECT id FROM pengiriman_detail WHERE no_resi=? ',[$pengiriman->no_resi])->fetchAll();
			if(!empty($details)){
				foreach($details as $row){
					$this->recalculate_pengiriman_detail($row->id);
				}
			}
		}
	}

	public function recalculate_pengiriman_detail($id){
		$detail = $this->get_pengiriman_detail($id);
		if(!empty($detail)){
			$berat_pakai = max($detail->berat_aktual, $detail->berat_volume)*$detail->jumlah;
			//$berat = max($berat_pakai, 100);
			$berat_pakai = round($berat_pakai);
			$sub_total = $detail->harga *$berat_pakai;
			$grand_total = $sub_total + $detail->biaya_pickup + $detail->biaya_packaging;
			$data = [
				'berat_pakai'=>$berat_pakai,
				'sub_total'=>$sub_total,
				'grand_total'=>$grand_total,
			];
			$this->db->update('pengiriman_detail', $data, 'id',$id);
		}
	}

	public function create_no_invoice($id){
		$pengiriman = $this->get_pengiriman($id);
		$date=$pengiriman->tgl_pickup;
		$month = substr($date,5,2);
		$year = substr($date,2,2);
		$year4 = substr($date,0,4);
		if(preg_match('/^CM-/',$pengiriman->no_resi)){
			$tipe = 'CARGOMURAH';
			$short = 'CM';

		}else{
			$tipe = 'DIMENSILOGISTIC';
			$short = 'DL';
		}
		$search = '%/'.$tipe.'-ACC/'.$month.'/'.$year;
		$last =  $this->db->fetch_custom_single("SELECT no_invoice from pengiriman WHERE no_invoice LIKE ? ORDER BY no_invoice DESC LIMIT 1 ", [$search]);
		
		if(empty($last)){
			$no = 0;
		}else{
			$exp = explode('/', $last->no_invoice);
			$no = intval(ltrim($exp[0],'0'));
		}
		return str_pad($no+1,3,'0',STR_PAD_LEFT).'/'.$tipe.'-ACC/'.$month.'/'.$year;
		
	}
	
	
	function read_pengiriman($pengiriman_id, $divisi){
		if(empty($pengiriman_id)) return false;
		$notif = $this->db->fetch_custom_single('SELECT * FROM pengiriman_read WHERE pengiriman_id=?', [$pengiriman_id]);
		if($notif){
			if(empty($notif->{$divisi})){
				$this->db->update('pengiriman_read', [$divisi=>date('Y-m-d H:i:s')], 'pengiriman_id', $pengiriman_id);
			}
		}else{
			$this->db->insert('pengiriman_read', ['pengiriman_id'=>$pengiriman_id, $divisi=>date('Y-m-d H:i:s')]);
		}
	}

	function create_berita_transfer(){
		$tanggal = date('ymd');
	  
		//untuk berita transfer
		$sql2 = $this->db->query("SELECT RIGHT(berita_transfer,6) AS berita_transfer FROM pengiriman ORDER BY berita_transfer DESC limit 1");
		$num2 = $sql2->num_rows;
		if($num2 <> 0) {
			$data = $sql->fetch_array();
			$kode_transfer = $data['berita_transfer'] + 1;
		}else{
			$kode_transfer = 1;
		}
		//mulai bikin kode
		$bikin_kode_transfer = str_pad($kode_transfer, 6, "0", STR_PAD_LEFT);
		$berita_transfer = "$tanggal"."".$bikin_kode_transfer;
		return $berita_transfer;
	}

	//$type = CM or DL
	//$dari = kode kota asal ex: JKT
	//$kode_kota = kode kota tujuan ex: JKT
	function create_no_resi($pengiriman_id=null, $type, $kode_dari, $kode_tujuan){
		$tanggal = date('ymd');
		$type=$type=='Cargo Murah' ? 'CM' : 'DL';
		if(empty($insert_id)) $insert_id = $this->db->get_last_id();
		$bikin_kode = str_pad($insert_id, 5, "0", STR_PAD_LEFT);
		$no_resi = "$type-$kode_dari-$kode_tujuan-$tanggal$bikin_kode";
		$this->db->update('pengiriman', ['no_resi'=>$no_resi], 'id', $pengiriman_id);
	}
	

	function first_recalculate($pengiriman_id){
		$pengiriman = $this->get_pengiriman($pengiriman_id);
		if($pengiriman){
			if($pengiriman->recalculated==0){
				$this->recalculate_hpp_by_id_pemesanan($pengiriman_id);
				$this->recalculate_pengiriman_detail_all($pengiriman_id);
				$this->recalculate_pengiriman($pengiriman_id);
				$this->db->update('pengiriman', ['recalculated'=>1], 'id', $pengiriman_id);
			}
			

		}
		
	}
}