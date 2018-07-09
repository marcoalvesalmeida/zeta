<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {
	public function entrar($dados=NULL){
		if($dados!=NULL){
            $email=$dados['email'];
            $senha=$dados['senha'];
            $query = $this->db->query("SELECT * FROM clientes  WHERE email='$email' AND senha='$senha'");
                
            return $query->result();
           
        }else{
            return 0;
        }
	}

    public function cadastrar($dados=NULL){
        if($dados!=NULL){
            $this->db->insert('clientes',$dados);
            return 1;
        }else{
            return 0;
        }
    }

    public function verificaEmail($dados=NULL){
        if($dados!=NULL){
            $email=$dados['email'];
            $query = $this->db->query("SELECT * FROM clientes  WHERE email='$email'");
                
            return $query->result();
           
        }else{
            return 0;
        }
    }

    

}