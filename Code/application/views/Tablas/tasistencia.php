<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/asistencias.css');?>">

<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width:934px;
    height: 334px;  margin-left: 74px;" > 
  <div class="form-group form-inline">       
<div class="scrollbar scrollbar-success" style="height: 273px;
    width: 890px">
<table class="table table-hover table-bordered"   >
 <thead class="thead-dark">
   <tr>
     <th scope="col">Tipo</th>
    <th scope="col">Documento</th>
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">Posicion</th>
    <th scope="col">Fecha</th>
    <th scope="col">Categoria</th>
    <th scope="col">Asistencia</th>

  
   </tr>
 </thead>
 <tbod3>
   <?php
     if(!empty($jugador)){
       foreach ($jugador->result() as $data ) {      
   ?>
       <tr>
         <th scope="row">
           <?php
             echo $data->Tipo_de_Identificacion;
           ?>
         </th>
         <td>
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Nombre;
           ?>
         </td>
         <td>
            <?php
             echo $data->Apellido;
           ?>
         </td>
         <td>
            <?php
             echo $data->Posicion;
           ?>
         </td>
        <td style="padding: 0px; margin: 0px;">
         <?php echo $data->fecha;?></td>
         <td>
           <?php
             echo $data->Categoria;
           ?>
         </td>
         <td style="padding: 0px; margin: 0px;">
          <?php echo $data->Tipo_de_asistencia;?>
           </td>
         
         
       </tr>
   <?php
     }
   }
   ?>
 </tbod3>
</table>
</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url('asistentes/js/asistencia.js');?>"></script>