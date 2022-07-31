<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

	public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mreportes');
        $this->load->model('Mjugadores');
  	}
	
	public function index()
	{
		
		$this->load->view('Componentes/header');
		$this->load->view('login');
		$this->load->view('Componentes/footer');
	}



	public function index2()

	{
		
		$this->load->view('Componentes/header');
		$this->load->view('los_ojos');
		$this->load->view('Componentes/footer');
	}

	public function menu()
	{
		
		$this->load->view('Componentes/header_1');
		$this->load->view('menu');
		$this->load->view('Componentes/footer');

	}

    public function registrate()
	{
		
		$this->load->view('Componentes/header');
		$this->load->view('registrate');
		$this->load->view('Componentes/footer');
		
	}



    public function inventario()
    {
    	$this->load->view('Componentes/header_1');
		$this->load->view('inventario');
		$this->load->view('Componentes/footer');   
	}



	 public function jugadores()
    {
    	$this->load->view('Componentes/header_1');
		$this->load->view('jugadores');
		$this->load->view('Componentes/footer');   
	 }


	  public function rendimiento()
    {
    	$this->load->view('Componentes/header_1');
		$this->load->view('rendimiento');
		$this->load->view('Componentes/footer');   
	}


	  public function asistencia()
    {
    	$this->load->view('Componentes/header_1');
		$this->load->view('asistencias');
		$this->load->view('Componentes/footer');   
	 }

	   public function reportes()
    {
    	$this->load->view('Componentes/header_1');
		$this->load->view('reportes');
		$this->load->view('Componentes/footer');   
	 }


	 public function reporte1()
    {	$dato['jugador'] = $this->Mjugadores->consultar("select Nombre, Apellido, Tipo_de_Identificacion, Numero_de_Identificacion, Edad, Sexo, Posicion, EPS, Categoria from jugador");
    	$this->load->view('Componentes/header_1');
		$this->load->view('treportes/reporte1',$dato);
		$this->load->view('Componentes/footer');   
	 }


}
