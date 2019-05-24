<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeAsistenciaSeminario extends CI_Model {

	public function listAsistenciaSeminario() { 
        $resultado = $this->db->query("CALL list_asistencias2_sp()");
        return $resultado->result();
    }



}