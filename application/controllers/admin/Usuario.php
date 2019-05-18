
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {

	public function __construct() {
			parent::__construct();
			
			//verificar la session de usuario, si se ha logueado
			if(!$this->session->userdata("login")){
					redirect(base_url());
			}

			//llamar models desde su carpeta
			$this->load->model("admin/UsuarioModel");
	}


	public function index()
	{
		$data = array(
			'listadoUsuarios' => $this->UsuarioModel->listUsuario() , 
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/usuario', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/scripts/adm_usuario');
	}


	public function insertUsuario() {
		//recibir los names de input desde la vista por post
		$usuario = $this->input->post("txtUsuario_new");
		$contraseña = $this->input->post("txtPassword_new");
		$estado = $this->input->post("txtEstado_new");
		$rolID = $this->input->post("txtRol_new");
		$fechaAlta = $this->input->post("dateFecha_new");

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'usuario' => $usuario ,
			'contraseña' => $contraseña ,
			'estado'=>$estado,
			'rol'=>$rolID,
			'fecha'=>$fechaAlta,
			
		 );

		 if($this->UsuarioModel->insertUsuario($data))
		 redirect(base_url()."admin/Usuario");
	

	}
	public function updateUsuario() {
		//recibir los names de input desde la vista por post
		$usuarioID = $this->input->post("txtID_edit");
		$usuario = $this->input->post("txtUsuario_edit");
		$contraseña = $this->input->post("txtPassword_edit");
		$estado = $this->input->post("txtEstado_edit");
		$rolID = $this->input->post("txtRol_edit");
		$fechaAlta = $this->input->post("dateFecha_edit");

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'id' => $usuarioID,
			'usuario' => $usuario ,
			'contraseña' => $contraseña ,
			'estado'=>$estado,
			'rol'=>$rolID,
			'fecha'=>$fechaAlta,
			
		 );

		 if($this->UsuarioModel->updateUsuario($data))
		 redirect(base_url()."admin/Usuario");
	

	}

	public function deleteUsuario($id){
		
		$data = array(
			'usuarioID' => $id,
			
		 );
		 $this->UsuarioModel->deleteUsuario($data);
	
	
	}
}