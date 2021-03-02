

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Serial Number
                    </h1>
                   <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>serial-number">Serial Number</a></li>
                        <li class="active">Detail Serial Number</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
<div class="row">
    <div class="col-lg-12">
        <div class="box box-solid box-primary">
                                   <div class="box-header">
                                    <h3 class="box-title">Detail Serial Number</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>

                  <div class="box-body">
                   <form class="form-horizontal">
                      <div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=legal>legal</label>
                          <?php foreach ($db->fetch_all("Legal") as $isi) {
                  if ($data_edit->legal==$isi->Inisial) {

                    echo "<input disabled class='form-control' type='text' value='$isi->Nama_Legal'>";
                  }
               } ?>
              
                    </div><!-- /.form-group -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=Inisial Departement>Inisial Departement</label>
                          <input type="text" disabled="" value="<?=$data_edit->form;?>" class="form-control">
                    </div><!-- /.form-group -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=Awalan Kwitansi>Awalan Kwitansi</label>
                          <input type="text" disabled="" value="<?=$data_edit->prefix;?>" class="form-control">
                    </div><!-- /.form-group -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=Awal Nomor>Awal Nomor</label>
                          <input type="text" disabled="" value="<?=$data_edit->penomoran;?>" class="form-control">
                    </div><!-- /.form-group -->
<div class='row'>
                      <div class='form-group col-xs-6'>
                        <label for=user_id>user_id</label>
                          <input type="text" disabled="" value="<?=$data_edit->user_id;?>" class="form-control">
                    </div><!-- /.form-group -->

                   
                    </form>
                    <a href="<?=base_index();?>serial-number" class="btn btn-success btn-flat"><i class="fa fa-step-backward"></i> Kembali</a>
          
                  </div>
                  </div>
              </div>
</div>
                  
                </section><!-- /.content -->
        
