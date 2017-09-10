var map;
var tempMarker;
var infoWindow;
var addressInput;
var geocodeResponse;
var geocodeLatLng;

var counter = -1;
var markers = [];


function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(41.05, -73.8),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.SATTELITE
  };
   map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
}

//INITIALIZE MAP when DOM loads
google.maps.event.addDomListener(window, "load", initialize);


//
function searchAddress() 
{

  addressInput = document.getElementById("address-input").value;
  document.getElementById("address-input").value = '';
  
  var geocoder = new google.maps.Geocoder();
  
   
  geocoder.geocode({address: addressInput}, function(results, status) 
  {

    
    if (status == google.maps.GeocoderStatus.OK) 
    {
    counter++;    
    geocodeResponse = results;
      
    geocodeLatLng = results[0].geometry.location; // reference LatLng value
     
      createMarker(geocodeLatLng);
     
      map.panTo( geocodeLatLng); 
      map.setZoom(12);
    }
    else if (status == google.maps.GeocoderStatus.INVALID_REQUEST){
        // warning message
    alert("..?\n\n If one searches for nothing, "
    +"can it ever truly be found?\n\nPlease consider this before searching."  );

    }
    else { // if status value is not equal to "google.maps.GeocoderStatus.OK"

    // warning message
    alert("Our survey says: " + status + "\n\n'"
    +addressInput +"' is not a 'Google-able' place.\nPlease Try again."  );

  }
  });
}

function createMarker(latlng) 
{
  
   // If the user makes another search you must clear the marker variable
   // if(marker != undefined && marker != ''){
   //  infoWindow.close(map,marker);
   // }
    tempMarker = new google.maps.Marker({
      map: map,
      position: latlng,
      title: ("Found: '" + addressInput + "'"),
      id: counter
    });


    var contentString =
    '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      
      '<b id="firstHeading" class="firstHeading">Found:  \' </b>'+ addressInput  + '<b>\'</b>'
      +'<hr style="padding:none;">'
      +'<div id="bodyContent">'
       +'<p><b>Address!</b>: '+ geocodeResponse[0].formatted_address  + '</p>'
       +'<p><b>Lat/Long</b>: '+ geocodeLatLng  + '</p>'
      +'</div>'
    +'<btn class="mapBtn" onclick="removeMarker('+ counter +');">Remove Marker</btn>' 
     
     
     +'</div>';

        //On marker CLICK, create and display the info Window
       tempMarker.addListener('click', function() {
                infoWindow = new google.maps.InfoWindow({
                content: contentString
                 });
                
              //  infoWindow.setContent(infowincontent);
                infoWindow.open(map, this);
              });
              
            markers.push(tempMarker);
}

function removeMarker(markerId)
{
        var markerToBeRemoved = markers[markerId];
        google.maps.event.clearListeners(markerToBeRemoved, 'click');
        markerToBeRemoved.setMap(null);
      }