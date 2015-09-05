@extends('admin.template')

@section('content')
<style type="text/css">
 	#map {
        width: 100%;
        height: 500px;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 10px #ccc;
      }

</style>
	<div class="block-header">
                        <h2>Real Time Update of all drivers</h2>
                    
                    
                    </div>
    <div id="map"></div>

@endsection


@section('script')
<script>
var markers={!!json_encode($markers)!!};
var infoWindowContent={!!json_encode($info)!!};
var map_markers=[];

jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
    document.body.appendChild(script);
});

var deadPinImage,alivePinImage,map,bounds,infoWindow,boundsListener;

function initialize() {

    bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(45);
        
   	deadPinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|FE7569" ,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
	alivePinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|00ff00",
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
        
    
    updateMap(true);

    setInterval(periodicMap, 5000);
    
}  

function updateMap(check){
	for (var i = map_markers.length - 1; i >= 0; i--) {
		map_markers[i].setMap(null);
	};
	map_markers=[];
	// Display multiple markers on a map
    infoWindow = new google.maps.InfoWindow();
	// Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            icon: (markers[i][3]==1)?alivePinImage:deadPinImage
        });
        
        map_markers.push(marker);
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        if(check)
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(10);
        google.maps.event.removeListener(boundsListener);
    });
}

function periodicMap(){
	$.ajax({
		url:"{{route('admin::driver.map.update')}}",
		type:'GET',
		dataType: "json",
		success:function(data){
			markers=data[0];
			infoWindowContent=data[1];
			updateMap(false);
		},

	})
}
</script>
@endsection
