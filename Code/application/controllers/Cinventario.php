<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinventario extends CI_Controller 
{
 
 public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Minventario');
  	}

  	public function guardar()
  	{
  		# code...
  		$dato = array(
  					"Nombre"=>$_POST['nombre'],
  					"Fecha"=>$_POST['fecha'],
  					"Cantidad_de_articulos"=>$_POST['cantidad'],
  					"Estado"=>$_POST['estado']
  				);
  		echo $this->Minventario->guardar($dato);
  	}

    public  function buscar()
    {
      # code...      
        $id = $_POST['nombre'];
         $respuesta = $this->Minventario->buscar($id);
        echo json_encode($respuesta);
    }


    public function modificar()
   {

     $id["Nombre"] = $_POST['nombre'];
     $dato = array('Fecha' => $_POST['fecha'],
      'Cantidad_de_articulos' => $_POST['cantidad'],
        'Estado' => $_POST['estado']);

       echo $this->Minventario->modificar($id,$dato);

}

/*
     public function modificar()
    {
      # code...
      $id["Nombre"] = $_POST['nombre'];

      if(isset($_POST['estado'])){
        $dato = array('Fecha' => $_POST['fecha'], 'Cantidad_de_articulos' => $_POST['cantidad'],
      'Estado' => $_POST['estado']
      );
      }else{
        $dato = array('Fecha' => $_POST['fecha'], 'Cantidad_de_articulos' => $_POST['cantidad']
      );
           }
    }
*/

 public function eliminar()
    {
      # code...
      $id["Nombre"] = $_POST['nombre'];

      echo $this->Minventario->eliminar($id);
    }


public function tinventario () {

   $dato['inventario'] = $this->Minventario->consultar("select Nombre, fecha, Cantidad_de_articulos, Estado from inventario");
 
   $this->load->view('Tablas/tinventario',$dato);

 }




}