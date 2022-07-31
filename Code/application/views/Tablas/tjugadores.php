<div id="contenido" class="shadow-lg p-3 mb-5 bg-white rounded" style="width: 1250px; margin-left: -330px; padding: 0px; height: 380px;"> <div class="form-group form-inline">       
<div class="scrollbar scrollbar-success">
<table class="table table-hover table-bordered"  >
 <thead class="thead-dark">
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col" >Apellido</th>
     <th scope="col">Tipo de identificacio</th>
     <th scope="col">Numero de Identificacion</th>
     <th scope="col">Edad</th>
     <th scope="col">sexo</th>  
     <th scope="col">Posicion</th>
     <th scope="col">EPS</th>
     <th scope="col">Categoria</th>

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
             echo $data->Nombre;
           ?>
         </th>
         <td>
            <?php
             echo $data->Apellido;
           ?>
         </td>
         <td>
            <?php
             echo $data->Tipo_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Numero_de_Identificacion;
           ?>
         </td>
         <td>
            <?php
             echo $data->Edad;
           ?>
         </td>
         <td>
           <?php
             echo $data->Sexo;
           ?>
         </td>
         <td>
           <?php
             echo $data->Posicion;
           ?>
         </td>
         <td>
           <?php
             echo $data->EPS;
           ?>
         </td>
         <td>
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
</tbod3>
</table>
</div>
</div>
</div>
