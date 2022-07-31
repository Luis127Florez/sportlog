<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjugadores extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardarjugador($dato)
  	{
  		echo $this->db->insert("jugador",$dato);	
  	}



    public function buscarjugador($id){
  		$query = $this->db->query("select * from sport_log.jugador where jugador.Numero_de_Identificacion = "."'".$id."'".";");
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}  		 		
  	}



  	public function modificarjugador ($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("jugador",$dato);
    }



    public function eliminarjugador($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("jugador");
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


}