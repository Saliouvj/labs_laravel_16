function initialize() {
        
	// split the coordinates
	var mapMaxou1 = $("#map-area").data("field-id").split(',')[0];
	var mapMaxou2 = $("#map-area").data("field-id").split(',')[1];

	var myOptions = {
		zoom: 15,
		center: new google.maps.LatLng(mapMaxou1, mapMaxou2), // change the coordinates
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		mapTypeControl: false,
		zoomControl: true,
		streetViewControl: false
	};
	var map = new google.maps.Map(document.getElementById("map-area"), myOptions);
	var marker = new google.maps.Marker({
		map: map,
		position: new google.maps.LatLng(mapMaxou1, mapMaxou2) // change the coordinates
	});
	google.maps.event.addListener(marker, "click", function() {
		infowindow.open(map, marker);
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
