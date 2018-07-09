<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Model extends CI_Model {
	public function carregadados($id){
		if($id!=NULL){
            $query = $this->db->query("SELECT * FROM clientes WHERE id='$id'");
                
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

    public function buscarTodos(){
        $query = $this->db->query('SELECT * FROM clientes ORDER BY nome ASC');
        return $query->result();
    }
    
    public function editar($dados=NULL) {
        if($dados!=NULL){
            $this->db->where("id",$dados['id']);
            $this->db->update('clientes',$dados);
            return 1;
        }else{
            return 0;
        }
    }

}