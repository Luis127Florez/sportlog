<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masistencias extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
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



public function guardarasis($dato)
  	{
  		echo $this->db->insert("asistencia",$dato);	
  	}




    public function consultar1($sql)
    {
      
      $query = $this->db->query($sql);
      if($query->num_rows()>0){
        return $query;
      }else{
        return false;
      }
    }

}