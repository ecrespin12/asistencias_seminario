
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("EmpleadoModel");
		$this->load->model("CargoModel");
	}

	public function index()
	{
		$data = array(
			'listadoEmpleados' => $this->EmpleadoModel->listEmpleados() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/empleados/list_emp', $data);
		$this->load->view('layouts/footer');
	}

	public function formEmpleado()
	{
		$data = array(
			'listadoCargos' => $this->CargoModel->listCargos()
		);
		
		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/empleados/add_emp', $data);
		$this->load->view('layouts/footer');
	}

	public function addEmpleado()
	{
		$nombre = $this->input->post("nombre");
		$apellido1 = $this->input->post("apellido1");
		$apellido2 = $this->input->post("apellido2");
		$fechaNacimiento = $this->input->post("fechaNacimiento");
		$direccion = $this->input->post("direccion");
		$dui = $this->input->post("dui");
		$sexo = $this->input->post("sexo");
		$telefono = $this->input->post("telefono");
		$foto = $this->input->post("foto");
		$cargoID = $this->input->post("cargo");

		//la variable estado viene como una cadena, si es on u vacia
		
		$data = array(
			'emp_nombre' => $nombre,
			'emp_apellido1' => $apellido1,
			'emp_apellido2' => $apellido2, 
			'emp_fechaNacimiento' => $fechaNacimiento, 
			'emp_direccion' => $direccion,
			'emp_dui' => $dui,
			'emp_sexo' => $sexo,
			'emp_telefono' => $telefono,
			'emp_fotografia' => $foto,
			'cargoID' => $cargoID,
			'emp_estado'=> "1" 
		);

		if($this->EmpleadoModel->insertEmpleado($data))
			redirect(base_url()."catalogos/empleados");
		else 
			redirect(base_url()."catalogos/empleados/registrar");

			/* 
				TODO:falta validar el ingreso de datos a nivel de backend
				TODO: falta mandar mensajes al usuario interactivo para ver si se guardo o no:ALERTAS
				TODO: falta agregar fotografia a empleados
			*/
	}

	public function editEmpleado($id)
	{
		$data = array(
			'empleado' => $this->EmpleadoModel->getEmpleado($id) , 
			'listadoCargos' => $this->CargoModel->listCargos()
		);
		//Mostrar las views
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('layouts/nav');
		$this->load->view('admin/empleados/edit_emp', $data);
		$this->load->view('layouts/footer');
	}


}

