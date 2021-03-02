
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Monitoring Pengemudi
                    </h1>
                        <ol class="breadcrumb">
                        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?=base_index();?>monitor-armada">Monitor Pengemudi</a></li>
                        <li class="active">Monitor Pengemudi</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                <h3 class="box-title">Maps Monitor Pengemudi</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                  <div class="row">
                                    <div class="col-xs-12 col-lg-8">
                                      <iframe style="width: 100%; height: 500px;" src="https://demo.traccar.org/simple/?token=pG37uy8R0d6VNb5sVkhklmLtzGWWGzky"></iframe>
                                    </div>
                                    <div class="col-xs-12 col-lg-4">
                                      <div class="panel panel-primary">
                                        <div class="panel-heading">
                                          <h3 class="panel-title">Manajemen Pengemudi</h3>
                                        </div>
                                        <div class="panel-body">
                                          
                                          <button data-toggle="modal" href='#modal-id' type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Pengemudi</button><hr>
                                            <div class="form-group">
                                              <div class="form-group">
                                                <label for="inputMobil">Filter Pengemudi</label>
                                                  <select name="mobil" id="Mobil" class="form-control chzn-select" required="required">
                                                    <option value="">Bekerja</option>
                                                    <option value="">Standby</option>
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="form-group">
                                                <label for="inputMobil">Pilih Rute</label>
                                                  <select name="mobil" id="Mobil" class="form-control chzn-select" required="required">
                                                    <option value=""></option>
                                                  </select>
                                              </div>
                                            </div>
                                          
                                            
                                          
                                            
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                </section><!-- /.content -->
          
<div class="modal fade" id="modal-id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            