<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/asistencias.css');?>">

      
<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width:934px;
    height: 334px; margin-left: 74px;" >
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
    <th></th>
  
   </tr>
 </thead>
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
        <td style="padding: 0px; margin: 0px;"><input type="text" class="form-control border-success" id="Fecha_<?php echo $data->Numero_de_Identificacion;?>"  value="<?php echo date("Y-m-d");?>"></td>
         <td>
           <?php
             echo $data->Categoria;
           ?>
         </td>
         <td style="padding: 0px; margin: 0px;"><select class="form-control border-success" id="Asistencia_<?php echo $data->Numero_de_Identificacion;?>">
         <option>asitio</option>
         <option>no asistio</option>
         <option>llego tarde</option>
         </select> </td>
         <td style="padding: 0px; margin: 0px; padding-left: 10px;"><button type="button" onclick="guardarasis('<?php echo $data->Numero_de_Identificacion;?>')" data-toggle="modal" data-target="#exampleModal" class="btn btn-success" ><img src="<?php  echo base_url('asistentes/imagenes/save.png'); ?>"  ></button></td>
         
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
