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
			if(feature.yearcompleted != '') {
				popup += " in " + feature.yearcompleted;
			}
			popup += ". ";
			popup += "It is in Council District " + feature.councildistrict + " in the " + feature.neighborhood + " neighborhood";
			if(feature.cost != '') {
			 	popup += "and cost " + feature.cost + " to build";   	
			}
			popup += ".<br><br>";
	       	popup += feature.extratext + "<br><br>";
	       	if(feature.sdotlink != '' || feature.sngbloglink != '' || feature.sngpage != '' || feature.otherlink != '') {	
	       		popup += "More information<br>";
	       		if(feature.sngbloglink != '') {
	       			popup += "<a href='" + feature.sngbloglink + "'>Seattle Neighborhood Greenways blog on " + feature.name + "</a><br>";
	       		}
	       		if(feature.sdotlink != '') {
	       			popup += "<a href='" + feature.sdotlink + "'>Seattle Department of Transporation link to " + feature.name + "</a><br>";
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
		console.log(jsonobject[i]);


		L.geoJson(jsonobject, {
	    	onEachFeature: onEachFeature,
	    	pointToLayer: function (feature, latlng) {
        		return L.circleMarker(latlng, geojsonMarkerOptions);
    		}
    	}).addTo(this.map);
	}


}

Leaflet.prototype.createjson = function(jsonobject) {

		$.ajax({url: "https://spreadsheets.google.com/feeds/list/1plDqOhxv8kNXxgLVuWCenEqXrNPmDdmd23s15n366ak/od6/public/values?alt=json", success: function(result){
			var jsonset = [];
        	var titles = ["name", "facilitytype", "status", "yearcompleted", "priorityofsng", "neighborhood", "councildistrict", "cost", "extratext", "sdotlink", "sngbloglink", "otherlink", "otherlinktext", "campaignpage", "grouppagetogetinvolved","sngpage"];
        	result = result.feed.entry;
        	var i = 0;
        	while(result[i] != null) {
        		if(result[i].gsx$pointzoneline.$t == "Point" || result[i].gsx$pointzoneline.$t == "Zone") {
        			var pointzoneline = "Point";
        			var latlong = [parseFloat(result[i].gsx$long.$t), parseFloat(result[i].gsx$lat.$t)];
        			console.log(latlong);
        		}
        		else if(result[i].gsx$pointzoneline.$t == "Line") {
        			var pointzoneline = "LineString";
        			var latlong = [[parseFloat(result[i].gsx$long.$t), parseFloat(result[i].gsx$lat.$t)], [parseFloat(result[i].gsx$long2.$t), parseFloat(result[i].gsx$lat2.$t)]];
        			console.log(latlong);
        		}

        		var thingy = 

        		{
        				"type": "Feature",
        				"properties": {
        					"name": result[i].gsx$name.$t,
        					"facilitytype": result[i].gsx$facilitytype.$t,
        					"status": result[i].gsx$status.$t,
        					"yearcompleted": result[i].gsx$yearcompleted.$t,
        					"priorityofsng": result[i].gsx$priorityofsng.$t,
        					"neighborhood": result[i].gsx$neighborhood.$t,
        					"councildistrict": result[i].gsx$councildistrict.$t,
        					"cost": result[i].gsx$cost.$t,
        					"extratext": result[i].gsx$extratext.$t,
        					"sdotlink": result[i].gsx$sdotlink.$t,
        					"otherlink": result[i].gsx$otherlink.$t,
        					"otherlinktext": result[i].gsx$otherlinktext.$t,
        					"campaignpage": result[i].gsx$campaignpage.$t,
        					"grouppagetogetinvolved": result[i].gsx$grouppagetogetinvolved.$t,
        					"sngpage": result[i].gsx$sngpage.$t,
        					"sdotlink": result[i].gsx$sdotlink.$t
        				},
        				"geometry": {
        					"type": pointzoneline,
        					"coordinates": latlong
        				}
        		};


        		jsonset.push(thingy);
        		i++;
        	}

        	leaflet.drawobjects(jsonset);
    	}});
}