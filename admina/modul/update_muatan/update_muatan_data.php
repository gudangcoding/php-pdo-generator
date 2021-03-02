
<?php
include "../../inc/config.php";
include "../../inc/Table.php";

$dt->query('Select ltl.dn_no as no, ltl.dn_no,ltl.req_date,ltl.dn_no as kode FROM ltl where ');

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