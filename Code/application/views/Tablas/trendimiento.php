<br>

<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 1199px; margin-left: -530px; padding: 0px; height: 380px;" >
      <div class="form-group form-inline">
        
<div class="scrollbar scrollbar-success" style="width:1166px">
<table class="table table-hover table-bordered" >
 <thead class="thead-dark">
   <tr>
     <th scope="col">Nombre</th>    
      <th scope="col">N° de indentificacion</th>
      <th scope="col">Posicion de juego</th>
      <th scope="col">Velocidad</th>  
      <th scope="col">Destreza</th>
      <th scope="col">Agilidad</th>
      <th scope="col">Resistencia</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Punteria</th> 
      <th scope="col">Control</th> 
      <th scope="col">Promedio</th>
      <th scope="col">accion</th>
   </tr>
 </thead>
 <tbod3>
   <?php
     if(!empty($rendimiento_fisico)){
       foreach ($rendimiento_fisico->result() as $data ) {      
   ?>
       <tr>
         <th scope="row">
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td>
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Posicion_de_juego;
           ?>
         </td>
         <td>
            <?php
             echo $data->velocidad;
           ?>
         </td>
         <td>
            <?php
             echo $data->Destreza;
           ?>
         </td>
         <td>
           <?php
             echo $data->Agilidad;
           ?>
         </td>
         <td>
           <?php
             echo $data->Resistencia;
           ?>
         </td>
         <td>
           <?php
             echo $data->Disciplina;
           ?>
         </td>
         <td>
           <?php
             echo $data->Punteria;
           ?>
         </td>
         <td>
           <?php
             echo $data->Control;
           ?>
         </td>
         <td>
           <?php
             echo $data->promedio;
           ?>
         </td>
         <td>
           <button type="button" onclick="buscarrendimiento('<?php echo $data->Numero_de_Identificacion;?>')" data-toggle="modal" data-target="#agregar" class="btn btn-outline-primary" style='width:90px; height:40px'>Buscar</button>

           <button type="button" onclick="eliminarrendimiento('<?php echo $data->Numero_de_Identificacion;?>')" class="btn btn-outline-danger" style='width:90px; height:40px'>Eliminar</button>
         </td>
       </tr>
   <?php
     }
   }
   ?>
 </tbody>
</table>
</div>
</div>
</tbod3>
</div>