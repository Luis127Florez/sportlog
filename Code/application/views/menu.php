
 
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('asistentes/imagenes/aa.jpg');?>" class="d-block w-100" alt="..." style="" width="100" height="900"  >
    </div>
    <div class="carousel-item">
      <img src="<?php  echo base_url('asistentes/imagenes/bb.jpg'); ?>" class="d-block w-100" alt="..." style="" width="100" height="900" >
    </div>
    <div class="carousel-item">
      <img src="<?php  echo base_url('asistentes/imagenes/cc.jpg'); ?>" class="d-block w-100" alt="..." style="" width="100" height="900"  >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="shadow-lg p-3 mb-5 bg-white rounded"> <center><h5>Introduccion</h5></center></div>


<center>
<img src="<?php  echo base_url('asistentes/imagenes/s.png'); ?>">
 </center>


<div class="container">

  <h3> Funcionalidades  del Sistema:</h3>
 <br>
 <br>
  <h6> *  Las Funcionalidades del Sistema Son. </h6>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">1 Tomar las asistencias de los jugadores pertenecientes a la institución.</li>
  <li class="list-group-item">2 Registrar el ingreso de nuevos jugadores a la institución. </li>
  <li class="list-group-item">3 Control del rendimiento físico de los jugadores.</li>
  <li class="list-group-item">4 Registrar el inventario de los insumos de la institución.</li>

</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

<div class="card-group">
  <div style="margin-left: 20px;  " class="card">
    <img style="width:100%; height:60%" src="<?php  echo base_url('asistentes/imagenes/inven.PNG'); ?>" class="card-img-top"  alt="...">
    <div class="card-body">
      <h5 class="card-title">Inventario</h5>
      <p class="card-text">Aquí en inventario los datos se buscan, modifican y eliminan es por medio del campo nombre para poder guardar los datos se requiere llenar todos los campos.</p>
    </div>
    <br>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img style="width:100%; height:60%" src="<?php  echo base_url('asistentes/imagenes/juga.PNG'); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Jugadores</h5>
      <p class="card-text">Aquí en registro de jugadores los datos se buscan, modifican y eliminan es por medio del campo Numero de identificacion para poder guardar los datos se requiere llenar todos los campos.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img style="width:100%; height:60%" src="<?php  echo base_url('asistentes/imagenes/rendimi.PNG'); ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Rendimiento Fisico</h5>
      <p class="card-text">Aquí en registro de Rendimiento Fisico los datos se buscan, modifican y eliminan es por medio del campo Numero de identificacion para poder guardar los datos se requiere llenar todos los campos.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
   <div style="margin-right:25px;" class="card">
    <img style="width:100%; height:60%" src="<?php  echo base_url('asistentes/imagenes/asis.PNG'); ?>" class="card-img-top" alt="..." >
    <div class="card-body">
      <h5 class="card-title">Asistencias</h5>
      <p class="card-text">Aquí en Asistencias los datos se guardan filtrados Según la categoria que usted elija  y se busca por nombre, fecha y categoria .</p>
    </div>
    <br>
    <br>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/login.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/menu.js');?>" ></script>