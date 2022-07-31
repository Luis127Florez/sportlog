<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mreportes extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}


  	public function  jugador ()
  	{
  		$query = $this->db->get('jugador');
  		return $query->result();
  	}


  	  public function consultar($sql)
   {

       $query = $this->db->query($sql);  
         if($query->num_rows()>0){
       return $query;
     }else{
       return false;
     }
   }


	public function  inventario ()
  	{
  		$query = $this->db->get('inventario');
  		return $query->result();
  	}
  	
	public function  rendimiento_fisico ()
  	{
  		
  		$query = $this->db->get('rendimiento_fisico');
  		return $query->result();
  	}


    public function  asistencias ()
  	{
      $casis = 'select jugador.Tipo_de_Identificacion, jugador.Numero_de_Identificacion, jugador.Nombre, jugador.Apellido, jugador.Posicion, asistencia.fecha, jugador.Categoria, asistencia.Tipo_de_asistencia from asistencia inner join jugador where asistencia.jugador=jugador.Numero_de_Identificacion  order by fecha DESC';
  		$query = $this->db->query($casis);
  		return $query->result();
  	}

public function  jjuveniles ()
    {
      $casis = "select * from jugador WHERE Categoria ='juvenil'";
      $query = $this->db->query($casis);
      return $query->result();
    }




}