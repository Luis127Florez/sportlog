<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cjugadores extends CI_Controller {


	public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mjugadores');
  	}


  	public function guardarjugador()
  	{
  		# code...
  		$dato = array(
  					"Nombre"=>$_POST['nombre'],
  					"Apellido"=>$_POST['apellido'],
  					"Tipo_de_Identificacion"=>$_POST['tipo'],
  					"Numero_de_Identificacion"=>$_POST['identificacion'],
  					"Edad"=>$_POST['edad'],
  					"Sexo"=>$_POST['sexo'],
  					"Posicion"=>$_POST['posicion'],
  					"EPS"=>$_POST['eps'],
  					"Categoria"=>$_POST['categoria']
  				);
  		echo $this->Mjugadores->guardarjugador($dato);
  	}


 public  function buscarjugador()
    {
      # code...      
        $id = $_POST['identificacion'];
         $respuesta = $this->Mjugadores->buscarjugador($id);
        echo json_encode($respuesta);
    }


  public function modificarjugador()
   {

     $id["Numero_de_Identificacion"] = $_POST['identificacion'];

     $dato = array(
            "Nombre"=>$_POST['nombre'],
            "Apellido"=>$_POST['apellido'],
            "Tipo_de_Identificacion"=>$_POST['tipo'],
            "Edad"=>$_POST['edad'],
            "Sexo"=>$_POST['sexo'],
            "Posicion"=>$_POST['posicion'],
            "EPS"=>$_POST['eps'],
            "Categoria"=>$_POST['categoria']
      );

       echo $this->Mjugadores->modificarjugador($id,$dato);

    }

    public function eliminarjugador()
    {
      # code...
      $id["Numero_de_Identificacion"] = $_POST['identificacion'];
      echo $this->Mjugadores->eliminarjugador($id);
    }


public function tjugadores () {

   $dato['jugador'] = $this->Mjugadores->consultar("select Nombre, Apellido, Tipo_de_Identificacion, Numero_de_Identificacion, Edad, Sexo, Posicion, EPS, Categoria from jugador");
   $this->load->view('Tablas/tjugadores',$dato);

 }



  	

}