
           
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Lokasi
                    </h1>
                           <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>lokasi">Lokasi</a></li>
                        <li class="active">Tambah Lokasi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12"> 
        <div class="box box-solid box-primary">
                                 <div class="box-header">
                                    <h3 class="box-title">Tambah Lokasi</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                     <form id="input" method="post" class="form-horizontal foto_banyak" action="<?=base_admin();?>modul/lokasi/lokasi_action.php?act=in">
                      <div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=level_user>level_user</label>
                          <input type="text" name="level_user" placeholder="level_user" class="form-control" > 
                      </div>
                  </div><!-- /.row  level_user -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=ket>ket</label>
                          <input type="text" name="ket" placeholder="ket" class="form-control" > 
                      </div>
                  </div><!-- /.row  ket -->

                      
                      <div class="form-group">
                        <label for="tags" class="control-label col-lg-2">&nbsp;</label>
                        <div class="col-lg-10">
                          <input type="submit" class="btn btn-primary btn-flat" value="submit">
                        </div>
                      </div><!-- /.form-group -->
                    </form>
 <a href="<?=base_index();?>lokasi" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
            