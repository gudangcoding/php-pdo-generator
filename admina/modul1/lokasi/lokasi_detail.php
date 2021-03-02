

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Lokasi
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>lokasi">Lokasi</a></li>
                        <li class="active">Detail Lokasi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Lokasi</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=level_user>level_user</label>
                          <input type="text" disabled="" value="<?=$data_edit->level_user;?>" class="form-control">
                      </div>
                    </div><!-- /.row level_user -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=ket>ket</label>
                          <input type="text" disabled="" value="<?=$data_edit->ket;?>" class="form-control">
                      </div>
                    </div><!-- /.row ket -->

                   
                    </form>
                    <a href="<?=base_index();?>lokasi" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
