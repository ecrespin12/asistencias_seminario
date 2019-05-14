<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminario extends CI_Controller {

	public function __construct() {
			parent::__construct();
			
			//verificar la session de usuario, si se ha logueado
			if(!$this->session->userdata("login")){
					redirect(base_url());
			}

			//llamar models desde su carpeta
			$this->load->model("admin/SeminarioModel");
	}


	public function index()
	{
		$data = array(
			'listadoSeminarios' => $this->SeminarioModel->listSeminarios() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/seminarios/seminarios', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_seminario');
	}


	public function insertSeminario() {
		//recibir los names de input desde la vista por post
		$facultad = $this->input->post("txtFacultad_new");
		$escuela = $this->input->post("txtEscuela_new");
		$codigoSeminario = $this->input->post("txtCodigo_new");
		$nombreSeminario = $this->input->post("txtSeminario_new");

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'facultad' => $facultad ,
			'escuela' => $escuela ,
			'codigoSeminario'=>$codigoSeminario,
			'nombre'=>$nombreSeminario,
			
		 );

		 if($this->SeminarioModel->insertSeminario($data))
		 redirect(base_url()."admin/Seminario");
	

	}

	public function deleteSeminario($id){
		
		$data = array(
			'seminarioID' => $id,
			
		 );
		 $this->SeminarioModel->deleteSeminario($data);
	
	
	}
}