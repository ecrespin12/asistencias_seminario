<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        
        $this->load->model("SeminarioModel");
    }

	public function index()
	{
        $data = array(
            'listadoSeminarios' => $this->SeminarioModel->listSeminarios() ,
         );


		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/seminarios/seminarios', $data);
		$this->load->view('layouts/footer');
    }
    


}