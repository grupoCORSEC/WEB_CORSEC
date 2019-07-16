<?php 

$fechaCap = date("Y-m-d");

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
</head>
<body>

	<div class="container">
		<div class="row d-flex justify-content-center align-items-center" style="height: 600px;">
			<div class="col-md-4 border shadow-sm rounded p-3">
				<h3>Reconocimientos</h3>
				<form action="reco.php" method="post">
				  <div class="form-group">
				    <label for="nombreReco">Nombre:</label>
				    <input type="text" class="form-control" id="nombreReco" aria-describedby="nombreAyuda" placeholder="Nombre" name="nombreReco" required />
				    <small id="nombreAyuda" class="form-text text-muted">Nombre de quien recibe reconocimiento.</small>
				  </div>

				  <!-- <div class="form-group">
				    <label for="nombreCursoReco">Nombre del Curso:</label>
				    <select class="form-control" name="nombreCursoReco">
				      <option value="Calidad">Calidad</option>
				      <option value="Inocuidad">Inocuidad</option>
				      <option value="Liderazgo">Liderazgo</option>
				      <option value="Responsabilidad Social" selected>Responsabilidad Social</option>
				      <option value="Sistemas Integrados">Sistemas Integrados</option>
				    </select>
				  </div> -->

				  <div class="form-group">
				    <label for="fechaReco">Fecha:</label>
				    <input type="date" class="form-control" id="fechaReco" aria-describedby="nombreAyuda" name="fechaReco" value="<?php echo $fechaCap; ?>" required/>
				    <small id="nombreAyuda" class="form-text text-muted">Fecha de reconocimiento.</small>
				  </div>

				  <div class="form-group">
				    <label for="nombreInstructor">Nombre del Instructor:</label>
				    <select class="form-control" name="nombreInstrucReco">
				      <option value="Dra. (c) Fabiola María del Rosario Polo Melgarejo" selected>Fabiola</option>
				      <option value="Lic. Jorge Tenorio">Jorge</option>
				      <option value="Lic. Federico Arturo Tobar">Arturo</option>				      
				    </select>
				  </div>
				  <br>	
				  <button type="submit" class="btn btn-primary btn-lg">Generar</button>
				</form>
			</div>
		</div>
	</div>
	

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</body>
</html>