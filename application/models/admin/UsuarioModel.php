<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

	public function listUsuario(){ 
        $resultado = $this->db->query("CALL list_usuario_sp()");
        return $resultado->result();
    }

    public function insertUsuario($data){
        $stored_procedure = "CALL insert_usuario_sp(?,?,?,?,?)";
        $resultado = $this->db->query($stored_procedure, $data);
        return $resultado;
    }

    public function updateUsuario($data){
        $stored_procedure = "CALL update_usuario_sp(?,?,?,?,?,?)";
        $resultado = $this->db->query($stored_procedure, $data);
        return $resultado;
    }

    public function deleteUsuario($data) {
        $stored_procedure = "CALL delete_usuario_sp(?)";
        $resultado = $this->db->query($stored_procedure, $data);
        return $resultado;
    }

    public function login($user, $password)
    {
  
          $this->db->where("usuario", $user);
          $this->db->where("password", $password);
  
          $results = $this->db->get("usuarios");
          if ($results->num_rows() > 0) {
              return $results->row();
          }
          else{
              return false;
          }
      }

}