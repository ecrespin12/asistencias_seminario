<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//verificar la session de usuario
		if(!$this->session->userdata("login")){
				redirect(base_url());
		}

		$this->load->model("admin/InicioModel");

	}

	public function index()
	{
		$data = array(
			'CountSeminarios' => $this->InicioModel->CountSeminarios() , 
			'CountInscripciones' => $this->InicioModel->CountInscripciones() , 
			'CountEstudiantes' => $this->InicioModel->CountEstudiantes() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('encargados/inicio', $data);
		$this->load->view('layouts/footer');
	}
}