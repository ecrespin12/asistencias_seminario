<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informe extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			//verificar la session de usuario
			if(!$this->session->userdata("login")){
					redirect(base_url());
			}
			$this->load->model("admin/InformeAsistenciaSeminario");
			$this->load->model("admin/InformeInscripciones");
			$this->load->model("admin/InformeSeminario");


		}


	public function index()
	{
		$data = array(
			'listadoAsistenciaSeminario' => $this->InformeAsistenciaSeminario->listAsistenciaSeminario() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_seminario');	
	}

	public function indexInformes2()
	{
		$data = array(
			'listadoInscripcionSeminario' => $this->InformeInscripciones->listInscripcionSeminario() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes2', $data);
		$this->load->view('layouts/footer');	
		$this->load->view('layouts/scripts/adm_seminario');	
	}
	public function indexInformes3()
	{
		$data = array(
			'listadoUsuarios' => $this->InformeUsuarios->listUsuarios() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes3', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_seminario');		
	}
	public function indexInformes4()
	{
		$data = array(
			'listadoSeminarios' => $this->InformeSeminario->listSeminarios() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes4', $data);
		$this->load->view('layouts/footer');	
		$this->load->view('layouts/scripts/adm_seminario');	
	}

}