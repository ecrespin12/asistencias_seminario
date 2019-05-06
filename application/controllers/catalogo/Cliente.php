<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ClienteModel");
	}

	public function index()
	{
		$data = array(
			'listadoClientes' => $this->ClienteModel->listClientes() , 
		);

		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/clientes/list_cli', $data);
		$this->load->view('layouts/footer');
	}

	public function formCliente()
	{
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/clientes/add_cli');
				$this->load->view('layouts/footer');
	}

	public function addCliente()
	{

		$nombres = $this->input->post("nombres");
		$apellido1 = $this->input->post("apellido1");
		$apellido2 = $this->input->post("apellido2");
		$fechaNacimiento = $this->input->post("fechaNacimiento");
		$dui = $this->input->post("dui");
		$telefono = $this->input->post("telefono");
		$sexo = $this->input->post("sexo");
		$direccion = $this->input->post("direccion");
		$estado = $this->input->post("estado");

		//la variable estado viene como una cadena, si es on u vacia
		
		$data = array(
			'cli_nombres' => $nombres,
			'cli_apellido1' => $apellido1,
			'cli_apellido2' => $apellido2, 
			'cli_fechaNacimiento' => $fechaNacimiento,
			'cli_dui' => $dui,
			'cli_telefono' => $telefono,
			'cli_sexo' => $sexo,
			'cli_direccion' => $direccion,
			'cli_estado'=> "1" 
		);

		if($this->ClienteModel->insertCliente($data))
			redirect(base_url()."catalogos/clientes");
		else 
			redirect(base_url()."catalogos/clientes/registrar");

			/* 
				TODO:falta validar el ingreso de datos a nivel de backend
				TODO: falta mandar mensajes al usuario interactivo para ver si se guardo o no:ALERTAS
			*/
	}

	public function editCliente($id)
	{
			$data = array(
				'cliente' => $this->ClienteModel->getCliente($id) , 
			);
				//Mostrar las views
				$this->load->view('layouts/header');
				$this->load->view('layouts/aside');
				$this->load->view('layouts/nav');
				$this->load->view('admin/clientes/edit_cli', $data);
				$this->load->view('layouts/footer');
	}


	public function updateCliente(){

		$clienteID = $this->input->post("idCliente");
		$nombres = $this->input->post("nombres");
		$apellido1 = $this->input->post("apellido1");
		$apellido2 = $this->input->post("apellido2");
		$fechaNacimiento = $this->input->post("fechaNacimiento");
		$dui = $this->input->post("dui");
		$telefono = $this->input->post("telefono");
		$sexo = $this->input->post("sexo");
		$direccion = $this->input->post("direccion");
		
		 $data = array(
			'cli_nombres' => $nombres,
			'cli_apellido1' => $apellido1,
			'cli_apellido2' => $apellido2, 
			'cli_fechaNacimiento' => $fechaNacimiento,
			'cli_dui' => $dui,
			'cli_telefono' => $telefono,
			'cli_sexo' => $sexo,
			'cli_direccion' => $direccion
		);

		 if ($this->ClienteModel->updateCliente($clienteID, $data)) {
			redirect(base_url()."catalogos/clientes");
		 }else{
			redirect(base_url()."catalogos/clientes/editar/".$clienteID);
		 }
	}

	public function deleteCliente($id){

		$data = array(
			'cli_estado' => "0",
		 );
		 $this->ClienteModel->updateCliente($id, $data);
		 echo "clientes";
	}



}
