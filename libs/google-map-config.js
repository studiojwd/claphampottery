function initialize() {


	var myLatLng = new google.maps.LatLng(40.73804,-74.003681);
	var mapOptions = {
	  zoom: 16,
	  center: myLatLng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  scrollwheel: false
	}
	var map = new google.maps.Map(document.getElementById('map-insert'), mapOptions);

	//var image = 'images/map-marker.png';

	var beachMarker = new google.maps.Marker({
	    position: myLatLng,
	    map: map
	    //icon: image
	});


	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(myLatLng);
	});

}


$(window).load(function(){
	initialize()
});
