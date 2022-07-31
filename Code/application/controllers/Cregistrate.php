<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregistrate extends CI_Controller {

	 public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mregistrate');
  	}

  	public function guardarregistrate()
  	{
  		# code...
  		$dato = array(

  			        "Usuario"=>$_POST['usuario'],	
  					"Nombre"=>$_POST['nombres'],
  					"tipo_de_cargo"=>$_POST['cargo'],
  					"numero_de_documento"=>$_POST['documento'], 									
  					"contraseña1"=>$_POST['contraseña1']
  

  				);
  		echo $this->Mregistrate->guardarregistrate($dato);
  	}






}