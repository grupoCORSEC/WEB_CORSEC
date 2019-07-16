<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

mysql_query("SET NAMES 'utf8'");

$nombreReco = "";
$nombreCursoReco = "";
$fechaReco = "";
$nombreInstrucReco ="";


if (isset($_POST['nombreReco']) && !empty($_POST['nombreReco'])) {
	$nombreReco = $_POST['nombreReco'];
	$nombreCursoReco = $_POST['nombreCursoReco'];
	$fechaReco = $_POST['fechaReco'];
	$nombreInstrucReco = $_POST['nombreInstrucReco'];

$dia = substr($fechaReco, 8, 2);
$mesNum = substr($fechaReco, 5, 2);

switch ($mesNum) {
	case '01':
		$mes = "Enero";
		break;
	case '02':
		$mes = "Febrero";
		break;
	case '03':
		$mes = "Marzo";
		break;
	case '04':
		$mes = "Abril";
		break;
	case '05':
		$mes = "Mayo";
		break;
	case '06':
		$mes = "Junio";
		break;
	case '07':
		$mes = "Julio";
		break;
	case '08':
		$mes = "Agosto";
		break;
	case '09':
		$mes = "Septiembre";
		break;
	case '10':
		$mes = "Octubre";
		break;
	case '11':
		$mes = "November";
		break;
	case '12':
		$mes = "Diciembre";
		break;
}

$ano = substr($fechaReco, 0, 4);
}


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Reconocimientos</title>
	<meta name="description" content="CORSEC Reconocimientos" />
	<style>
		.hoja{
			width: 280%;
			transform: rotate(-90deg);
		}
		.cuadroPrincipal{
			position: absolute;
			margin-top: 270px;
			margin-left: -340px;
		}
		.cuadroTextoNombre{
			transform: rotate(-90deg);
			position: absolute;
			margin-top: 470px;
			margin-left: -250px;
			text-align: center;
			font-size: 3em;
			width: 2100px;
			height: 1300px;
		}

		.cuadroRegistro{
			transform: rotate(-90deg);
			position: absolute;
			margin-top: 470px;
			margin-left: 950px;
			font-size: 3em;
			width: 900px;
			text-align: center;
		}

	</style>
</head>
<body onload="window.print();">
	
	<div class="cuadroPrincipal">
	<img src="img/hojaMembrete.svg" class="hoja">
	
	</div>
	<div class="cuadroTextoNombre">
		<h1 style="font-size: 3em;">CORSEC</h1>
		<br>
		<p>Otorga el presente
		<br>
		RECONOCIMIENTO a
		</p>
		<h2 style="font-size: 2.5em;">
			<?php echo $nombreReco; ?>
		</h2>
		<p>Por su valiosa contribución al albergue "Adopta a un amigo para siempre":
		<br>
		
		<br>
		Realizado el día <?php echo $dia.' de '.$mes.' del '.$ano; ?>
		<br>
		<br>
		<br>
		<br>
		<?php echo $nombreInstrucReco; ?>
		<br>
		Presidenta de Consejo
		</p>

	</div>
	<div class="cuadroRegistro">
		<p>Registro STFPS:POMF-651026-699-005</p>
	</div>



	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</body>
</html>