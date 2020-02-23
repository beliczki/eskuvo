<section class="containder">
  <div id="eskuvo_location">
  </div>
  <div id="map_info" class="">
    <div>
      <p class="name"><strong></strong></p>
      <p class="address"></p>
      <p class="more"><a><span>További részletek</span></a><p>
      <ul id="map_info_menu">
        <li><a href="" class="tel"></a></li>
        <li><a href="" class="web"></a></li>
        <li><a href="" class="google_url"><span>Megnyitom</span> Google Maps alkalmázás<span>ban</span></a></li>
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
        clickableIcons: true,
        zoomControl: false,
        styles: [{featureType: 'poi.business', stylers: [{visibility: 'off'}]}],
        center: new google.maps.LatLng(47.669951, 19.096080),
        mapTypeControlOptions: { mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map'] },
        zoom: 13,
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
  markers = [
    { 
      lat: 47.67201, 
      lng: 19.08757, 
      name: "Rosinate Étterem & Szálló", 
      address:"<span>Szentendrei-sziget,</span> Szigetmonostor 2015 hrsz 057/2", 
      tel:"+36 26 722 000", 
      web:"www.rosinante.hu", 
      google_url:"//www.google.com/maps/place/Rosinante+Fogad%C3%B3/@47.6720226,19.0853911,17z/data=!3m1!4b1!4m5!3m4!1s0x4741d426f0caf3b5:0x6acdaa723428a5f2!8m2!3d47.672019!4d19.0875798"
    }, 
    {
      lat: 47.662440, 
      lng:19.106799, 
      name: "Árnyas Sziget Ifjúsági Tábor", 
      address:"<span>Szentendrei-sziget,</span> Szentendrei út HRSZ. 027/2.,", 
      tel:"", 
      web:"www.arnyassziget.hu", 
      google_url:"//www.google.com/maps/place/%C3%81rnyas+Sziget+Ifj%C3%BAs%C3%A1gi+T%C3%A1bor/@47.6645947,19.1056846,16.75z/data=!4m5!3m4!1s0x0:0x694d24c7c28d1f8b!8m2!3d47.6624727!4d19.1067857"
    }, 
    {
      lat: 47.664530, 
      lng:19.111738, 
      name: "Regatta Szabadidőközpont", 
      address:"<span>Szigetmonostor,</span> Horány, Parti u. 16.", 
      tel:"+36 70 370 2002", 
      web:"www.hotelregatta.hu", 
      google_url:"//www.google.com/maps/place/Regatta+Szabadid%C5%91k%C3%B6zpont/@47.6645947,19.1056846,16.75z/data=!4m5!3m4!1s0x0:0xb98f917f6c41919!8m2!3d47.6645203!4d19.1117799"
    }, 
    {
      lat: 47.669818, 
      lng: 19.077887, 
      name: "Centrum Panzió", 
      address:"<span>Szentendre,</span> Bogdányi út 15, bejárat a DUNAKORZO felöl", 
      tel:"+36 26 302 500", 
      web:"www.hotelcentrum.hu", 
      google_url:"//www.google.com/maps/place/Centrum+Panzi%C3%B3/@47.6719885,19.0798723,17z/data=!4m13!1m7!3m6!1s0x0:0x0!2zNDfCsDM5JzUyLjMiTiAxOcKwMDYnNDIuMyJF!3b1!8m2!3d47.66453!4d19.111738!3m4!1s0x0:0xaf257acbc3173ce!8m2!3d47.6698109!4d19.0778842"
    }
  ];

  markers.forEach(function(poi){
    var marker, markerOptions;

    markerOptions = {
      map: map,
      position: new google.maps.LatLng(poi.lat, poi.lng),
      title: 'Andi & Robi esküvője',
      name: poi.name,
      address: poi.address,
      tel: poi.tel,
      web: poi.web,
      google_url: poi.google_url,
      icon: iconOptions
    };

    marker = new google.maps.Marker(markerOptions);
    
    marker.addListener('click', function() {
      //infowindow.open(map, marker);
      //console.log('click marker');
      $('#map_info .name').html('<strong>'+this.name+'</strong>');
      $('#map_info .address').html(this.address);
      $('#map_info .tel').html('<span>Felhívom őket: </span>'+this.tel);
      $('#map_info .tel').attr('href','tel://'+this.tel);
      if (this.tel == '') $('#map_info .tel').parent().css({ display: 'none' }); else $('#map_info .tel').parent().css({ display: 'block' });
      $('#map_info .web').html('<span>Megnézem az oldalukat: </span>'+this.web);
      $('#map_info .web').attr('href','//'+this.web);
      $('#map_info .google_url').attr('href','//'+this.google_url);
      $('#map_info').addClass('show');
      ga('send', 'event', 'map', 'function', 'show ' + 'accomodation ' + this.name );
    });
  });
  
  $( "#map_info .close" ).click(function() {
    $('#map_info').toggleClass('show');
  });

  $( "#map_info p" ).click(function() {
    $('#map_info_menu').toggleClass('show');
    ga('send', 'event', 'map', 'function', 'more '+ 'accomodation');
  });
</script>