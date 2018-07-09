<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function logar($dados){
		  $email = $dados['email'];
		  $senha = $dados['senha'];
		  $this->db->where('email',$email);
		  $this->db->where('senha',$senha);
		  $query = $this->db->get('usuarios');
		  return $query;
	}

}