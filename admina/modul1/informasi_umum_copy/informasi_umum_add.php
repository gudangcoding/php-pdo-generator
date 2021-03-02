
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Informasi Umum
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>informasi-umum">Informasi Umum</a></li>
                        <li class="active">Tambah Informasi Umum</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-md-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Akun</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">


<div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active">
        <a  href="#1a" data-toggle="tab">Informasi Umum</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Informasi Bank</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
			  	 <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/informasi_umum/informasi_umum_action.php?act=in">
                      <div class="form-group">
                        <label for="Nama Perusahaan" class="control-label col-md-2">Nama Perusahaan</label>
                        <div class="col-md-4">
                          <input type="text" name="Nama_Perusahaan" placeholder="Nama Perusahaan" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Perusahaan" class="control-label col-md-2">Alamat Perusahaan</label>
                        <div class="col-md-4">
                          <input type="text" name="Alamat_Perusahaan" placeholder="Alamat Perusahaan" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Legal" class="control-label col-md-2">Nama Legal</label>
                        <div class="col-md-4">
                          <input type="text" name="Nama_Legal" placeholder="Nama Legal" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Legal" class="control-label col-md-2">Alamat Legal</label>
                        <div class="col-md-4">
                          <input type="text" name="Alamat_Legal" placeholder="Alamat Legal" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-md-2">Nama Lengkap</label>
                        <div class="col-md-4">
                          <input type="text" name="Nama_Lengkap" placeholder="Nama Lengkap" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Alamat Email" class="control-label col-md-2">Alamat Email</label>
                        <div class="col-md-4">
                          <input type="text" data-rule-email="true" name="Alamat_Email" placeholder="Alamat Email" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="No HP" class="control-label col-md-2">No HP</label>
                        <div class="col-md-4">
                          <input type="text" name="No_HP" placeholder="No HP" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Posisi" class="control-label col-md-2">Posisi</label>
                        <div class="col-md-4">
                          <select name="Posisi" data-placeholder="Pilih Posisi ..." class="form-control chzn-select" tabindex="2" required>
               <option value=""></option>
               <?php foreach ($db->fetch_all("Jabatan") as $isi) {
                  echo "<option value='$isi->id'>$isi->Nama_jabatan</option>";
               } ?>
              </select>
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Password" class="control-label col-md-2">Password</label>
                        <div class="col-md-4">
                          <input type="text" name="Password" placeholder="Password" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-md-2">&nbsp;</label>
                        <div class="col-md-4">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
			  </div>
			<div class="tab-pane" id="2a">
				<form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/informasi_bank/informasi_bank_action.php?act=in">
                      <div class="form-group">
                        <label for="Nama Lengkap" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-4">
                          <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nama Bank" class="control-label col-lg-2">Nama Bank</label>
                        <div class="col-lg-4">
                          <input type="text" name="nama_bank" placeholder="Nama Bank" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
<div class="form-group">
                        <label for="Nomor Rekening" class="control-label col-lg-2">Nomor Rekening</label>
                        <div class="col-lg-4">
                          <input type="text" name="nomor_rek" placeholder="Nomor Rekening" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-4">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
			</div>
  		</div>


                    
 <a href="<?=base_index();?>informasi-umum" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            