<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	//Constructor del controlador: aca se agregan referencias a modelos
	public function __construct()
	{
		parent::__construct();
	
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
	
		if($user=="estudiante" || $user=="encargado" || $user=="admin")
			$login=true;		
		else 
			$login=false;
		
		//si el nombre de usuario ingresado es correcto enviarlo al controlador Dashboard
		if($login==true){
			$data  = array(
				'usuario' => $user,
				'login' => $login
			);
			$this->session->set_userdata($data);

			if ($user == "admin") {
				redirect(base_url() . "admin/inicio");
			}elseif ($user == "encargado") {
				redirect(base_url() . "encargado/inicio");
			}elseif ($user == "estudiante") {
				redirect(base_url() . "estudiante/inicio");
			}
		}
		else{
			$this->session->set_flashdata("error", "El usuario y/o contraseña son incorrectos");
			redirect(base_url());}
	

	}


}


