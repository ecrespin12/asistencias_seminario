<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioModel extends CI_Model {

	public function CountUsuarios() { 
        $resultado = $this->db->query("SELECT usuarioID FROM asistencia_seminario.usuarios;");
        return $resultado->result();
    }
	public function CountSeminarios() { 
        $resultado = $this->db->query("SELECT seminarioID FROM asistencia_seminario.seminarios;");
        return $resultado->result();
    }
	public function CountInscripciones() { 
        $resultado = $this->db->query("SELECT inscripcionID FROM asistencia_seminario.inscripcion_seminario;");
        return $resultado->result();
    }
	public function CountEstudiantes() { 
        $resultado = $this->db->query("SELECT estudianteID FROM asistencia_seminario.estudiantes;");
        return $resultado->result();
    }

}