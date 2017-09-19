<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar Autoridad </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
	</head>
<body>

<?php
if (isset($_SESSION['MiSession'])){
    ?>

<section>
</section>
<section>

</section>
<aside>
<?php
echo "<nav class='navbar navbar-default'>";
	  echo "<div class='container-fluid'>";
	    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Categoria</a></div>";
		echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='createTipoAutoridad.php'>Nuevo</a></li>";
			echo "<li><a href='readAutoridad.php'>Consulta</a></li>";

		echo "</ul>";
		echo " <ul class='nav navbar-nav navbar-right'>";
			echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
			echo "<li><a href='../salir.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a></li>";
		echo "</ul>";
	  echo "</div>";
	echo "</nav>";


$id=$_GET["id"];

include_once("AutoridadCollector.php");
$AutoridadCollectorObj= new AutoridadCollector();
$AutoridadCollectorObj->deleteAutoridad($id);

echo "<br>";

	echo "<div class='container'>";
	echo "  <h2>Usuario</h2>";
	echo "  <div class='panel panel-default'>";
	echo "    <div class='panel-heading'>Autoridad Eliminada Correctamente</div>";
	echo "    <div class='panel-body'>$id</div>";
	echo "  </div>";
	echo "</div>";
?>

<div class="text-fieldsl">
         <div> <a href="readAutoridad.php">Regresar</a></div>                                   
</div>

</aside>

<?php

}

    
    else {
       // echo "permiso denegado";
        echo"<a href='../index.php'>iniciar sesion</a>";
    }
 ?>
</body>
</html>