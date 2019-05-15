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

		}


	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_seminario');
		
	}
	public function indexInformes2()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/informes/informes2');
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_seminario');
		
	}
}