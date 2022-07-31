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
        <h1 style="font-family:Monaco,Georgia,Times,serif; margin-top: -5%; ">Registro de jugadores</h1>
    </div>
    <div style="color: #2aad17; sans-serif; font-size: 13px; letter-spacing: 1px;text-align:center;" >
    <h3>Nombre Completo: Luis Antonio Florez Gil </h3>
    <h3>Correo: laflorez165@misena.edu.co</h3>
    <br>
</div>
<center>
<table class="table table-hover table-bordered" style="width:100%;border-collapse;" id="tjugadores">
 	<thead class="thead-dark" >
 		<tr>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Nombre</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col" >Apellido</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Tipo de identificacio</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Numero de Identificacion</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Edad</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">sexo</th>  
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Posicion</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">EPS</th>
     <th  style="text-align:center; padding:15px 15px; background-color:#2aad17; color:#fff" scope="col">Categoria</th>
       </tr>
 	</thead>
 <tbody>
   <?php
     if(!empty($jugador)){
       foreach ($jugador as $data ) {   
         
   ?>
       <tr>
         <th style="text-align:center; text-align:center;  background-color:#2aad17; color:#fff padding: 6px " scope="row">
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td style="text-align:center;" >
            <?php
             echo $data->Apellido;
           ?>
         </td >
         <td style="text-align:center;">
            <?php
             echo $data->Tipo_de_Identificacion;
           ?>
         </td>
         <td style="text-align:center;">
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td style="text-align:center;">
            <?php
             echo $data->Edad;
           ?>
         </td>
         <td style="text-align:center;">
           <?php
             echo $data->Sexo;
           ?>
         </td>
         <td style="text-align:center;">
           <?php
             echo $data->Posicion;
           ?>
         </td>
         <td style="text-align:center;">
           <?php
             echo $data->EPS;
           ?>
         </td>
         <td style="text-align:center;">
           <?php
             echo $data->Categoria;
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


</center>

</body>
</html>