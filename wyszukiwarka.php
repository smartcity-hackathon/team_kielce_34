
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="">

    <title>Wyszukiwarka | WhereToGo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">
	<style>
		
	</style>
    <script type='text/javascript'>
		  function error(err) {
			document.getElementById('map').innerHTML = "<h1>Błąd przy pobieraniu lokalizacji!</h1><br /><h5>Serwis do działania wymaga lokalizacji.</h5>";
		  }
	
          var geo = navigator.geolocation;
          if (geo) {
                geo.getCurrentPosition(function(location) {
                    // zapisanie szerokości i długości geograficznej do zmiennych
                    var lat = location.coords.latitude;
                    var lng = location.coords.longitude;
         
                    // opcje mapy
                    var mapOptions = {
                        // wielkość zoomu
                        zoom: 15,
                        // współrzędne punktu, na którym wyśrodkowana jest mapa
                        center: new google.maps.LatLng(lat, lng),
                    };
         
                    // pobranie mapy do zmiennej
                    var mapElement = document.getElementById('map');
         
                    // Utworzenie mapy Google używając elementu #map i opcji zdefiniowanych w tablicy
                    var map = new google.maps.Map(mapElement, mapOptions);
         
                    // dodanie znacznika
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lng),
                        map: map,
                        title: 'Lokalizacja użytkownika'
                    });
					
					document.getElementById("tabuble").style.display = "table";
         
                }, error); 
              }
				  
    </script>  
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="index-login.php"><img src="img/logo.png" height="45" width="200"></a></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index-login.php">Home</a></li>
				  <li class="active"><a href="wyszukiwarka.php">Wyszukiwarka</a></li>
                  <li><a href="about-login.php">O nas</a></li>
                  <li><a href="contact-login.php">Kontakt</a></li>
                  <li><a href="user-profile.php">Profil: <b>Paweł</b></a></li>
                </ul>
              </nav>
            </div>
          </div>

        <div style="position: relative;
        padding-bottom: 65%; height:0; overflow:hidden;top: 105px;" id="map">
          
        </div>

        <div id="tabuble" class="container" style="position:relative; top:150px; display: none;">
          <h2>Ciekawe miejsca w twojej okolicy</h2>
          <p>Na podstawie twoich preferencji proponujemy odwiedzić Ci te miejsca:</p>            
          <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th>Nazwa</th>
                <th>Kategoria</th>
                <th>Punkty</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Dealer BMW - ZK Motors</td>
                <td>Motoryzacja</td>
                <td><font color="gold">50</font></td>
              </tr>
              <tr>
                <td>Makro Cash and Carry</td>
                <td>Sklepy</td>
                <td><font color="gold">15</font></td>
              </tr>
              <tr>
                <td>Stacja Paliw ORLEN</td>
                <td>Motoryzacja, Sklepy</td>
                <td><font color="gold">15</font></td>
              </tr>
            </tbody>
          </table>
        </div>
    <script>
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAijDhaeigL2_yUgrqJkf_0iEIBXIWhejE" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
