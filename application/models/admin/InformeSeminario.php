<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeSeminario extends CI_Model {

	public function listSeminarios() { 
        $resultado = $this->db->query("CALL list_seminarios_sp()");
        return $resultado->result();
    }



}