<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH .'/libraries/Format.php';

class Seminario_api extends REST_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->database();
        $this->load->model("admin/SeminarioModel");
    }

    public function pruebas_get(){
     
        $this->response($this->SeminarioModel->listSeminarios());
    }

    public function listSeminarios_get() {
     
        $this->response($this->SeminarioModel->listSeminarios());
    }

    public function insertSeminario_post() {
      
        //recibir los names de input desde la vista por post
		$facultad = $this->input->post("txtFacultad_new");
		$escuela = $this->input->post("txtEscuela_new");
		$codigoSeminario = $this->input->post("txtCodigo_new");
		$nombreSeminario = $this->input->post("txtSeminario_new");

		//mandar los input a arreglo y campos de la bd
		$data = array(
			'facultad' => $facultad ,
			'escuela' => $escuela ,
			'codigoSeminario'=>$codigoSeminario,
			'nombre'=>$nombreSeminario,
		 );

        if($this->SeminarioModel->insertSeminario($data))
            $this->response(array('status' => 'exito'));
        else 
            $this->response(array('status' => 'fallo'));
    }

    function updateSeminario_put() {

        //recibir los names de input desde la vista por post
        $seminarioID = $this->input->post('txtCodigo_new');
		$facultad = $this->input->post('txtFacultad_new');
		$escuela = $this->input->post('txtEscuela_new');
		$codigoSeminario = $this->input->post('txtCodigo_new');
		$nombreSeminario = $this->input->post('txtSeminario_new');

		//mandar los input a arreglo y campos de la bd
		$data = array(
            'seminarioID' => $this->put('1') ,
			'facultad' => $this->put('x') ,
			'escuela' => $this->put('x') ,
			'codigoSeminario'=> $this->put('x'),
			'nombre'=> $this->put('x'),
		 );

        if($this->SeminarioModel->updateSeminario($data))
            $this->response(array('status' => 'exito'));
        else 
            $this->response(array('status' => 'fallo'));
    }
 
    function deleteSeminario_delete() {
        
        //recibir los names de input desde la vista por post
		$seminarioID = $this->input->post("");

		//mandar los input a arreglo y campos de la bd
		$data = array(
            'seminarioID' => '45' ,
		 );

        if($this->SeminarioModel->deleteSeminario($data))
            $this->response(array('status' => 'exito'));
        else 
            $this->response(array('status' => 'fallo'));
    }
	
}
