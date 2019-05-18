<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH .'/libraries/Format.php';

class APIS extends REST_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->database();
        $this->load->model("admin/SeminarioModel");
        $this->load->model("admin/EstudianteModel");
    }

    public function pruebas_get(){
     
        $this->response($this->SeminarioModel->listSeminarios());
    }

    public function listSeminarios_get() {
     
        $this->response($this->SeminarioModel->listSeminarios());
    }

    public function insertEstudiante_post() {
      
        //recibir los names de input desde la vista por post
		$nombre = $this->input->post("txtNombre");
		$apellido = $this->input->post("txtApellido");
		$carrera = $this->input->post("txtCarrera");
        $carnet = $this->input->post("txtCarnet");
        $pass = $this->input->post("txtPassword");

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'nombre' => $nombre ,
			'apellido' => $apellido ,
			'carrera'=>$carrera,
            'carnet'=>$carnet,
            'password'=>$pass,
		 );

        if($this->EstudianteModel->insertEstudiante($data))
            $this->response(array('status' => 'exito'));
        else 
            $this->response(array('status' => 'fallo'));
    }

    public function EstudianteInscripcion_post() {
      
        //recibir los names de input desde la vista por post
		$estudiante = $this->input->post("txtEstudianteID");
		$seminario = $this->input->post("txtSeminarioID");
	

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'estudianteID' => $estudiante ,
			'seminarioID' => $seminario ,
			
		 );

        if($this->EstudianteModel->EstudianteInscripcion($data))
            $this->response(array('status' => 'exito'));
        else 
            $this->response(array('status' => 'fallo'));
    }

    


	
}
