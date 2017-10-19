<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('form_model');  
	}

	public function index()
	{
		$this->load->view('formulario');
	}
	//esta funcion es la que recibe los datos
	function recibir($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['elda'], 'apellido'=>$data['solar'],'Direccion de Email'=>$data['elisa'], 'Next'=>$data['listo']));

		if ($this->db->affected_rows() > 0) 
		{
			echo "recibidos con éxito";
		}
		else
		{
			echo "Algo salio mal";
		}
	}
	 // esta funcion es para guardar los datos
	function guardar($data)
	{
		$query = $this->db->insert('usuarios', array('nombre'=>$data['elda'], 'apellido'=>$data['solar'],'Direccion de Email'=>$data['elisa'], 'Next'=>$data['listo']));

		if ($this->db->affected_rows() > 0) 
		{
			echo "Guardados con éxito";
		}
		else
		{
			echo "error";
		}
	}

}
