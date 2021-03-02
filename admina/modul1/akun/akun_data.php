
<?php
include "../../inc/config.php";
//session_check();

// $tes=$dtable->get("Akun", "Akun.id", array('Akun.Nama_Perusahaan','Akun.Alamat_Perusahaan','Akun.Jenis_Usaha','Akun.NIB','Akun.Nomor_NIB','Akun.NPWP','Akun.No_NPWP','Akun.Alamat_NPWP',"Akun.id"),"");


//kolom apa saja yang akan ditampilkan
$columns = array(
	'',
	'Nama_Perusahaan',
	'Alamat_Perusahaan',
	'Nama_Kota',
	'Jenis_Usaha',
	'No_NIB',
	'No_NPWP',
	'Alamat_NPWP',
	'Jumlah_Truk',
	);


	//set status bahwa table ini menambahkan penomoran di kolom pertama
    $datatable->set_numbering_status(1);
	//order by berdasarkan id_prov
	$datatable->set_order_by("id");
	//order secara descending
	$datatable->set_order_type("desc");
//jika ingin langsung menambahkan kondisi where dengan parameter terentu query seperti ini 
	//misal kita akan langsung menambahkan kondisi langsung hanya menampilkan provinsi jawabarat saja, 
//prepared statement untuk keamanan data
/*$array_id_provinsi = array('provinsi.id_prov' => 32); //32 adalah id untuk jawabarat
	$query = $datatable->get_custom("select provinsi.nama_prov,kabupaten.nama_kab, kecamatan.nama_kec,id_kec
from provinsi inner join kabupaten 
on provinsi.id_prov=kabupaten.id_prov
inner join kecamatan on kabupaten.id_kab=kecamatan.id_kab where provinsi.id_prov=?",$columns,$array_id_provinsi);*/

//untuk mencobanya uncomment query diatas dan comment query dibawah

//lakukan query data dari 3 table dengan inner join
	$query = $datatable->get_custom("select * from Informasi_Umum WHERE tampil='Y'",$columns);


	//buat inisialisasi array data
	$data = array();
	$i=1;
	foreach ($query	as $value) {

	//array sementara data
	$ResultData = array();
	$ResultData[] = "<input type='checkbox' name='info[]' class='akun'>";
	$ResultData[] = $datatable->number($i);
	//masukan data ke array sesuai kolom table
	$ResultData[] = $value->Nama_Perusahaan;
	$ResultData[] = $value->Alamat_Perusahaan;
	$ResultData[] = $value->Nama_Kota;
	$ResultData[] = $value->Jenis_Usaha;
	$ResultData[] = $value->No_NIB;
	$ResultData[] = $value->No_NPWP;
	$ResultData[] = $value->Alamat_NPWP;
	$ResultData[] = $value->Jumlah_Truk;

	//bisa juga pake logic misal jika value tertentu maka outputnya

	//kita bisa buat tombol untuk keperluan edit, delete, dll, 
	$ResultData[] = "<a onclick='hapus(".$value->id.")' title='Hapus Data' class='btn  btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span></a> <a onclick='detail(".$value->id.")'title='Detail Data' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-eye-open'></span></a>";

	// $ResultData[] = "<a onclick='".edit($value->id)."' title='Edit Data' class='btn btn-primary btn-xs'>Edit</a> <a onclick='".hapus($value->id)."' title='Hapus Data' class='btn btn-danger btn-xs'>Hapus</a> <a onclick='".detail($value->id)."' title='Detail Data' class='btn btn-danger btn-xs'>Detail</a>";
	//memasukan array ke variable $data

	$data[] = $ResultData;
	$i++;
}

//set data
$datatable->set_data($data);
//create our json
$datatable->create_data();



?>