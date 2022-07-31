<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/registrate.css');?>">
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      <p class="fn">
      <label for="fn">Nombres</label>
      <input name="Nombres" type="text"class="validate[required,custom[email]] feedback-input" onkeypress="return soloLetras(event)" id="Nombres"/>
      </p>
      <p class="ln">
    <label for="ln">Tipo de cargo</label>
   <select name="Cargo" type="text" class="validate[required,custom[email]] feedback-input" id="Cargo"/>
      <option></option>
      <option>Propietario de escuela</option>
      <option>administrador</option>
      <option>entrenador</option>
   </select> 
      </p>
      <p class="ln">
    <label for="ln">Numero de Documento</label>
   <input name="Documento" type="number" class="validate[required,custom[email]] feedback-input" onkeypress="return numeros(event) " id="Documento"/>
      </p>
                
       <p class="id">
        <label for="id">Usuario</label>
        <input name="Usuario" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"  id="Usuario"/>  
      </p>
      <p class="id">
        <label for="id">Contraceña</label>
     <input name="Contraseña1" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="Contraseña1"/><div style="margin-top:15px;">
          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
      </p>
     







        <div >
        <input type="button" onclick="login()" value="atras" id="login"/>
      </div>

    
        <div class="Save">
        <input type="button" onclick="guardarregistrate();" value="guardar" id="guardar"/>
      </div>
     
        <div class="ease"></div>
      </div>
    </form>
  </div>
    </div>

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

 <script type="text/javascript" src="<?php echo base_url('asistentes/js/menu.js');?>" ></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/registrate.js');?>" ></script>
