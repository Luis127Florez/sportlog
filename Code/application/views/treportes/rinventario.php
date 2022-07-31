
<!DOCTYPE html>
<html>
<head>
  <title>Reportes</title>
</head>
<body>
 <div 
 style="border-color:green;
  border-width: 2px;
  border-style: solid;
  box-shadow: 8px 8px  15px grey,;
  padding-bottom:15px ;
  padding-top:15px ;
  padding-right: 15px;
  padding-left:15px; 
  height: 1000px;"
  >

<div style="font-family: 'Rum Raisin', sans-serif; font-size: 20px; letter-spacing: 1px;text-align:center; color: #207ce5;">
  <img src="<?php echo base_url('asistentes/imagenes/re.png');?>" style=" margin-right:78%; width:15%; height:20%;">
        <img src="<?php echo base_url('asistentes/imagenes/s.png');?>" style="margin-left: 70%; margin-top: -21%; width:25%; height:25%;">
    </div> 
   <div style="text-align:center;">
        <h1 style="margin-top: -1%; ">Reporte De Inventario </h1>
    </div>
    <div style="color: #2aad17; sans-serif; font-size: 13px; letter-spacing: 1px;text-align:center;" >
    <h3>Nombre Completo: Luis Antonio Florez Gil </h3>
    <h3>Correo: laflorez165@misena.edu.co</h3>
    <br>
</div>
<table style="width:100%;border-collapse:collapse;" >
 <thead >
   <tr>
     <th style="text-align:center; padding:15px 15px; background-color:#189606; color:#fff" >Nombre</th>
     <th style="text-align:center; padding:15px 15px; background-color:#189606; color:#fff" >Fecha</th>
     <th style="text-align:center; padding:15px 15px; background-color:#189606; color:#fff" >Cantidad</th>
     <th style="text-align:center; padding:15px 15px; background-color:#189606; color:#fff" >Estado</th>

   </tr>
 </thead>
 <tbody>
   <?php
     if(!empty($inventario)){
       foreach ($inventario as $data ) {      
   ?>
       <tr>
         <th style="text-align:center;  background-color:#23a80f; color:#fff " >
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td style="text-align:center; " >
            <?php
             echo $data->Fecha;
           ?>
         </td>
         <td style="text-align:center; ">
            <?php
             echo $data->Cantidad_de_articulos;
           ?>
         </td>
         <td style="text-align:center; ">
            <?php
             echo $data->Estado;
           ?>
         </td>
       </tr>
   <?php
     }
   }
   ?>
 </tbody>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<img src="<?php echo base_url('asistentes/imagenes/sello.jpg');?>" style="margin-left: 70%;  width:25%; height:25%;">
<p style="margin-left: 5%; margin-top: -11%;">Firma: __________________________</p>
</div>


</center>


  
</body>
</html>

