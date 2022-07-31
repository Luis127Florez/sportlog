<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/menu.css');?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/bootstrap.min.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/all.css');?>">
<script type="text/javascript" src="<?php echo base_url('asistentes/js/jquery.js');?>"></script> 
<script type="text/javascript" src="<?php echo base_url('asistentes/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/popper.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/librerias/alertify.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/alertify.min.css');?>">
<script type="text/javascript" src="<?php echo base_url('asistentes/js/login.js');?>"></script> 


</head>
<body>

  <header>
 <nav class="navbar navbar-dark bg-dark">

  <a class="navbar-brand" id="menu" href="#"><h3>Sport Log</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">       
      </li>
      <li class="nav-item">
        <a class="nav-link" id="reportes" href="#"><h6>Reportes</h6></a>
      </li>     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <h6>Servicios</h6>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" id="inventario" href="#">Control de Inventario</a>
          <a class="dropdown-item"  id="jugador" href="#">Registro de Jugadores</a>
          <a class="dropdown-item"  id="rendimiento" href="#">Control del Rendimieto fisico </a>
           <a class="dropdown-item" id="asistencia" href="#"> Control de asistencias</a>
        </div>
      </li>
      <li class="nav-item">
      
      <input type="button" onclick="cerrar()" class="btn btn-dark" value="cerrar sesion">
</input>

      </li>
    </ul>
  </div>

</nav>
</header>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/menu.js');?>"></script>



