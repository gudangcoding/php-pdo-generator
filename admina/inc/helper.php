<?php

function no_resi_otomatis(){
	global $db;
	//untuk berita transfer
	$sql2 = $db->fetch_custom_single("SELECT RIGHT(berita,6) AS berita_transfer FROM pengiriman ORDER BY berita_transfer DESC limit 1");
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
}
function recalculate_pengiriman($id){
	global $db;
	$pengiriman = $db->fetch_custom_single('SELECT * FROM pengiriman WHERE id=?',[$id]);
	if(!empty($pengiriman)){
		$subtotal = 0;
		$grandtotal = 0;
		$biaya_packaging = 0;
		$asuransi = (int) $pengiriman->asuransi;
		$biaya_pickup = (int) $pengiriman->biaya_pickup;
		$jumlah_ppn = 0;
		$jumlah_pph = 0;
		
		if($pengiriman->layanan=='Sewa Armada'){
			//sewa armada
			$subtotal = $pengiriman->harga;
			$grandtotal = $subtotal +$asuransi ;
			if($pengiriman->pajak_pph==1){
				$jumlah_ppn = 0.02 * $grandtotal;
			}

			if($pengiriman->pajak==1){
				$jumlah_ppn = 0.01 * $subtotal;
			}
			$data=[
				'jumlah_ppn'=>$jumlah_ppn,
				'jumlah_pph'=>$jumlah_pph,
				'grandtotal'=>$grandtotal,
			];
			$db->update('pengiriman', $data, 'id',$pengiriman->id);
		}else{
			//retail
			$detail = $db->fetch_custom("SELECT * FROM pengiriman_detail WHERE no_resi=?",[$pengiriman->no_resi])->fetchAll();
			if(!empty($detail)){
				$berat = (int) $db->fetch_custom_single("SELECT SUM(berat_pakai) AS total FROM pengiriman_detail WHERE no_resi=?",[$pengiriman->no_resi])->total;
				foreach($detail as $row){
					$subtotal +=$row->sub_total;
					//$biaya_pickup +=$row->biaya_pickup;
					$biaya_packaging +=$row->biaya_packaging;
					$berat +=$row->berat_pakai;
				}
				if($berat < 100) {
					$subtotal = 100 * $pengiriman->harga;
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
			'biaya_packaging'=>$biaya_packaging,
			'jumlah_ppn'=>$jumlah_ppn,
			'jumlah_pph'=>$jumlah_pph,
			'grandtotal'=>$grandtotal,
		];
		$db->update('pengiriman', $data, 'id',$pengiriman->id);
	}else{
		//data kosong - do nothing
	}
}

function log_pengiriman($pengiriman_id, $status_proses, $username_cabang){return false;//nggak dipake lagi
    $db = new Database();
    $cabang_id = $db->fetch_custom_single('SELECT id FROM sys_users WHERE username=?', [$username_cabang])->id;
    
    $q = $db->fetch_custom_single('SELECT id FROM pengiriman_history WHERE pengiriman_id=? AND status_proses=? AND cabang_id=?', [$pengiriman_id, $status_proses, $cabang_id]);
    if(!isset($q->id)){
        //insert
        $db->query("INSERT INTO pengiriman_history (pengiriman_id, status_proses, cabang_id) VALUES ('$pengiriman_id','$status_proses','$cabang_id')");
    }else{
        //update
        $db->query('UPDATE pengiriman_history SET pengiriman_id=?, status_proses=?, cabang_id=?, updated_at=? WHERE id=?',[$pengiriman_id, $status_proses, $cabang_id, date('Y-m-d H:i:s'), $q->id]);
    }
}

function wa_number($number){
	$number = preg_replace("/[^0-9]/", '', trim($number));
	return preg_replace('/^08/', '628', $number);
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function nearest($val, $cap){
	return ceil($val / $cap) * $cap;
}

function formatMoney($val, $decimal=0, $decimal_sep=',', $thousand_sep='.', $currency='', $position='left', $space=true){
	$d = number_format($val, $decimal, $decimal_sep, $thousand_sep);return $d;
	if(!empty($currency)){
		$symbol = currencySymbol($currency);
		if($position=='left'){
			if($space){
				$d = $symbol.' '.$d;
			}else{
				$d = $symbol.$d;
			}
		}else{
			if($space){
				$d = $d.' '.$symbol;
			}else{
				$d = $d.$symbol;
			}
		}
	}
	return preg_replace( '/' . preg_quote( $decimal_sep, '/' ) . '0++$/', '', $d );
	//return rtrim(rtrim($d,0),$decimal_sep);
}

function post($val){
	return isset($_POST[$val])?$_POST[$val]:null;
}

function get($val){
	return isset($_GET[$val])?$_GET[$val]:null;
}

function session($val){
	return isset($_SESSION[$val])?$_SESSION[$val]:null;
}

function ms(array $arr){
	echo json_encode($arr);
	exit;
}

function tanggal_indo($tanggal, $cetak_hari = false, $cetak_jam=false)
{
	$hari = [ 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			];
			
	$bulan = [1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			];
	$ts = strtotime($tanggal);
	$tgl_indo = date('d', $ts) . ' ' . $bulan[ (int)date('m', $ts) ] . ' ' . date('Y', $ts);
	
	if ($cetak_hari) {
		$num = date('N', $ts);
		$tgl_indo= $hari[$num] . ', ' . $tgl_indo;
	}
	if ($cetak_jam) {
		$num = date('H:i', $ts);
		$tgl_indo= $tgl_indo.' '.$num;
	}
	return $tgl_indo;
}

function now($hour=true){
	return $hour?date('Y-m-d H:i:s'):date('Y-m-d');
}
function yesterday($hour=true){
	$time = time()-86400;
	return $hour?date('Y-m-d H:i:s', $time):date('Y-m-d', $time);
}

function curl($url, $referer=null, $ajax=false, $method='GET', array $request=[], array $header = [], $cookie=null, $theproxy=null){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
	if(!empty($referer)) curl_setopt($curl, CURLOPT_REFERER, $referer);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36");
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	if($ajax) $header[] = "X-Requested-With: XMLHttpRequest";
	if($method=='POST'){
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($request));
	}
	if(!empty($theproxy)){
		$parse = parse_url($theproxy);
		$proxyaddress = $parse['host'].':'.$parse['port'];
		curl_setopt($curl, CURLOPT_PROXY, $proxyaddress);
		if(isset($parse['user'])){
			$proxyauth = $parse['user'].':'.$parse['pass'];
			curl_setopt($curl, CURLOPT_PROXYUSERPWD, $proxyauth);
		}
	}
	if(!empty($cookie)){
		//curl_setopt( $curl, CURLOPT_COOKIESESSION, true );
		curl_setopt( $curl, CURLOPT_COOKIEJAR, $cookie );
		curl_setopt( $curl, CURLOPT_COOKIEFILE, $cookie );
	}
	
	if(!empty($header)){
		curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	}
	$r = curl_exec($curl);
	curl_close($curl);
	return $r;
}

function master($name){
	global $db;
	return $db->fetch_custom_single('SELECT value FROM master_config WHERE name=?',[$name])->value; 
}

function color_proses($status_proses){
    global $db;
    $color = '#000';
    $row = $db->fetch_custom_single('master_status_proses', ['status'=>$status_proses]);
    if($row){
        $color = $row->font_color;
    }else{
        if(stripos($status_proses, 'Delivery To')){
            $color = $db->fetch_custom_single('master_status_proses', ['status'=>'Delivery To {Cabang}'])->font_color;
        }elseif(stripos($status_proses, 'Received At')){
            $color = $db->fetch_custom_single('master_status_proses', ['status'=>'Received At {Cabang}'])->font_color;
        }
    }
    return $color;
}

function dummyAvatar($gender='Pria'){
	$gender = $gender=='Wanita'?'F':'M';
	$folderAvatar = '/home/appcargomurah/public_html/upload/dummy';
	$matches = glob($folderAvatar.'/A'.$gender.'-*.png');
	$rand = $matches[array_rand($matches)];
	return file_get_contents($rand);
}

function penyebut($nilai) {
	$nilai = abs($nilai);
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " ". $huruf[$nilai];
	} else if ($nilai <20) {
		$temp = penyebut($nilai - 10). " belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	}     
	return $temp;
}

function terbilang($nilai) {
	if($nilai<0) {
		$hasil = "minus ". trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}     		
	return $hasil;
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'tahun',
        'm' => 'bulan',
        'w' => 'minggu',
        'd' => 'hari',
        'h' => 'jam',
        'i' => 'menit',
        's' => 'detik',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' lalu' : 'baru saja';
}