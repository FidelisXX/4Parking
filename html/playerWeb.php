<!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/playerWeb.css">
   <!---- <link rel="stylesheet" href="../css/playerWebSM.css" media="screen and (max-width:564px)"> -->
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXqq8pbVTN5T7kHCcFDDgbfuELvBnoAVs&callback=initMap">
</script>
    <title>4Parking</title>
    <script src="https://kit.fontawesome.com/ba4f5370a2.js" crossorigin="anonymous"></script>
</head>
<body>
     
    
        <div id="map"></div>
   
    <script type="text/javascript">
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
            zoom: 16,
          });
          const marker = new google.maps.Marker({
            position: uluru,
            map: map,
          });
        }
        getLocation();
    
    </script>

<header class="nav">
    <div class="container">
      <a href="#" class="logo">
       <div id="logo">4Parking</div>
      </a>
      <label for="toggle">
        <i class="material-icons">menu</i>
      </label>
      <input type="checkbox" id="toggle">
      <nav class="menu">
        <ul>
          <li><a href="#">Premium</a></li>
          <li><a href="#">Suporte</a></li>
          <li><a href="#">Historico</a></li>
          <li><a href="excluirCadastroWeb.html">Excluir Conta</a></li>
          <li><a href="parceiro.html">Parceiro</a></li>
          <li><a href="login.html">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>
    
    <div id="popUp">
        <div id="legenda">Tu vai pra onde?</div>
<input id="localDestino" name="localDestino" type="search" placeholder="Digite um endereço"><br>
    </div>
    <form action="../php/buscarEnderecos.php">
        <button id="seguirBt">Seguir</button>
        <span id="lat"></span>
        <span id="lon"></span>
</body>
</html>