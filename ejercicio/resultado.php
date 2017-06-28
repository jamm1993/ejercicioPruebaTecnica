<?php include_once 'connection.php'; 
$db = new DB_Connection();
$connection = $db->getConnection();
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="estilo.css" type="text/css">
		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0m2tJHKGe2jw-a4N4B-oIS_hcmta5jWI&callback=initMap"
		type="text/javascript"></script>
		<script type="text/javascript">
			function initialize() {
			var marcadores = [
			<?php
				$query = "SELECT * FROM ciudades WHERE provincia='".$_POST['provincia']."'";
				$result = mysqli_query($connection, $query);
				$arrayMarcadores = null;
				$num_ciudades = 0;
				$avg_latitud = 0;
				$avg_longitud = 0;
				$arrayCiudades = null;
				while ($row = mysqli_fetch_assoc($result)) {
					$avg_latitud += $row['latitud'];
					$avg_longitud += $row['longitud'];
					$num_ciudades++;
					$arrayCiudades .= "<li>".utf8_encode($row['ciudad'])."</li>";
					if($arrayMarcadores)
						$arrayMarcadores.= ",['".utf8_encode($row['ciudad'])."', ".$row['latitud'].",".$row['longitud']."]";
					else
						$arrayMarcadores = "['".utf8_encode($row['ciudad'])."', ".$row['latitud'].",".$row['longitud']."]";
				}
				echo $arrayMarcadores;
				$avg_latitud /= $num_ciudades;
				$avg_longitud /= $num_ciudades;
			?>
			];
			var map = new google.maps.Map(document.getElementById('mapa'), {
			zoom: 10,
			center: new google.maps.LatLng(<?php echo "$avg_latitud , $avg_longitud" ?>),
			mapTypeId: google.maps.MapTypeId.ROADMAP
			});
			var infowindow = new google.maps.InfoWindow();
			var marker, i;
			for (i = 0; i < marcadores.length; i++) {  
			marker = new google.maps.Marker({
			  position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
			  map: map
			});
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
			  return function() {
				infowindow.setContent(marcadores[i][0]);
				infowindow.open(map, marker);
			  }
			})(marker, i));
			}
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
	<body>
		<div class="row text-center">
			<h3 class="col-sm-6 col-sm-offset-3 text-center"> Autor: Jose Alberto Megías Morales </h3>
		</div>
		<div class="row">
			
			<?php
				if($num_ciudades>0){
					echo '
					<div class="col-sm-10 col-sm-offset-1">
						<div class="col-sm-2">
							<h4> Ciudades encontradas </h4>
							<ul>
								'.$arrayCiudades.'
							</ul>
						</div>
						<div class="col-sm-10">
							<div id="mapa"></div>
						</div>
					</div>';
				}
				else
					echo '<h2 class="col-sm-6 col-sm-offset-3 text-center"> Oops! No se han encontrado ciudades </h3>';
			?>
		</div>
		<div class="row text-center">
			<button class="button" onclick="window.location.href='index.php'">Atrás</button>
		</div>
	</body>
</html> 