<!DOCTYPE html>
<html>
<head>
	<title>ADSI 24 </title>
</head>
<body>
<h1>hola  <?php echo $nombre; ?> </h1> 

<?php 
$promedio = ($nota1+ $nota2 + $nota3)/3;
if ($promedio>3.5) {
	echo "HOLA";
} else {
	echo "ey men tu no pasaste";
}


 ?>


 <button type="button" onclick="hola();" class="btn btn-primary">No Preciones</button>


</body>
<script type="text/javascript" src="asistentes/js/app.js" ></script>
</html>