<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Precio extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	
		$this->load->model("PrecioModel");

		
	}

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/precios/list_pre');
		$this->load->view('layouts/footer');
	}

	public function formPrecio()
	{
	
		$data = array(
			'listadoProductos' => $this->PrecioModel->listProductos() //join

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/precios/add_pre', $data);
		$this->load->view('layouts/footer');
	}


}
