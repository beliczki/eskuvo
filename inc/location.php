<section class="containder">
  <div id="eskuvo_location">
  </div>
  <div id="map_info" class="show">
    <div>
      <p><strong>Rosinate Étterem</strong></p>
      <p class="address"><span>Szentendrei-sziget,</span> Szigetmonostor 2015 hrsz 057/2</p>
      <p class="more"><a><span>További részletek</span></a><p>
      <ul id="map_info_menu">
        <li><a href=tel://+3626722000><span>Felhívom őket: </span>+36 26 722 000</a></li>
        <li><a href=//www.rosinante.hu><span>Megnézem az oldalukat: </span>rosinante.hu</a></li>
        <li><a href=https://www.google.com/maps/place/Rosinante+Fogad%C3%B3/@47.6720226,19.0853911,17z/data=!3m1!4b1!4m5!3m4!1s0x4741d426f0caf3b5:0x6acdaa723428a5f2!8m2!3d47.672019!4d19.0875798> <span>Megnyitom</span> Google Maps alkalmázás<span>ban</span></a></li>
      </ul>
    </div>
    <a class="close"><span>Bezár</span></a>
  </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCr3VXuNIHHd-Z-Q_sHBXqQ5Dpd0rUaPc&amp;sensor=false"></script>
<script>
  var map, mapOptions,
      markers = [],
      iconOptions;
  
  var styledMapType = new google.maps.StyledMapType(

  [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": "50"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#f7acad"
            },
            {
                "lightness": 50
            },
            {
                "saturation": 50
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all", 
        "stylers": [
            {
                "hue": "#f7acad"
            },
            {
                "lightness": 50
            },
            {
                "saturation": 50
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": 25
            },
            {
                "saturation": -100
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
  ], {name: 'Styled Map'});
  
  /*
  var contentString = ''+
    '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Andi & Robi esküvőjének helyszíne</h2>'+
      '<div id="bodyContent">'+
        '<p><b>Rosinate Étterem</b>,  ' +
        'Szentendrei-sziget, Szigetmonostor 2015 hrsz 057/2'+
        '</p>'+
        '<p>Telefon: <a href=tel://+3626722000>+36 26 722 000</a><br/>'+
        'Weboldal: <a href=//www.rosinante.hu>rosinante.hu</a></p>'+
      '</div>'+
    '</div>';

  var infowindow = new google.maps.InfoWindow({
          content: contentString
      });
   */

  mapOptions = {
        mapTypeControl: false,
        streetViewControl: false,
        clickableIcons: false,
        zoomControl: false,
        styles: [{featureType: 'poi.business', stylers: [{visibility: 'off'}]}],
        center: new google.maps.LatLng(47.67201, 19.08757),
        mapTypeControlOptions: { mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map'] },
        zoom: 10,
  };

  map = new google.maps.Map(document.getElementById('eskuvo_location'), mapOptions);
  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');

  iconOptions = {
    url: 'img/marker.png',
    size: new google.maps.Size(64, 64),
    scaledSize: new google.maps.Size(64, 64),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(32, 50)
  };
  markers = [{lat: 47.67201, lng: 19.08757}];

  markers.forEach(function(poi){
    var marker, markerOptions;

    markerOptions = {
      map: map,
      position: new google.maps.LatLng(poi.lat, poi.lng),
      title: 'Andi & Robi esküvője',
      icon: iconOptions
    };

    marker = new google.maps.Marker(markerOptions);
    
    marker.addListener('click', function() {
      //infowindow.open(map, marker);
      //console.log('click marker');
      $('#map_info').toggleClass('show');
      ga('send', 'event', 'map', 'function', 'show '+ 'location');
    });
  });

  $( "#map_info .close" ).click(function() {
    $('#map_info').toggleClass('show');
  });

  $( "#map_info p" ).click(function() {
    $('#map_info_menu').toggleClass('show');
    ga('send', 'event', 'map', 'function', 'more '+ 'location');
  });
</script>