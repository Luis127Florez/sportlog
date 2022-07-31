<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mlogin');
  	}



  	public function ingresar(){

    $user = "";
    $pass = "";
    $sql = "";
    $consulta = "";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "Select * from sport_log.usuario where usuario.Usuario ="."'".$user."'"."and usuario.contraseña1 = "."'".$pass."'";
    try{
      $consulta = $this->Mlogin->ingresar($sql);

      if(empty($consulta)){
         echo false;
      }else{
        $datasessiones = array('Usuario' => $user ,
                               'contraseña1' => $pass, 
                               'login' => TRUE
                         );
        $this->session->set_userdata($datasessiones);
        echo true;
      }

    }catch(Exception $ex){
      echo $ex;
    }
 }

  public function menu(){
 if(!$this->session->userdata('login') == TRUE){
        redirect('Controlador');
    }else{
    $data['Usuario'] = $this->session->userdata('Usuario') ;

    $this->load->view('Componentes/header_1');
    $this->load->view('menu', $data );
	  $this->load->view('Componentes/footer');

}
  }

  public function cerrar()
  {
    # code...
    try{
     $this->session->sess_destroy();
     echo true;
    }catch(Exception $e){
      echo false;
    }
    
  }
}