<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformeInscripciones extends CI_Model {

	public function listInscripcionSeminario() { 
        $resultado = $this->db->query("CALL list_inscripcion_sp()");
        return $resultado->result();
    }



}