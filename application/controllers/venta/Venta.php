<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	
		$this->load->model("VentaModel");
		$this->load->model("ClienteModel");
		
		
	}

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/ventas/list_ven');
		$this->load->view('layouts/footer');
	}

	public function formVenta()
	{
	
		$data = array(
			'comprobantes' =>$this->VentaModel->getComprobantes(), 
			'listadoClientes'=>$this->ClienteModel->listClientes(),
			'listadoPreciosProductos'=>$this->VentaModel->listPreciosProductos()  
			

		);

	

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/ventas/add_ven', $data);
		$this->load->view('layouts/footer');
	}


}
