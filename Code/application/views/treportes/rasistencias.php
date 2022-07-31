<!DOCTYPE html>
<html>
<head>
  <title>Reportes</title>
</head>
<body>
 <div> 
 
<div style="font-family: 'Rum Raisin', sans-serif; font-size: 20px; letter-spacing: 1px;text-align:center; color: #207ce5;">
  <img src="<?php echo base_url('asistentes/imagenes/re.png');?>" style=" margin-right:78%; width:15%; height:20%;">
        <img src="<?php echo base_url('asistentes/imagenes/s.png');?>" style="margin-left: 70%; margin-top: -29%; width:25%; height:25%;">
    </div> 
   <div style="text-align:center;">
        <h1 style="font-family:Monaco,Georgia,Times,serif; margin-top: -10%; ">Registro de asistencias</h1>
    </div>
    <div style="color: #2aad17; sans-serif; font-size: 13px; letter-spacing: 1px;text-align:center;margin-top: -2%" >
    <h3>Nombre Completo: Luis Antonio Florez Gil </h3>
    <h3>Correo: laflorez165@misena.edu.co</h3>
    <br>
</div>
<center>
<table class="table table-hover table-bordered" style="width:100%;border-collapse;"   >
 <thead class="thead-dark">
   <tr>
     <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Tipo</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Documento</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Nombre</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Apellido</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Posicion</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Fecha</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Categoria</th>
    <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Asistencia</th>

  
   </tr>
 </thead>
 <tbod3>
   <?php
     if(!empty($jugador)){
       foreach ($jugador as $data ) {      
   ?>
       <tr>
         <th style="text-align:center; background-color:#2aad17; color:#fff; padding: 6px" scope="row">
           <?php
             echo $data->Tipo_de_Identificacion;
           ?>
         </th>
         <td style="text-align:center;" >
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->Nombre;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->Apellido;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->Posicion;
           ?>
         </td>
        <td style="text-align:center;" >
          <?php 
          echo $data->fecha;
          ?>
        </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Categoria;
           ?>
         </td>
         <td style="text-align:center;" > 
          <?php
           echo $data->Tipo_de_asistencia;
           ?>
        </td>
         
         
       </tr>
   <?php
     }
   }
   ?>
 </tbod3>
</table>
</div>
</center>
</body>
</html>