<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creportes extends CI_Controller {


  public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Mreportes');
        $this->load->model('Mjugadores');
  	}

  	public function pdf ()
  	{
  	    $data['jugador']=$this->Mreportes->jugador();
        $mpdf = new \Mpdf\Mpdf(['orientation'=> 'L']);
        $mpdf->SetFooter('<h1>Firma: __________________________');
        $mpdf-> defaultfooterfontsize=10;
        $mpdf-> defaultfooterfontstyle='BI';
        $html = $this->load->view('treportes/report',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

   	}


    public function inventario ()
    {
        $data['inventario']=$this->Mreportes->inventario();
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('treportes/rinventario',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }
     public function rendimiento ()
    {
        $data['rendimiento_fisico']=$this->Mreportes->rendimiento_fisico();
        $mpdf = new \Mpdf\Mpdf(['orientation'=> 'L']);
        $mpdf->SetFooter('<h1>Firma: __________________________');
        $mpdf-> defaultfooterfontsize=10;
        $mpdf-> defaultfooterfontstyle='BI';
        $html = $this->load->view('treportes/rrendimiento',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }
    public function asistencias ()
    {
        $data['jugador']=$this->Mreportes->asistencias();
        $mpdf = new \Mpdf\Mpdf(['orientation'=> 'L']);
        $mpdf->SetFooter('<h1>Firma: __________________________');
        $mpdf-> defaultfooterfontsize=10;
        $mpdf-> defaultfooterfontstyle='BI';
        $html = $this->load->view('treportes/rasistencias',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }
    public function jjuveniles ()
    {
        $data['jugador']=$this->Mreportes->jjuveniles();
        $mpdf = new \Mpdf\Mpdf(['orientation'=> 'L']);
        $mpdf->SetFooter('<h1>Firma: __________________________');
        $mpdf-> defaultfooterfontsize=10;
        $mpdf-> defaultfooterfontstyle='BI';
        $html = $this->load->view('treportes/report',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();

    }

    



    public function reporte1 () {

   $dato['jugador'] = $this->Mjugadores->consultar("select Nombre, Apellido, Tipo_de_Identificacion, Numero_de_Identificacion, Edad, Sexo, Posicion, EPS, Categoria from jugador");
   $this->load->view('treportes/reporte1',$dato);

 }

}
