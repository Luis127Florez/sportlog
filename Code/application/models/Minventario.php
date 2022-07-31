<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventario extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	
  	public function guardar($dato)
  	{
  		echo $this->db->insert("inventario",$dato);	
  	}

    public function buscar($id){
  		$query = $this->db->query("select * from sport_log.inventario where inventario.Nombre = "."'".$id."'".";");
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}  		 		
  	}


 public function modificar ($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("inventario",$dato);
    }



    public function eliminar($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("inventario");
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