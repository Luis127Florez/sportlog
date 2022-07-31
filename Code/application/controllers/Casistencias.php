<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casistencias extends CI_Controller {


public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Masistencias');
  	}

public function tasistencia1 () {

  $dato['jugador'] = $this->Masistencias->consultar("select Tipo_de_Identificacion, Numero_de_Identificacion, Nombre, Apellido, Posicion, Categoria from jugador");
   $this->load->view('Tablas/tasistencia1',$dato);

 }


public function guardarasis()
  	{
  		# code...
  		$dato = array(
  					"jugador"=>$_POST['identificacion'],
  					"fecha"=>$_POST['fecha'],
  					"Tipo_de_asistencia"=>$_POST['asistencia']  					
  				);
  		echo $this->Masistencias->guardarasis($dato);
  	}




	public  function tbuscarasis()
    {
    
        $data['jugador'] = $this->Masistencias->consultar1("select jugador.Tipo_de_Identificacion, jugador.Numero_de_Identificacion, jugador.Nombre, jugador.Apellido, jugador.Posicion, asistencia.fecha, jugador.Categoria, asistencia.Tipo_de_asistencia from asistencia inner join jugador where asistencia.jugador=jugador.Numero_de_Identificacion  order by fecha DESC ");
       $this->load->view('Tablas/tasistencia',$data);
    }
      public function filtrar()
    {
       $cate = $_POST['cate'];
       $data['jugador'] = $this->Masistencias->consultar("Select Tipo_de_Identificacion, Numero_de_Identificacion, Nombre, Apellido, Posicion, Categoria from jugador   where Categoria = '".$cate. "'  order by Apellido ASC ");
       $this->load->view('Tablas/tasistencia1',$data);
    }


     public function filtrar1()
    {
       $cate = $_POST['cate'];
       $data['jugador'] = $this->Masistencias->consultar("select jugador.Tipo_de_Identificacion, jugador.Numero_de_Identificacion, jugador.Nombre, jugador.Apellido, jugador.Posicion, asistencia.fecha, jugador.Categoria, asistencia.Tipo_de_asistencia from asistencia inner join jugador where asistencia.jugador=jugador.Numero_de_Identificacion and jugador.Categoria = '".$cate. "' order by fecha DESC");
       $this->load->view('Tablas/tasistencia',$data);
    }


}