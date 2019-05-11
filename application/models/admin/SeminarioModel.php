<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeminarioModel extends CI_Model {

	public function listSeminarios() { 
        $resultado = $this->db->query("CALL list_seminarios_sp()");
        return $resultado->result();
    }

    public function insertSeminario($data){
        $stored_procedure = "CALL insert_seminario_sp(?,?,?,?)";
        $resultado = $this->db->query($stored_procedure, $data);
        return $resultado;
    }
}