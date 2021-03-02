

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                      Jenis Truk
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>jenis-truk">Jenis Truk</a></li>
                        <li class="active">Edit Jenis Truk</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Edit Jenis Truk</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="update" method="post" class="form-horizontal" action="<?=base_admin();?>modul/jenis_truk/jenis_truk_action.php?act=up">
                      <div class="form-group">
                        <label for="Kode Jenis Truk" class="control-label col-lg-2">Kode Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="kode_jenis_truk" value="<?=$data_edit->kode_jenis_truk;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Nama Jenis Truk" class="control-label col-lg-2">Nama Jenis Truk</label>
                        <div class="col-lg-10">
                          <input type="text" name="nama_jenis_truk" value="<?=$data_edit->nama_jenis_truk;?>" class="form-control" required> 
                        </div>
                      </div><!-- /.form-group -->
                      <div class="form-group">
                        <label for="Kapasitas /ton" class="control-label col-lg-2">Kapasitas /ton</label>
                        <div class="col-lg-10">
                          <input type="number" name="kapasitaston" id="kapasitaston" value="<?=$data_edit->kapasitaston;?>" class="form-control" required> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Kapasitas /kubik" class="control-label col-lg-2">Kapasitas /kubik</label>
                        <div class="col-lg-10">
                          <input type="number" name="kapasitaskubik" id="kapasitaskubik" value="<?=$data_edit->kapasitaskubik;?>" class="form-control" required> 
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?=$data_edit->id;?>">
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
                    <a href="<?=base_index();?>jenis-truk" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
 