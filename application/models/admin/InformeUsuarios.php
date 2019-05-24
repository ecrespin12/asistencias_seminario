<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeUsuarios extends CI_Model {

	public function listUsuarios() { 
        $resultado = $this->db->query("CALL list_usuarios_sp()");
        return $resultado->result();
    }



}