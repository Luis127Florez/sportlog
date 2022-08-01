<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 1080px; margin-left: -1px; padding: 0px; height: 380px;" >
      <div class="form-group form-inline"   style=" width: 1000px;">        
<div class="scrollbar scrollbar-success ">
<table  id="datos" class="table table-hover table-dark" >
 <thead class="thead-dark">
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col">Fecha</th>
     <th scope="col">Cantidad</th>
     <th scope="col">Estado</th>
     <th scope="col">Accion</th>

   </tr>
 </thead>
 <tbody>
   <?php
     if(!empty($inventario)){
       foreach ($inventario->result() as $data ) {      
   ?>
       <tr >
         <th scope="row" id="Nombre">
           <?php
             echo $data->Nombre;
           ?>
         </th>
         <td>
            <?php
             echo $data->fecha;
           ?>
         </td>
         <td>
            <?php
             echo $data->Cantidad_de_articulos;
           ?>
         </td>
         <td>
            <?php
             echo $data->Estado;
           ?>
         </td> 
         <td>
          <button type="button" onclick="buscar()" data-toggle="modal" data-target="#agregar" class="btn btn-outline-primary"  style='width:90px; height:40px'>Detalle</button>
        <button type="button" onclick="eliminar('<?php echo $data->Nombre;?>')" class="btn btn-outline-danger"  style='width:90px; height:40px'>Eliminar</button>
        
            
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
</div>

