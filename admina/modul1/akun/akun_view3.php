

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pengaturan Akun
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>akun">Akun</a></li>
        <li class="active">Akun List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">List Akun</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">

<div id="exTab1">	
<ul  class="nav nav-pills">
<li class="active" id="step1">
<a  href="#1a" data-toggle="tab">Informasi Umum</a>
</li>
<li id="step2"><a href="#2a" data-toggle="tab">Informasi Pengguna</a>
</li>
<li id="step3"><a href="#3a" data-toggle="tab">Informasi Bank</a>
</li>
</ul>

<div class="tab-content clearfix" style="margin: 10px">
<div class="tab-pane active" id="1a">
   
<!-- <a class="btn btn-primary" data-toggle="modal" href='#modal-akun'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a> -->
 <div class="row">
        <div class="col-xs-6 form-group">
            <label>Nama Perusahaan</label>
            <input type="text" class="form-control" type="text" name="Nama_Perusahaan" id="Nama_Perusahaan" required>
        </div>
        <div class="col-xs-6 form-group">
            <label>Nomor NIB</label>
            <input type="number" class="form-control" type="text" name="No_NIB" id="No_NIB" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label>Alamat Perusahaan</label>
            <textarea name="Alamat_Perusahaan" id="Alamat_Perusahaan" class="form-control" rows="3" required></textarea>
            <!-- <input type="text" name="Alamat_Perusahaan" id="Alamat_Perusahaan" class="form-control" required> -->
        </div>
        <div class="col-xs-6 form-group">
          <label>Nomor NPWP</label>
          <input type="number" class="form-control" type="text" name="No_NPWP" id="No_NPWP" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
          <label>Nama Kota</label>
          <select name="Nama_Kota" id="Nama_Kota" class="form-control chzn-select" required="required">
            <option value="">Pilih Kota</option>
            <?php 
                // foreach ($db->fetch_all('Kecamatan') as $k) {
                //  echo "<option value='$k->ID_Kecamatan'>$k->Nama_Kecamatan</option>";
                // }
            ?>
          </select>
        </div>
        <div class="col-xs-6 form-group">
            <label>Alamat NPWP</label>
            <input type="text" name="Alamat_NPWP" id="Alamat_NPWP" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            <label>Jenis Usaha</label>
            <select name="Jenis_Usaha" id="Jenis_Usaha" class="form-control chzn-select" required="required">
          <option value="">Pilih Jenis Usaha</option>
            <?php 
                foreach ($db->fetch_all('jenis_usaha') as $k) {
                 echo "<option value='$k->id'>$k->jenis_usaha</option>";
                }
            ?>
        </select>
        </div>
        <div class="col-xs-6 form-group">
            <label>Jumlah Truk</label>
            <input type="number" name="Jumlah_Truk" id="Jumlah_Truk" class="form-control" required>
        </div>
    </div>
    <div class="row">
          <div class="col-xs-6 form-group">
            <label>Logo Perusahaan</label>
            <input type="file" name="Logo_Perusahaan" id="Logo_Perusahaan" class="form-control" required>
        </div>
    </div>
    
    		<button type="button" class="btn btn-primary pull-right" id="langkah1">Simpan dan Lanjut</button>
   <br>
        
<hr>
    <table id="akun" class="display responsive nowrap"> 
            <thead>
              <tr>
                <th><input type="checkbox" id="cekAll"></th>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
                <th>Nama Kota</th>
                <th>Jenis Usaha</th>
                <th>Nomor NIB</th>
                <th>Nomor NPWP</th>
                <th>Alamat NPWP</th>
                <th>Jumlah Truk</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
           
            </tbody>
          </table>




</div>

<div class="tab-pane" id="2a">
     
     <input type="hidden" name="id_perusahaan" id="id_perusahaan">
     <div class="row">
     	<div class="col-xs-6 form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" type="text" name="Nama_Lengkap" id="Nama_Lengkap" required>
        </div>
        <div class="col-xs-6 form-group">
            <label>Posisi</label>
            <select name="Posisi" id="Posisi" class="form-control chzn-select" tabindex="2" required>
                  <option value="Posisi">Pemilik</option>
                  <option value="Posisi">Bagian Operasional</option>
                  <option value="Posisi">Bagian Keuangan</option>
                  <option value="Posisi">Bagian Bengkel</option>
                  <option value="Posisi">Pengemudi</option>
                  <option value="Posisi">Pelanggan*</option>
                 </select>
        </div>
     </div>
  	 <div class="row">
  	 	<div class="col-xs-6 form-group">
            <label>Alamat Email</label>
            <input type="text" class="form-control" type="text" name="Alamat_Email" id="Alamat_Email" required>
        </div>
        
        <div class="col-xs-6 form-group">
            <label>No HP</label>
            <input type="number" class="form-control" name="No_HP" id="No_HP" required>
        </div>
  	 </div>
     <div class="row">
        <div class="col-xs-12 form-group">
            <label>Status  :</label>
            <label class="radio-inline"><input type="radio" name="optradio" checked>Non Aktif</label>
      <label class="radio-inline"><input type="radio" name="optradio">Aktif</label>
        </div>
     </div>   
     <div class="col-xs-12 form-group">
     	<div class="pull-right">
     		<button type="button" class="btn btn-default ">Kembali</button>
     		<button type="button" class="btn btn-primary ">Simpan dan Lanjut</button>
     	</div>
    </div>
        <hr>
   <table class="umum display responsive nowrap" id="pengguna" width="100%"> 
            <thead>
              <tr>
                <th><input type="checkbox" id="cekAll2"></th>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat Email</th>
                <th>No HP</th>
                <th>Posisi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" class="pengguna"></td>
                <td>1</td>
                <td>Ahmad Fauzi</td>
                <td>ahmadfauzi228.se@gmail.com</td>
                <td>082118017822</td>
                <td>Pemilik</td>
                <td>Aktif</td>
              </tr>
            </tbody>
          </table>

</div>
<div class="tab-pane" id="3a">
	<div class="row">
		<div class="form-group col-xs-6">
          <label for="Nama Lengkap" class="control-label" style="text-align: left;">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required> 
        </div><!-- /.form-group -->
      <div class="form-group col-xs-6">
          <label for="Nama Bank" class="control-label" style="text-align: left;">Nama Bank</label>
            <input type="text" name="nama_bank" placeholder="Nama Bank" class="form-control" required> 
        </div><!-- /.form-group -->
	</div>
	<div class="row">
		<div class="form-group col-xs-6">
          <label for="Nomor Rekening" class="control-label" style="text-align: left;">Nomor Rekening</label>
            <input type="text" name="nomor_rek" placeholder="Nomor Rekening" class="form-control" required> 
      </div><!-- /.form-group -->
	</div>
      <div class="col-xs-12 form-group">
     	<div class="pull-right">
     		<button type="button" class="btn btn-default ">Kembali</button>
     		<button type="button" class="btn btn-primary ">Simpan dan Lanjut</button>
     	</div>
    </div>
    <hr>

         <table class="umum display responsive nowrap" id="bank" width="100%"> 
          <thead>
              <tr>
                <th><input type="checkbox" id="cekAll3"></th>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nama Bank</th>
                <th>Nomor Rekening</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" class="bank"></td>
                <td>1</td>
                <td>Ahmad Fauzi</td>
                <td>BANK CENTRAL ASIA</td>
                <td>62888787</td>
              </tr>
            </tbody>
          </table>
</div>

            </div>              
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div>
          </div>

</section><!-- /.content -->
<!-- Main content -->


<script type="text/javascript">
$(document).ready(function () {
  load(); //load datatablenya

  $("#Nama_Kota").keyup(function() {
  	alert('diketik');
  	$.ajax({
  		url: '<?=base_admin();?>modul/akun/akun_action.php?act=pilih_kota',
  		type: 'POST',
  		// dataType: 'html',
  		data: {Nama_Kota: $("#Nama_Kota").val()},
  		success : function(hasil){
  			console.log(hasil);
  			$("#Nama_Kota").html(hasil);
  		},
  		error : function(err) {
  			console.log(err);
  		}
  	});
  });

//Initialize tooltips
$('.nav-tabs > li a[title]').tooltip();

//Wizard
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

var $target = $(e.target);

if ($target.parent().hasClass('disabled')) {
  return false;
}
});

	$(".next-step").click(function (e) {
		var $active = $('.wizard .nav-tabs li.active');
		$active.next().removeClass('disabled');
		nextTab($active);
	});

	$(".prev-step").click(function (e) {
		var $active = $('.wizard .nav-tabs li.active');
		prevTab($active);
	});
});

function nextTab(elem) {
	$(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
$(elem).prev().find('a[data-toggle="tab"]').click();
}

$("#akunstep1").click(function(event) {
	console.log('step1diklik');
	$.ajax({
		url: '<?=base_admin();?>modul/akun/akun_action.php?act=in',
		type: 'POST',
		data: {
			Nama_Perusahaan		: $("#Nama_Perusahaan").val(),
			Alamat_Perusahaan	: $("#Alamat_Perusahaan").val(),
			Nama_Kota			: $("#Nama_Kota").val(),
			Jenis_Usaha			: $("#Jenis_Usaha").val(),
			Logo_Perusahaan		: $("#Logo_Perusahaan").val(),
			No_NIB				: $("#No_NIB").val(),
			No_NPWP				: $("#No_NPWP").val(),
			Alamat_NPWP			: $("#Alamat_NPWP").val(),
			Jumlah_Truk			: $("#Jumlah_Truk").val()

		},
		success : function (hasil) {
      Swal.fire(
        'Sukses',
        'Data Berhasil Disimpan',
        'success'
      );
      table.ajax.reload( null, false );
			console.log(hasil);
		},
		error   :function(err) {
			console.log(err);
		}
	});
	
});

  function load() {
    var table = $("#akun").dataTable({
        'bProcessing': true,
        'bServerSide': true,
        //disable order dan searching pada tombol aksi
        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "searchable": false

        }],
        "ajax": {
            url: "<?=base_admin();?>modul/akun/akun_data.php",
            type:'post',
            
            error: function(xhr, error, thrown) {
                console.log(xhr);

            }
        },

    });
  }

  function detail(iddata){
    $.ajax({
      url: '<?=base_admin();?>modul/akun/akun_action.php?act=edit',
      type: 'POST',
      dataType: 'json',
      data: {id: iddata},
      success : function (hasil) {
        console.log(hasil);
        $("#id_perusahaan").val(hasil[0].id);
        $("#Nama_Perusahaan").val(hasil[0].Nama_Perusahaan);
        $("#Alamat_Perusahaan").val(hasil[0].Alamat_Perusahaan);
        $("#Nama_Kota").val(hasil[0].Nama_Kota);
        $("#Jenis_Usaha").val(hasil[0].Jenis_Usaha);
        $("#Logo_Perusahaan").val(hasil[0].Logo_Perusahaan);
        $("#No_NIB").val(hasil[0].No_NIB);
        $("#No_NPWP").val(hasil[0].No_NPWP);
        $("#Alamat_NPWP").val(hasil[0].Alamat_Perusahaan);
        $("#Jumlah_Truk").val(hasil[0].Jumlah_Truk);
      },
      error   :function(err) {
        console.log(err);
      }
    });
  }/*Fungsi Detail*/

  function hapus(id){
    console.log(id);
    Swal.fire({
      title: 'Data ID '+id+' Mau di hapus?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: `Hapus`,
      denyButtonText: `Batal`,
    }).then((result) => {
      /* Jika Hapus Dikonfirmasi */
      if (result.isConfirmed) {
        $.ajax({
          url: '<?=base_admin();?>modul/akun/akun_action.php?act=hapus',
          type: 'POST',
          dataType: 'json',
          data: {id: iddata},
          success : function (hasil) {
            Swal.fire('Sukses Dihapus!', '', 'success')
          },
          error   :function(err) {
            console.log(err);
          }
        });
        
      } else if (result.isDenied) {
        Swal.fire('Batal Dihapus', '', 'info')
      }
    });
  }/*Fungsi Hapus*/


  
$("#cekAll").change(function () {
    $(".akun").prop('checked', $(this).prop("checked"));
});

$("#cekAll2").change(function () {
    $(".pengguna").prop('checked', $(this).prop("checked"));
});

$("#cekAll2").change(function () {
    $(".bank").prop('checked', $(this).prop("checked"));
});

$("#langkah1").click(function(event) {
	alert('tes');
	$("#step1").attr('class', 'active');
	$("#2a").attr('class', 'tab-pane active');
});

</script>  
  
 

<!-- modal pengguna -->
  <div class="modal fade" id="modal-pengguna">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="kembaliinfo">Batal</button>
          <button type="button" class="btn btn-primary btn-flat pull-right next-step" id="akunstep1">Simpan dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  <!-- MOdal Bank -->
 
  <div class="modal fade" id="modal-bank">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Form Tambah Bank</h4>
        </div>
        <div class="modal-body">

           
  
        </div><!-- body -->
        <div class="modal-footer">
          <button type="reset" class="btn btn-default" data-dismiss="modal">Kembali</button>
          <button type="submit"  id="step2" class="btn btn-primary  btn-flat next-step">Simpan dan Lanjut</button>
        </div>
      </div>
    </div>
  </div>
  