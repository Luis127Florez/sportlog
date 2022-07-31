<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrendimiento extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}

  	public function guardarrendimiento($dato)
  	{
  		echo $this->db->insert("rendimiento_fisico",$dato);	
  	}






    public function buscarrendimiento($id){
  		$query = $this->db->query("select * from sport_log.rendimiento_fisico where rendimiento_fisico.Numero_de_Identificacion = "."'".$id."'".";");
  		if($query->num_rows()>0){
  			return $query->row();
  		}else{
  			return false;
  		}  		 		
  	}



  	public function modificarrendimiento ($id, $dato)
    {
      # code...
      $query = $this->db->where($id);
      echo $query = $this->db->update("rendimiento_fisico",$dato);
    }



    public function eliminarrendimiento($id){
      $query = $this->db->where($id);
      echo $query = $this->db->delete("rendimiento_fisico");
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