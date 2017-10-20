<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		//$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');
	}
	
	function validar()
	{
		$name=Sthis-> input->post("elda");
        $Apellido=Sthis-> input->post("solar");
        $correo=Sthis-> input->post("elisa");
        echo "Elda:".$name."Solar"$Apellido."Elisa"$correo;
				

  $data=array('elda'->=$this->post('name'),'solar'->=$this->post('Apellido'),'elisa'->=$this->post('correo'));
   }
   	}
   		


?>