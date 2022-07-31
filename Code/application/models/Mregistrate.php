<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregistrate extends CI_Model {
	
  	public function __construct(){
        parent::__construct(); 
  	}



  	public function guardarregistrate ($dato)
  	{
  		echo $this->db->insert("usuario",$dato);	
  	}




}