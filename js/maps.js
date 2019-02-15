
 function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: {lat: 39.1130, lng: -105.3588}
        });

        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456';

        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 33.5286, lng: -112.2625},
        {lat: 33.7555, lng: -84.4008},
        {lat: 39.2782, lng: -76.6226},
        {lat: 42.7739, lng: -78.7869},
        {lat: 35.2260, lng: -80.8528},
        {lat: 41.8625, lng: -87.6166},
        {lat: 39.0957, lng: -84.5160},
        {lat: 41.5063, lng: -81.6995},
        {lat: 32.7475, lng: -97.0945},
        {lat: 39.7440, lng: -105.0201},
        {lat: 42.3402, lng: -83.0456},
        {lat: 44.5015, lng: -88.0621},
        {lat: 29.6851, lng: -95.4110},
        {lat: 39.7603, lng: -86.1637},
        {lat: 30.3242, lng: -81.6373},
        {lat: 39.0492, lng: -94.4839},
        {lat: 34.0143, lng: -118.2878},
        {lat: 25.9581, lng: -80.2388},
        {lat: 44.9740, lng: -93.2578},
        {lat: 42.0912, lng: -71.2642},
        {lat: 29.9513, lng: -90.0812},
        {lat: 40.8130, lng: -74.0741},
        {lat: 40.8130, lng: -74.0741},
        {lat: 37.7519, lng: -122.2006},
        {lat: 39.9010, lng: -75.1674},
        {lat: 40.4470, lng: -80.0157},
        {lat: 32.7834, lng: -117.1195},
        {lat: 37.4029, lng: -121.9694},
        {lat: 47.5953, lng: -122.3316},
        {lat: 27.9762, lng: -82.5033},
        {lat: 36.1667, lng: -86.7713},
        {lat: 38.9078, lng: -76.8645}
  
      ]