<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	//Constructor del controlador: aca se agregan referencias a modelos
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/UsuarioModel");
	
	}

	//funcion principal
	public function index()
	{
		//verificar la session de usuario

			$this->load->view('login');
	}

	public function login()
	{
		//Temporal

		$user = $this->input->post("usuario");
		$password = $this->input->post("password");
		$res = $this->UsuarioModel->login($user, $password);
	
		if (!$res) {
			$this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");

			redirect(base_url());
		} else {
		

			$data  = array(
				'id' => $res->usuarioID,
				'usuario' => $res->usuario,
				'rol' => $res->rolID,
				'login' => true,
				'perfil' => 'admin'
			);
			$this->session->set_userdata($data);
			redirect(base_url() . "admin/inicio");
		}
		

	

	}




}


