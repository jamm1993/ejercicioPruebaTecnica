<?php include_once 'connection.php'; 
$db = new DB_Connection();
$connection = $db->getConnection();
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="estilo.css" type="text/css">
		
		<script src="less.js" type="text/javascript"></script>
		
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
			var availableTags = [
				<?php
					$query = "SELECT provincia FROM ciudades GROUP BY provincia";
					$result = mysqli_query($connection, $query);
					$arrayTags = null;
					while ($row = mysqli_fetch_assoc($result)) {
						if($arrayTags)
							$arrayTags.= ',"'.$row['provincia'].'"';
						else
							$arrayTags = '"'.$row['provincia'].'"';
					}
					echo $arrayTags;
				?>
			];
			$( "#tags" ).autocomplete({
			  source: availableTags
			});
			} );
		</script>
	</head>
	<body>
		<div class="row">
			<h1 class="col-sm-10 col-sm-offset-1 text-center"> Ejercicio </h1>
		</div>
		<div class="row">
			<h3 class="col-sm-6 col-sm-offset-3 text-center"> Autor: Jose Alberto Megías Morales </h3>
		</div>
		<div class="row">
			<p class="col-sm-6 col-sm-offset-3 text-center"> Introduzca en el siguiente formulario el nombre de una provincia para localizar las ciudades principales de la misma </p>
		</div>
		<form class="col-sm-6 col-sm-offset-3 text-center" action="resultado.php" method="post">
			<div class="input-group">
				<input id="tags" type="text" name="provincia" class="form-control">
				<span class="input-group-btn">
					<input type="submit" value="Submit" class="btn btn-default" type="button">
				</span>
			</div>
		</form>
	</body>
</html>