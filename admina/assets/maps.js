

$(document).ready(function(){
//* select Provinsi */


  $('.autocomplete0').keypress(function(e){
    e.stopPropagation();
     if (e.which == 13) {
        return false;
      }
  });

  // var shopPosition = {lat: <?=$res->lat?$shop->lat:'-6.231864'?>, lng: <?=$res->lng?$shop->lng?>:'106.869136'?>},
  var shopPosition = {lat: '-6.231864', lng:'106.869136'},
  customerPosition = {lat: '-6.177897', lng: '106.838479'},
  geocoder, markerShop, route,maps=[], markers=[], autocompletes=[];

  function initMap(){
        geocoder = new google.maps.Geocoder();
        maps[0] = createMap(0, customerPosition, 'A');
  }

    initMap();

    function createMap(id,{ lat, lng}, label){
        
        var mymap = new google.maps.Map(document.getElementById('map'+id), {
            center: { lat, lng },
            zoom: 20,
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
        markers[id] = createMarker(mymap, {lat, lng}, 'Geser atau click untuk memindah lokasi', label, id);
        markerShop = createMarker(mymap, shopPosition, 'Lokasi Toko', 'B', id, false);
        
        autocompletes[id] = new google.maps.places.SearchBox(
            document.querySelector('.autocomplete'+id), { componentRestrictions: {country: 'ID'}, language:'ar'}
        );
        autocompletes[id].bindTo('bounds', mymap);
        //autocompletes[id].setFields(['formatted_address', 'geometry']); //for limiting cost
        
        autocompletes[id].addListener('places_changed', function() {
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
            document.querySelector('.lat'+id).value = place.geometry.location.lat();
            document.querySelector('.lng'+id).value = place.geometry.location.lng();
            document.querySelector('.alamat_peta'+id).value = place.formatted_address;
            
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
            getPrice();
        });
        
        mymap.addListener('click',function(event) {
            markers[id].setPosition(event.latLng);
            geocodeLatLng(markers[id], event.latLng, id);
        });

       
        return mymap;
    };

    function createMarker(map, position, title=null, label='A', id, draggable=true){
        var mymarker = new google.maps.Marker({ map, position, title, label, draggable });
        if(draggable){
          mymarker.addListener('dragend',function(event) {
              geocodeLatLng(mymarker, event.latLng, id);
          });
        }
        
        return mymarker;
    };

    function geocodeLatLng(mymarker, myLatlng, id, rewrite=true) {
        geocoder.geocode({'location': myLatlng}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    if(rewrite){
                        document.querySelector('.lat'+id).value=results[0].geometry.location.lat();
                        document.querySelector('.lng'+id).value=results[0].geometry.location.lng();
                        getDistance(results[0].geometry.location);
                  getPrice();
                    }
                    document.querySelector('.alamat_peta'+id).value=results[0].formatted_address;
                    /*document.querySelector('#alamatnya').value=results[0].formatted_address;*/
                } else {
                    mynotif('No results found');
                }
            }else{
                mynotif('Geocoder failed due to: ' + status);
            }
        });
    }

    function getDistance(toPosition){
      if(route!==undefined) route.setMap(null);
      var directionsService = new google.maps.DirectionsService();
      var fromPosition = new google.maps.LatLng(shopPosition.lat, shopPosition.lng);
      var distance = google.maps.geometry.spherical.computeDistanceBetween(fromPosition, toPosition); //meter
      distance = Math.round(distance*1000)/1000; //km
      $('.jarak').val(distance+' km');
        var request = {
            origin: fromPosition,
            destination: toPosition,
            travelMode: google.maps.TravelMode.DRIVING
        };
      directionsService.route(request, function(result, status) {
        var map = maps[0];
          if (status == google.maps.DirectionsStatus.OK) {
              $('.jarak').val(result.routes[0].legs[0].distance.text);
              $('.waktu').val(result.routes[0].legs[0].duration.text);
              formRoute=result.routes[0].overview_path;
              route = new google.maps.Polyline({
              path: [],
              geodesic : true,
              strokeColor: '#FF0000',
              strokeOpacity: 1.0,
              strokeWeight: 2,
              editable: false,
              map:map
          });
          for (i = 0; i < formRoute.length; i++) {
              route.getPath().push(formRoute[i]);
          }
          map.setZoom(20);
          map.panTo(toPosition);
          }
      });
    }

   
    

    

    // merubah geotag menjadi alamat
  function convert_latlng(pos) {
   // membuat geocoder
   var geocoder = new google.maps.Geocoder();
   geocoder.geocode({'latLng': pos}, function(r) {

    if (r && r.length > 0) {
     document.getElementById('alamatnya').innerHTML = r[0].formatted_address;
    } else {
     document.getElementById('alamatnya').innerHTML = 'Alamat tidak di temukan di lokasi !!';
    }

   });
  }
});
