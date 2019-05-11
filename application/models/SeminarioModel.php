<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SeminarioModel extends CI_Model {


	
    public function listSeminarios(){
        
        $resultado = $this->db->query("CALL listSeminarios_sp()");
        return $resultado->result();
    }

    
}