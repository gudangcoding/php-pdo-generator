
<?php
include "../../inc/config.php";
include "../../inc/Table.php";

$dt->query('Select ltl.dn_no as no, ltl.dn_no,ltl.req_date,ltl.dn_no as kode FROM ltl ');

$dt->edit('no', function ($data) {
    return '<input type="checkbox" name="dn_no" value="'.$data['no'].'">';
});
$dt->edit('kode', function ($data) {
    return '
    <a class="btn btn-primary btn-xs" href="'.base_admin()."index.php/dashboard-operasional/edit/".$data['kode'].'"><i class="fa fa-pencil"></i></a>
    <a class="btn btn-warning btn-xs" href="'.base_admin()."index.php/armada-ltl-detail/tambah/".$data['kode'].'"><i class="fa fa-truck"></i></a>
    <a class="btn btn-info btn-xs" href="'.base_admin()."index.php/tambah-barang/tambah/".$data['kode'].'"><i class="fa fa-cube"></i></a>
    <a class="btn btn-success btn-xs" href="'.base_admin()."index.php/ltl-biaya/tambah/".$data['kode'].'"><i class="fa fa-money"></i></a>
    <a class="btn btn-danger btn-xs" href="'.base_admin()."index.php/ltl-tracking/".$data['kode'].'"><i class="fa fa-map-marker"></i></a>
     ';
});
echo $dt->generate();

?>

<?php
// include "../../inc/config.php";
// $where=[];
// /*$where[] = ['pengiriman.status_proses', '=', 'On Pickup' , "OR"];
// $where[] = ['pengiriman.status_proses', '=', 'Outbound OPS', 'OR'];
// $where[] = ['pengiriman.status_proses', '!=', 'Proses On OPS', 'OR'];
// $where[] = ['pengiriman.status_proses', '!=', 'Pickup To Customer'];
// */
// $where[] = ['pengiriman.status_proses', '!=', 'Proses On OPS','AND'];
// $where[] = ['pengiriman.status_proses', '!=', 'Pickup To Customer','AND'];
// $where[] = ['pengiriman.status_proses', '!=', 'Inbound OPS Proses','AND'];
// $where[] = ['pengiriman.type', '!=', 'Charter Truck','AND'];
// //$where[] = ['master_status_proses.urutan', 'IS NOT', NULL,'OR'];

	
// $tes=$dtable->get(
// 	"pengiriman", "pengiriman.id",
// 	 array(
// 	 	'pengiriman.id',
// 	 	'pengiriman.no_resi',
// 	 	'pengiriman.tgl_pickup',
// 	 	'CONCAT(customer.first_name,customer.last_name)',
// 	 	'pengiriman.dari',
// 	 	'pengiriman.alamat_pengambilan',
// 	 	'pengiriman.tujuan',
// 	 	'pengiriman.status_proses',
// 	 	'pengiriman.tipe_bayar',
// 	 	'pengiriman.status_bayar',
// 	 	"pengiriman.id"
// 	),
// 	'LEFT JOIN customer ON customer.id=pengiriman.pengirim_id LEFT JOIN master_status_proses ON master_status_proses.status=pengiriman.status_proses',
// 	$where
// );