function initMap(locations) {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: { lat: -13.6570407, lng: -69.7197471 }
    });

    // Create an array of alphabetical characters used to label the markers.
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    console.log(locations)
    var markers = locations.map(function (location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });
}

function mapa(){
    // $.getJSON("/dados-mapa", data => {
    //     initMap(data)
    // })
    $.getJSON("/dados-mapa-voluntario-cidade", data => {
        initMap(data);
    })
}