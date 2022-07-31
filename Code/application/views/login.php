<br>
<br>
<br>
<br>
<br>
<br>
<br>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asistentes/css/login.css');?>">
<center>
		<div class="card">
			<div class="card-header">
			     <center>
				<h3>Login Sport Log</h3>
				</center>
				<div class="d-flex justify-content-end social_icon">
								
				</div>
			</div>
			<br>
			<br>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend" > 
							<span class="input-group-text" ><img src="<?php echo base_url('asistentes/imagenes/use.png') ?>">
						</div>
						<input type="text" class="form-control" placeholder="Usuario" id="Usuario" style="height: 44px;">
					</div>
					<br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><img src="<?php echo base_url('asistentes/imagenes/key.png') ?>">
						</div>
						<input type="password" class="form-control" placeholder="contraseña" id="Contraseña"  style="height: 44px;">
					</div>
					<div class="row align-items-center remember">
						
					</div>
					<br>

					<div class="form-group">
					     <center>					     
					<input type="button" value="Ingresar" onclick="ingresar();" class="btn btn-success">
						</center>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div >
					
             <a class="nav-link" id="registrate"  href="#"> Registrate</a>
                       
				</div>
				<div class="d-flex justify-content-center">
					
				</div>
			</div>
		</div>
</center>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/registrate.js');?>" ></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/login.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asistentes/js/menu.js');?>"></script>

