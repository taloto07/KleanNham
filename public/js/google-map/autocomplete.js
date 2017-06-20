// This example adds a search box to a map, using the Google Place Autocomplete
  // feature. People can enter geographical searches. The search box will return a
  // pick list containing a mix of places and predicted search terms.

  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initAutocomplete() {
    console.log('initAutocomplete started!');
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 11.5761081, lng: 104.8915831},
      zoom: 13,
      mapTypeId: 'roadmap'
    });

    var Latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var city = document.getElementById('city');
    var address = document.getElementById('address');
    // var khan = document.getElementById('khan');

    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
      searchBox.setBounds(map.getBounds());
    });

    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
      var places = searchBox.getPlaces();
      
      if (places.length == 0) {
        return;
      }

      // Clear out the old markers.
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }

        // console.log(place);
        
        // retrieve latitude and longitude of selected place
        latitude.value = place.geometry.location.lat();
        longitude.value = place.geometry.location.lng();
        address.value = input.value.substr(0, input.value.indexOf(',')); 
        addressComponents = place.address_components;
        
        addressComponents.forEach(function(addressComponent){
          
          // get city          
          if (addressComponent.types[0] === 'locality'){
            city.value = addressComponent.long_name;
          }

          // get khan
          // if (addressComponent.types[0] === 'administrative_area_level_2'){
          //   var option = document.createElement('option');
          //   var khanName = addressComponent.long_name.toLowerCase();
          //   var index = khanName.indexOf('khan') > -1 ? khanName.indexOf('khan') + 4 : 0;
          //   khanName = khanName.substr(index);
            
          //   var flag = true;
          //   for (var i = 0; i < khan.options.length; i++){
          //     if (khan.options[i].value === khanName){
          //       khan.options[i].selected = true;
          //       flag = false;
          //       break;
          //     }
          //   }

          //   if (flag){
          //     option.text = khanName;
          //     option.value = khanName;
          //     khan.add(option);
          //     khan.options[khan.options.length-1].selected = true;
          //   }
          // }

        });

        // console.log('city = ' + city.value);

        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };

        // Create a marker for each place.
        markers.push(new google.maps.Marker({
          map: map,
          icon: icon,
          title: place.name,
          position: place.geometry.location
        }));

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
  }