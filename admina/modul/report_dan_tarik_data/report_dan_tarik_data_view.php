
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Report Dan Tarik Data Keuangan
    </h1>
        <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>report-dan-tarik-data">Report Dan Tarik Data Keuangan</a></li>
        <li class="active">Report Dan Tarik Data Keuangan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h6 class="box-title">List Report Dan Tarik Data Keuangan</h6>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <form action="" method="POST"  role="form">
                  
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label>Tanggal Mulai</label>
                      <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" value="" required="required" title="">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label>Tanggal Akhir</label>
                      <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" value="" required="required" title="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label>Status</label>
                      <select name="layanan" id="layanan" class="form-control" required="required">
                        <option value="">Pilih Layanan</option>
                        <option value="all">All</option>
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                      </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                      <label>Type Layanan</label>
                      <select name="layanan" id="layanan" class="form-control" required="required">
                        <option value="">Pilih Layanan</option>
                        <option value="all">All</option>
                        <option value="FTL">FTL</option>
                        <option value="LTL">LTL</option>
                      </select>
                    </div>
                  </div>
                    <hr>
                     <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <button type="button" class="btn btn-success pull-right"><i class="fa fa-file-excel-o"></i> Download Laporan</button>
                       </div>
                     </div>
                   
                  </form>
                </div>
            </div>
          </div>
        </div>


</section><!-- /.content -->

