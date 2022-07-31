<!DOCTYPE html>
<html>
<head>
  <title>Reportes</title>
</head>
<body>
 <div >
<div style="font-family: 'Rum Raisin', sans-serif; font-size: 20px; letter-spacing: 1px;text-align:center; color: #207ce5;">
  <img src="<?php echo base_url('asistentes/imagenes/re.png');?>" style=" margin-right:78%; width:15%; height:20%;">
        <img src="<?php echo base_url('asistentes/imagenes/s.png');?>" style="margin-left: 70%; margin-top: -21%; width:25%; height:25%;">
    </div> 
   <div style="text-align:center;">
        <h1 style="font-family:Monaco,Georgia,Times,serif; margin-top: -5%; ">Registro de Rendimiento</h1>
    </div>
    <div style="color: #2aad17; sans-serif; font-size: 13px; letter-spacing: 1px;text-align:center;" >
    <h3>Nombre Completo: Luis Antonio Florez Gil </h3>
    <h3>Correo: laflorez165@misena.edu.co</h3>
    <br>
</div>
<center>
<table class="table table-hover table-bordered"  style="width:100%;border-collapse;"  >
 <thead class="thead-dark">
   <tr>
     <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Nombre</th>    
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">N° de indentificacion</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Posicion de juego</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Velocidad</th>  
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Destreza</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Agilidad</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Resistencia</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Disciplina</th>
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Punteria</th> 
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Control</th> 
      <th style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Promedio</th>
   </tr>
 </thead>
 <tbod3>
   <?php
     if(!empty($rendimiento_fisico)){
       foreach ($rendimiento_fisico  as $data ) {      
   ?>
       <tr>
         <th style="text-align:center; background-color:#2aad17; color:#fff; padding: 6px" >
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td style="text-align:center;" >
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->Posicion_de_juego;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->velocidad;
           ?>
         </td>
         <td style="text-align:center;" >
            <?php
             echo $data->Destreza;
           ?>
         </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Agilidad;
           ?>
         </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Resistencia;
           ?>
         </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Disciplina;
           ?>
         </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Punteria;
           ?>
         </td>
         <td style="text-align:center;" >
           <?php
             echo $data->Control;
           ?>
         </td>
         <td style="text-align:center;">
           <?php
             echo $data->promedio;
           ?>
         </td>
       </tr>
   <?php
     }
   }
   ?>
 </tbody>
</table>
</div>
</body>
</html>