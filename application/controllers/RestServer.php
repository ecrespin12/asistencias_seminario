<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH .'/libraries/Format.php';

class RestServer extends REST_Controller {

    public function __construct(){
        
        parent::__construct();

        $this->load->database();
        $this->load->model("SeminarioModel");
    }

    public function test_get(){
     
        $this->response($this->SeminarioModel->listSeminarios());
    }

    public function seminarios_get(){
     
        $this->response($this->SeminarioModel->listSeminarios());
    }
	
}
