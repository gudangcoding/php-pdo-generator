<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Update Muatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>daftar-muatan">Muatan</a></li>
        <li class="active" id="dinamis">Daftar Muatan</li>
    </ol>
</section>

<!-- <section class="content">
	<div class="row">

		 
	</div>
</section> -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                	<div class="table-responsive">
                		<table class="table dynatable">
                			<thead>
                				<th scope="col" class="text-center">All</th>
                				<th scope="col" class="text-center">Baru</th>
                				<th scope="col" class="text-center">Berangkat Muat</th>
                				<th scope="col" class="text-center">Lokasi Muat</th>
                				<th scope="col" class="text-center">Muat</th>
                				<th scope="col" class="text-center">Selesai Muat</th>
                				<th scope="col" class="text-center">Mulai Kiriman</th>
                				<th scope="col" class="text-center">Proses Kirim</th>
                				<th scope="col" class="text-center">Lokasi Bongkar</th>
                				<th scope="col" class="text-center">Bongkar</th>
                				<th scope="col" class="text-center">Selesai Bongkar</th>
                				<th scope="col" class="text-center">Selesai</th>
                			</thead>
                			<tbody>
                <td><button class="btn btn-block btn-large btn-primary">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-success">0</button></td>
                    
                <td align="center"><button class="btn btn-block btn-large btn-danger">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-warning">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-info">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-danger">0</button></a></td>
                    
     			<td><button class="btn btn-block btn-large btn-primary">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-success">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-danger">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-warning">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-info">0</button></td>
                    
                <td><button class="btn btn-block btn-large btn-success">0</button></td>
                </tbody>
             </table>
                    </div>  
                </div><!-- .box-header -->
                <div class="box-body table-responsive">
                  <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active">
                              <a href="#ftl" aria-controls="ftl" role="tab" data-toggle="tab">FTL</a>
                          </li>
                          <li role="presentation">
                              <a href="#ltl" aria-controls="tab" role="tab" data-toggle="tab">LTL</a>
                          </li>
                          <li role="presentation">
                              <a href="#rental" aria-controls="tab" role="tab" data-toggle="tab">RENTAL</a>
                          </li>
                          <li role="presentation">
                              <a href="#fcl" aria-controls="tab" role="tab" data-toggle="tab">FCL</a>
                          </li>
                          <li role="presentation">
                              <a href="#lcl" aria-controls="tab" role="tab" data-toggle="tab">LCL</a>
                          </li>
                      </ul>
                  
                      <!-- Tab panes -->
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="ftl">
                            <div class="table-responsive" style="margin-top: 20px;">
                                <a href="<?=base_admin()?>index.php/update-muatan/" class="btn btn-primary"><i class="fa fa-plus"></i> Muatan</a><hr>
                                <table id="example" class="table table-hover umum">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="cekAll"> #</th>
                                            <th class="text-center">Tgl. Booking</th>
                                            <th class="text-center">No. Muatan</th>
                                            <th class="text-center">Perusahaan</th>
                                            <th class="text-center">Rencana Muat</th>
                                            <th class="text-center">Jenis Kiriman</th>
                                            <th class="text-center">Asal</th>
                                            <th class="text-center">Tujuan 1</th>
                                            <th class="text-center">Tujuan 2</th>
                                            <th class="text-center">Jenis Truk</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div><!-- ftl -->
                          <div role="tabpanel" class="tab-pane" id="ltl">
                            <div class="table-responsive" style="margin-top: 20px;">
                                <a href="<?=base_admin()?>index.php/daftar-muatan/tambah-ltl" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah LTL</a><hr>
                                <table id="example" class="table table-hover umum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div><!-- LTL -->
                          <div role="tabpanel" class="tab-pane" id="rental">
                            <div class="table-responsive" style="margin-top: 20px;">
                                <a href="<?=base_admin()?>index.php/daftar-muatan/tambah-rental" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah RENTAL</a><hr>
                                <table id="example" class="table table-hover umum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div><!-- RENTAL -->
                          <div role="tabpanel" class="tab-pane" id="fcl">
                            <div class="table-responsive" style="margin-top: 20px;">
                                <a href="<?=base_admin()?>index.php/daftar-muatan/tambah-fcl" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah FCL</a><hr>
                                <table id="example" class="table table-hover umum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div><!-- FCL -->
                          <div role="tabpanel" class="tab-pane" id="lcl">
                            <div class="table-responsive" style="margin-top: 20px;">
                                <a href="<?=base_admin()?>index.php/daftar-muatan/tambah-lcl" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah LCL</a><hr>
                                <table id="example" class="table table-hover umum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div><!-- LCL -->
                      </div>
                  </div>
                </div>
            </div><!-- box -->
        </div><!-- col-12 -->
    </div><!-- row -->

</section><!-- /.content -->
<!-- Main content -->

<script type="text/javascript">
$(document).ready(function() {
   

$("#muatan,#bongkar,#armada,#info").click(function(event) {
  $("#dinamis").text($(this).text());
});

$("#cekAll").change(function () {
    $(".info,.muatan,.bongkar,.armada").prop('checked', $(this).prop("checked"));
});
</script>


