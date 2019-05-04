<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ProveedorModel");
	}

	public function index()
	{
		$data = array(
			'listadoProveedores' => $this->ProveedorModel->listProveedores(), 
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/proveedores/list_prv', $data);
		$this->load->view('layouts/footer');
	}

	public function formProveedor()
	{
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/proveedores/add_prv');
				$this->load->view('layouts/footer');
	}


	public function addProveedor()
	{

		$nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$correo = $this->input->post("correo");


		//la variable estado viene como una cadena, si es on u vacia
		
		$data = array(
			'prv_nombre' => $nombre,
			'prv_direccion' => $direccion, 
			'prv_telefono' => $telefono,
			'prv_correo' => $correo,
			'prv_estado'=> "1" 
		);

		if($this->ProveedorModel->insertProveedor($data))
			redirect(base_url()."compras/proveedores");
		else 
			redirect(base_url()."compras/proveedores/registrar");

			/* 
				TODO:falta validar el ingreso de datos a nivel de backend
				TODO: falta mandar mensajes al usuario interactivo para ver si se guardo o no:ALERTAS
			*/
	}

	public function editProveedor($id)
	{
			$data = array(
				'proveedor' => $this->ProveedorModel->getProveedor($id) , 
			);
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/proveedores/edit_prv', $data);
				$this->load->view('layouts/footer');
	}

	public function updateProveedor()
	{
		$proveedorID = $this->input->post("idProveedor");
		$nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$correo = $this->input->post("correo");

		$data = array(
			'prv_nombre' => $nombre,
			'prv_direccion' => $direccion, 
			'prv_telefono' => $telefono,
			'prv_correo' => $correo
		);
		

		 if ($this->ProveedorModel->updateProveedor($proveedorID, $data)) {
			redirect(base_url()."compras/proveedores");
		 }else{
			redirect(base_url()."compras/proveedores/editar/".$proveedorID);
		 }
	}

	public function deleteProveedor($id){
		
		$data = array(
			'prv_estado' => "0",
		 );
		 $this->ProveedorModel->updateProveedor($id, $data);
		echo "proveedores";
	
	}


}
