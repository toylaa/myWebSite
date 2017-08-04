var map;
var marker;
var infoWindow;
var addressInput;
var geocodeResponse;
var geocodeLatLng;


function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(41.05, -73.8),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
   map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  
    
}
google.maps.event.addDomListener(window, "load", initialize);


function searchAddress() 
{

  addressInput = document.getElementById("address-input").value;
  document.getElementById("address-input").value = '';
  
  var geocoder = new google.maps.Geocoder();
  
   
  geocoder.geocode({address: addressInput}, function(results, status) 
  {

    
    if (status == google.maps.GeocoderStatus.OK) 
    {
        
    geocodeResponse = results;
      
    geocodeLatLng = results[0].geometry.location; // reference LatLng value
     
      createMarker(geocodeLatLng);
      
     
      map.panTo( geocodeLatLng); 
      map.setZoom(12);
      
      
      //map.
    

     

    }else { // if status value is not equal to "google.maps.GeocoderStatus.OK"

    // warning message
    alert("Our survey says: " + status + "\n\n'"
    +addressInput +"' is not a real place.\nPlease Try again."  );

  }
  });
}

function createMarker(latlng) 
{
  
   // If the user makes another search you must clear the marker variable
   // if(marker != undefined && marker != ''){
   //  infoWindow.close(map,marker);
   // }
     
     
    marker = new google.maps.Marker({
      map: map,
      position: latlng,
      title: ("Found: '" + addressInput + "'")
    });


    var contentString =
    '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      
      '<b id="firstHeading" class="firstHeading">Found:  \' </b>'+ addressInput  + '<b>\'</b>'
      +'<hr style="padding:none;">'
      +'<div id="bodyContent">'
       +'<p><b>Address</b>: '+ geocodeResponse[0].formatted_address  + '</p>'
       +'<p><b>Lat/Long</b>: '+ geocodeLatLng  + '</p>'
      +'</div>'
     +'</div>';

        //WAIT FOR CLICK (LISTENER)
       marker.addListener('click', function() {
                infoWindow = new google.maps.InfoWindow({
                content: contentString
                 });
                
              //  infoWindow.setContent(infowincontent);
                infoWindow.open(map, this);
              });
              
            


}