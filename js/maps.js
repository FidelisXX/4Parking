var lat;
var long;

function getLocation() {
    if(!navigator.geolocation)
    return null;
    navigator.geolocation.getCurrentPosition((pos)=>{
        lat=document.getElementById("lat").innerText = pos.coords.latitude;
        long=document.getElementById("lon").innerText = pos.coords.longitude;
        initMap();
    });
}

function initMap(){
    const uluru = { lat: lat, lng: long};
    map = new google.maps.Map(document.getElementById("map"), {
        center:uluru,
        zoom: 4,
      });
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }
    getLocation();

    