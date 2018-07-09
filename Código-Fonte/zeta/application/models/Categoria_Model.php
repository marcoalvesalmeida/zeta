<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Model extends CI_Model {
    
    
    public function salvar($dados=NULL) {
        if($dados!=NULL){
            $this->db->insert('categorias',$dados);
            return 1;
        }
        return 0;
    }
    
    public function buscarTodas(){
        $query = $this->db->get('categorias');
        return $query->result();
    }
    
    public function remover($id=NULL) {
        if($id!=NULL){
            $this->db->where('id',$id);
            $this->db->delete('categorias');
            return 1;
        }else{
            return 0;
        }
    }
    
    public function editar($dados=NULL) {
        if($dados!=NULL){
            $this->db->where("id",$dados['id']);
            $this->db->update('categorias',$dados);
            return 1;
        }else{
            return 0;
        }
    }

    public function pesquisar($dados=NULL){
        if($dados['like'] !=NULL){
            $like = $dados['like'];
            $query = $this->db->query('SELECT * FROM categorias WHERE nome LIKE "'.$like.'%"');
            return $query->result();
        }
    }
    
}
	