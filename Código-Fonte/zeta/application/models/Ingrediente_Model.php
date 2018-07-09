<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ingrediente_Model extends CI_Model {

    public function salvar($dados = NULL){
    	if($dados != NULL){
    		$this->db->insert('ingredientes',$dados);
    		return 1;
    	}
    	return 0;
    }

    public function abrir($id = NULL) {
        if ($id != NULL) {
            $this->db->where('id', $id);
            $query=$this->db->get('ingredientes');
            return $query->result();
        }
        return 0;
    }

    public function editar($dados=NULL){
    	if($dados!=NULL){
    		$this->db->where('id',$dados['id']);
    		$this->db->update('ingredientes',$dados);
    		return 1;
    	}
    	return 0;
    }

    public function buscarTodas(){
    	$query = $this->db->get('ingredientes');
    	return $query->result();
    }

    public function remover($id=NULL){
    	if($id!=NULL){
    		$this->db->where('id',$id);
    		$this->db->delete('ingredientes');
    		return 1;
    	}else{
    		return 0;
    	}
    }

    public function pesquisar($dados=NULL){
        if($dados['like'] !=NULL){
            $like = $dados['like'];
            $query = $this->db->query('SELECT * FROM ingredientes WHERE nome LIKE "'.$like.'%"');
            return $query->result();
        }
    }

}
