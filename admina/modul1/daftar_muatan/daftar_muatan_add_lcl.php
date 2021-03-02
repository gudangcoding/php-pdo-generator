<style type="text/css">
   #map0{
        width: 90%;height:400px;margin: 20px;
      }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Muatan
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?=base_index();?>daftar-muatan">Daftar Muatan</a></li>
    <li class="active">Tambah Daftar Muatan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="box box-solid box-primary">
        <div class="box-header">
          <h3 class="box-title">Form Tambah Muatan</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
          <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#infoumum" aria-controls="home" role="tab" data-toggle="tab">Info Umum</a>
              </li>
              <li role="presentation">
                <a href="#lokasimuatan" aria-controls="tab" role="tab" data-toggle="tab">Lokasi
                  Muatan</a>
              </li>
              <li role="presentation">
                <a href="#lokasitujuan" aria-controls="tab" role="tab" data-toggle="tab">Tujuan
                  Muatan</a>
              </li>
              <li role="presentation">
                <a href="#alamatops" aria-controls="tab" role="tab" data-toggle="tab">Alamat OPS</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="infoumum">

                <form>
                  <br>
                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">No Booking</label>
                    <div class="col-lg-4">
                      <input type="text" name="no_booking" id="no_booking" class="form-control" required="required"
                        readonly>
                    </div>
                    <!-- <div class="form-group row"> -->
                    <label class="col-xs-2 col-form-label">Status Booking</label>
                    <div class="col-lg-4">
                      <input type="text" name="status_booking" id="status_booking" class="form-control"
                        required="required" readonly>
                    </div>
                    <!-- </div> -->
                  </div>



                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Tanggal Booking</label>
                    <div class="col-lg-4">
                      <input type="date" name="tgl_booking" id="tgl_booking" class="form-control" required="required">
                    </div>

                    <label class="col-xs-2 col-form-label">Legal</label>
                    <div class="col-lg-4">
                      <select name="legal" id="legal" class="form-control" required="required">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">No Referensi</label>
                    <div class="col-lg-4">
                      <input type="text" name="no_referensi" id="no_referensi" class="form-control" required="required">
                    </div>


                    <label class="col-xs-2 col-form-label">Pelanggan</label>
                    <div class="col-lg-4">
                      <select name="pelanggan" id="pelanggan" class="form-control" required="required">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Nama Barang</label>
                    <div class="col-lg-4">
                      <input type="text" name="nama_barang" id="nama_barang" class="form-control" required="required">
                    </div>

                    <label class="col-xs-2 col-form-label">Satuan</label>
                    <div class="col-lg-4">
                      <select name="satuan" id="satuan" class="form-control" required="required">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Jumlah Barang</label>
                    <div class="col-lg-4">
                      <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control"
                        required="required">
                    </div>

                    <label class="col-xs-2 col-form-label">Jenis Truk</label>
                    <div class="col-lg-4">
                      <select name="jenis_truk" id="jenis_truk" class="form-control" required="required">
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-warning">Kembali</button>
                      <button type="button" class="btn btn-primary pull-right">Simpan Dan Lanjut</button>
                    </div>
                  </div>
                </form>

              </div><!-- infoumum -->
              <div role="tabpanel" class="tab-pane" id="lokasimuatan">
                <form>
                  <br>
                  <div class="form-group row">
                    <label for="Dari" class="col-xs-2 col-form-label">Dari</label>
                    <div class="col-lg-4">
                      <textarea type="text" name="dari" placeholder="Kota Asal(alamat lengkap)" class="form-control"
                        required></textarea>
                    </div>

                    <label class="col-xs-2 col-form-label">Zona</label>
                    <div class="col-lg-4">
                      <input type="text" name="zona" placeholder="Zona" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Nama Kontak</label>
                    <div class="col-lg-4">
                      <input type="text" name="nm_kontak" placeholder="Nama Kontak" class="form-control" required>
                    </div>
                    <label class="col-xs-2 col-form-label">No Kontak</label>
                    <div class="col-lg-4">
                      <input type="text" name="no_kontak" placeholder="Nomor Kontak" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Tanggal Muat" class="col-xs-2 col-form-label">Tanggal Muat</label>
                    <div class="col-lg-4">
                      <input type="date" name="tgl_muat" placeholder="" class="form-control" required>
                    </div>
                    <label for="Jam Muat" class="col-xs-2 col-form-label">Jam Muat</label>
                    <div class="col-lg-4">
                      <input type="time" name="jam_muat" placeholder="" class="form-control" required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="Satuan" class="col-xs-2 col-form-label">Satuan</label>
                    <div class="col-lg-4">
                      <select name="Satuan" class="form-control chzn-select" tabindex="2" required="required">
                        <option value="satuan"></option>
                      </select>
                    </div>

                    <label for="Nama Muatan" class="col-xs-2 col-form-label">Nama Muatan</label>
                    <div class="col-lg-4">
                      <input type="text" name="nm_muatan" placeholder="Nama Muatan" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Jumlah Kubikasi" class="col-xs-2 col-form-label">Jumlah Kubikasi</label>
                    <div class="col-lg-4">
                      <input type="number" name="jml_kubikasi" placeholder="Jumlah Kubikasi" class="form-control"
                        required>
                    </div>

                    <label for="Jumlah Berat" class="col-xs-2 col-form-label">Jumlah Berat</label>
                    <div class="col-lg-4">
                      <input type="number" name="jml_berat" placeholder="Jumlah Berat (KG)" class="form-control"
                        required>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="Keterangan" class="col-xs-2 col-form-label">Ketarangan</label>
                    <div class="col-lg-4">
                      <textarea type="text" name="Keterangan" placeholder="Detail Keterangan Barang"
                        class="form-control" required></textarea>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-warning">Kembali</button>
                      <button type="button" class="btn btn-primary pull-right">Simpan Dan Lanjut</button>
                    </div>
                  </div>
                </form>
              </div><!-- lokasimuatan -->
              <div role="tabpanel" class="tab-pane" id="lokasitujuan">
                <form>
                  <br>
                  <div class="form-group row">
                    <label for="Dari" class="col-xs-2 col-form-label">Ke</label>
                    <div class="col-lg-4">
                      <textarea type="text" name="dari" placeholder="Kota Asal (Alamat lengkap)" class="form-control"
                        required></textarea>
                    </div>

                    <label class="col-xs-2 col-form-label">Zona</label>
                    <div class="col-lg-4">
                      <input type="text" name="zona" placeholder="Zona" class="form-control" required>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Nama Kontak</label>
                    <div class="col-lg-4">
                      <input type="text" name="nm_kontak" placeholder="Nama Kontak" class="form-control" required>
                    </div>

                    <label class="col-xs-2 col-form-label">No Kontak</label>
                    <div class="col-lg-4">
                      <input type="text" name="no_kontak" placeholder="No Kontak" class="form-control" required>
                    </div>
                  </div>




                  <div class="form-group row">
                    <label for="Tanggal Bongkar" class="col-xs-2 col-form-label">Tanggal Bongkar</label>
                    <div class="col-lg-4">
                      <input type="date" name="tgl_Bongkar" placeholder="" class="form-control" required>
                    </div>

                    <label for="Jam Bongkar" class="col-xs-2 col-form-label">Jam Bongkar</label>
                    <div class="col-lg-4">
                      <input type="time" name="jam_Bongkar" placeholder="" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Satuan" class="col-xs-2 col-form-label">Satuan</label>
                    <div class="col-lg-4">
                      <select name="satuan" class="form-control chzn-select" tabindex="2" required="required">
                        <option value="satuan"></option>
                      </select>
                    </div>

                    <label for="Nama Muatan" class="col-xs-2 col-form-label">Nama Muatan</label>
                    <div class="col-lg-4">
                      <input type="text" name="nm_muatan" placeholder="Nama Muatan" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Jumlah Kubikasi" class="col-xs-2 col-form-label">Jumlah Kubikasi</label>
                    <div class="col-lg-4">
                      <input type="text" name="jml_kubikasi" placeholder="Jumlah Kubikasi" class="form-control"
                        required>
                    </div>

                    <label for="Jumlah Berat" class="col-xs-2 col-form-label">Jumlah Berat</label>
                    <div class="col-lg-4">
                      <input type="text" name="jml_berat" placeholder="Jumlah Berat (KG)" class="form-control" required>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-xs-12">
                      <button type="button" class="btn btn-warning">Kembali</button>
                      <button type="button" class="btn btn-primary pull-right">Simpan Dan Lanjut</button>
                    </div>
                  </div>
                </form>
              </div><!-- lokasitujuan  -->

              <div role="tabpanel" class="tab-pane active" id="alamatops" style="margin-bottom: 10px;">
                    <h2 class="text-center">Pengaturan Maps</h2>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" autocomplete="off" placeholder="Alamat Jembut" id="asal" class="form-control autocomplete0">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" autocomplete="off" placeholder="Alamat Tujuan" id="tujuan" class="form-control autocomplete1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="map0" ></div>
                            <input type="hidden" name="lat0" class="lat0" value="-6.234720230102539"/>
                            <input type="hidden" name="lng0" class="lng0" value="106.869178771972660"/>
                            <input type="hidden" class="alamat_toko"
                              value="Jl. Otto Iskandardinata No.149, RT.2/RW.8, Bidara Cina, Kecamatan Jatinegara, JAKARTA, Daerah Khusus Ibukota Jakarta 13330"/>
                    </div>  
                    <div class="row">
            <div class="col-xs-6">
                <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Jarak</label>
                      <input type="text" readonly required placeholder="Jarak" class="form-control form-mini jarak">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Estimasi Waktu</label>
                      <input type="text" readonly required placeholder="Waktu" class="form-control form-mini waktu">
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Lat Asal</label>
                      <input type="text" readonly required class="form-control lat" id="lat0" name="lat0" class="lat0">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Long Asal</label>
                      <input type="text" readonly required class="form-control lng" id="lng0" name="lng0" class="lng0">
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat Pengambilan</label>
                          <textarea name="alamat_peta0" placeholder="Alamat pengiriman" class="form-control form-mini alamat_peta0"></textarea>
                        </div>
                    </div>
                  </div>

                </div><!-- form asal -->
                
            </div>
            <div class="col-xs-6">
                <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Jarak</label>
                      <input type="text" readonly required placeholder="Jarak" class="form-control form-mini jarak">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Estimasi Waktu</label>
                      <input type="text" readonly required placeholder="Waktu" class="form-control form-mini waktu">
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Lat Tujuan</label>
                      <input type="text" readonly required class="form-control lat1" id="lat1" name="lat1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Long Tujuan</label>
                      <input type="text" readonly required class="form-control lng1" id="lng1" name="lng1">
                    </div>
                    </div>
                </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label>Alamat Tujuan</label>
                          <textarea name="alamat_peta1" placeholder="Alamat pengiriman" class="form-control form-mini alamat_peta1"></textarea>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
               </div><!-- Maps -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx0B2TDZVzluW1otn9zqOl0yL7MlwKDXE&language=id&region=ID&libraries=places,geometry">
  </script>
<script>
  $(document).ready(function () {
    $("#legal").select2();
    $("#pelanggan").select2();
    $("#satuan").select2();
    $("#jenis_truk").select2();
  });
</script>
<script>
  $(document).ready(function () {

    $('.autocomplete0').keypress(function (e) {
      e.stopPropagation();

      if (e.which == 13) {
        return false;
      }
    });

    var shopPosition = { lat: -6.231864, lng: 106.869136 },
      customerPosition = { lat: -6.177897, lng: 106.838479 },
      geocoder, markerShop, route, maps = [], markers = [], autocompletes = [];

    function initMap() {
      geocoder = new google.maps.Geocoder();
      maps[0] = createMap(0, customerPosition, 'A');
      // setting agar texfield pada kolom asal dan juga tujuan dapat memanggil fungsi autocomplete
      // var asal = new google.maps.places.Autocomplete((document.getElementById('asal')),{ types: ['geocode'] });
      // var tujuan = new google.maps.places.Autocomplete((document.getElementById('tujuan')),{ types: ['geocode'] });
    }

    initMap();

    function createMap(id, { lat, lng }, label) {

      var mymap = new google.maps.Map(document.getElementById('map' + id), {
        center: { lat, lng },
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        streetViewControl: false,
        mapTypeControl: false,
        mapTypeControlOptions: {
          position: google.maps.ControlPosition.TOP_LEFT,
          style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        },
        zoomControl: true,
        zoomControlOptions: {
          position: google.maps.ControlPosition.LEFT_TOP
        },
        scaleControl: true,
        scaleControlOptions: {
          position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        fullscreenControl: true,
        fullscreenControlOptions: {
          position: google.maps.ControlPosition.LEFT_TOP
        }
      });
      markers[id] = createMarker(mymap, { lat, lng }, 'Geser atau click untuk memindah lokasi', label, id);
      markerShop = createMarker(mymap, shopPosition, 'Lokasi Toko', 'B', id, false);

      autocompletes[id] = new google.maps.places.SearchBox(
        document.querySelector('.autocomplete' + id), { componentRestrictions: { country: 'ID' }, language: 'ar' }
      );
      autocompletes[id].bindTo('bounds', mymap);
      //autocompletes[id].setFields(['formatted_address', 'geometry']); //for limiting cost

      autocompletes[id].addListener('places_changed', function () {
        var places = autocompletes[id].getPlaces();

        if (places.length == 0) {
          return;
        }

        markers[id].setMap(null);

        var bounds = new google.maps.LatLngBounds();
        var place = places[0];
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }

        markers[id] = createMarker(mymap, place.geometry.location, 'Geser atau click untuk memindah lokasi', label, id);
        document.querySelector('#lat' + id).value = place.geometry.location.lat();
        document.querySelector('#lng' + id).value = place.geometry.location.lng();
        document.querySelector('.alamat_peta' + id).value = place.formatted_address;
        console.log(place);
        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }

        mymap.fitBounds(bounds);
        mymap.setZoom(22);
        mymap.panTo(place.geometry.location);
        getDistance(place.geometry.location);
        //getPrice();
      });

      mymap.addListener('click', function (event) {
        markers[id].setPosition(event.latLng);
        geocodeLatLng(markers[id], event.latLng, id);
      });


      return mymap;
    };

    function createMarker(map, position, title = null, label = 'A', id, draggable = true) {
      var mymarker = new google.maps.Marker({ map, position, title, label, draggable });
      if (draggable) {
        mymarker.addListener('dragend', function (event) {
          geocodeLatLng(mymarker, event.latLng, id);
        });
      }

      return mymarker;
    };

    function geocodeLatLng(mymarker, myLatlng, id, rewrite = true) {
      geocoder.geocode({ 'location': myLatlng }, function (results, status) {
        if (status === 'OK') {
          if (results[0]) {
            if (rewrite) {
              document.querySelector('.lat' + id).value = results[0].geometry.location.lat();
              document.querySelector('.lng' + id).value = results[0].geometry.location.lng();
              getDistance(results[0].geometry.location);
              // getPrice();
            }
            document.querySelector('.alamat_peta' + id).value = results[0].formatted_address;
            document.querySelector('#alamatnya').value = results[0].formatted_address;
          } else {
            mynotif('No results found');
          }
        } else {
          mynotif('Geocoder failed due to: ' + status);
        }
      });
    }

    function getDistance(toPosition) {
      if (route !== undefined) route.setMap(null);
      var directionsService = new google.maps.DirectionsService();
      var fromPosition = new google.maps.LatLng(shopPosition.lat, shopPosition.lng);
      var distance = google.maps.geometry.spherical.computeDistanceBetween(fromPosition, toPosition); //meter
      distance = Math.round(distance * 1000) / 1000; //km
      $('.jarak').val(distance + ' km');
      var request = {
        origin: fromPosition,
        destination: toPosition,
        travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function (result, status) {
        var map = maps[0];
        if (status == google.maps.DirectionsStatus.OK) {
          $('.jarak').val(result.routes[0].legs[0].distance.text);
          $('.waktu').val(result.routes[0].legs[0].duration.text);
          formRoute = result.routes[0].overview_path;
          route = new google.maps.Polyline({
            path: [],
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2,
            editable: false,
            map: map
          });
          for (i = 0; i < formRoute.length; i++) {
            route.getPath().push(formRoute[i]);
          }
          map.setZoom(20);
          map.panTo(toPosition);
        }
      });
    }

  });  
</script>