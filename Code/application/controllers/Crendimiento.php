<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crendimiento extends CI_Controller {

	public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mrendimiento');
  	}


    public function guardarrendimiento()
  	{
  		# code...
  		$dato = array(
  					"Nombre"=>$_POST['nombre'],
  					"Numero_de_Identificacion"=>$_POST['identificacion'],
  					"Posicion_de_juego"=>$_POST['posicion'],
  					"velocidad"=>$_POST['velocidad'],
  					"Destreza"=>$_POST['destreza'],
  					"Agilidad"=>$_POST['agilidad'],
  					"Resistencia"=>$_POST['resistencia'],
  					"Disciplina"=>$_POST['disciplina'],
  					"Punteria"=>$_POST['punteria'],
  					"Control"=>$_POST['control'],
  					"Promedio"=>$_POST['promedio']

  				);
  		echo $this->Mrendimiento->guardarrendimiento($dato);
  	}


    public  function buscarrendimiento()
    {
      # code...      
        $id = $_POST['identificacion'];
         $respuesta = $this->Mrendimiento->buscarrendimiento($id);
        echo json_encode($respuesta);
    }








   public function modificarrendimiento()
   {

     $id["Numero_de_Identificacion"] = $_POST['identificacion'];

     $dato = array(
                    "Nombre"=>$_POST['nombre'],
  					"Numero_de_Identificacion"=>$_POST['identificacion'],
  					"Posicion_de_juego"=>$_POST['posicion'],
  					"velocidad"=>$_POST['velocidad'],
  					"Destreza"=>$_POST['destreza'],
  					"Agilidad"=>$_POST['agilidad'],
  					"Resistencia"=>$_POST['resistencia'],
  					"Disciplina"=>$_POST['disciplina'],
  					"Punteria"=>$_POST['punteria'],
  					"Control"=>$_POST['control'],
  					"Promedio"=>$_POST['promedio']
      );

       echo $this->Mrendimiento->modificarrendimiento($id,$dato);

    }




    public function eliminarrendimiento()
    {
      # code...
      $id["Numero_de_Identificacion"] = $_POST['identificacion'];
      echo $this->Mrendimiento->eliminarrendimiento($id);
    }


    public function trendimiento() {

   $dato['rendimiento_fisico'] = $this->Mrendimiento->consultar("select rendimiento_fisico.Nombre, rendimiento_fisico.Numero_de_Identificacion, rendimiento_fisico.Posicion_de_juego, rendimiento_fisico.velocidad, rendimiento_fisico.Destreza, rendimiento_fisico.Agilidad, rendimiento_fisico.Resistencia, rendimiento_fisico.Disciplina, rendimiento_fisico.Punteria, rendimiento_fisico.Control, rendimiento_fisico. promedio  from rendimiento_fisico");
   $this->load->view('Tablas/trendimiento',$dato); 

 }






	
}


