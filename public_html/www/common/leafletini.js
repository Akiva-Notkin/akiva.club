function Leaflet(options, callback) {	
	L.mapbox.accessToken = 'pk.eyJ1IjoiYWtpdmFub3RraW4iLCJhIjoiY2lrNGNobGFpMDAycHZka3QwandrN3p1aCJ9.5Rz07-xE5zhM2CmyZxz7vA';
	// Replace 'mapbox.streets' with your map id.
	var mapboxTiles = L.tileLayer('https://api.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=' + L.mapbox.accessToken, {
	    attribution: '<a href="http://www.mapbox.com/about/maps/" target="_blank">Terms &amp; Feedback</a>'
	});

	this.map = L.map('map')
	    .addLayer(mapboxTiles)
	    .setView([47.60801, -122.33516], 12);

	this.callback = callback ? callback : function () {
	};

	this.callback();
}

Leaflet.prototype.drawobjects = function(jsonobject) {
		var geojsonMarkerOptions = {
		    radius: 4,
		    weight: 1,
		    opacity: 1,
		    fillOpacity: 0.8
		};

		var myStyle = {
		    "color": "#ff7800",
		    "weight": 5,
		    "opacity": 0.65
		};

	for(var i = 0; i < jsonobject.length; i++) {
		
		function onEachFeature(feature, layer) {
			feature = feature.properties;
			var popup = "";
			popup += feature.name;
			popup += "<br><br>";
			popup += feature.name + " is " + feature.facilitytype + " " + feature.status ;
			if(feature.yearcompleated != '') {
				popup += " in " + feature.yearcompleated;
			}
			popup += ". ";
			popup += "It is in Council District " + feature.district + " in the " + feature.neighborhood + " neighborhood";
			if(feature.cost != '') {
			 	popup += "and cost " + feature.cost + " to build";   	
			}
			popup += ".<br><br>";
	       	popup += feature.paragraph + "<br><br>";
	       	if(feature.sdotpage != '' || feature.sngblog != '' || feature.sngpage != '' || feature.otherlink != '') {	
	       		popup += "More information<br>";
	       		if(feature.sngblog != '') {
	       			popup += "<a href='" + feature.sngblog + "'>Seattle Neighborhood Greenways blog on " + feature.name + "</a><br>";
	       		}
	       		if(feature.sdotpage != '') {
	       			popup += "<a href='" + feature.sdotpage + "'>Seattle Department of Transporation link to " + feature.name + "</a><br>";
	       		}
	       		if(feature.otherlink != '') {
	       			popup += "<a href='" + feature.otherlink + "'>" + feature.otherlinktext + "</a><br>";
	       		}
	       		if(feature.sngpage != '') {
	       			popup += "<a href='" + feature.sngpage + "'>Get Involved!</a><br>";
	       		}

	       	}
	       	layer.bindPopup(popup);
		}
		
		L.geoJson(jsonobject, {
	    	onEachFeature: onEachFeature,

    		style : myStyle
		}).addTo(this.map);
	}

}