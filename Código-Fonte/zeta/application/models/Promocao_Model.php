<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocao_Model extends CI_Model {
	
    public function buscarTodos(){
        $query = $this->db->get('promocoes');
        return $query->result();
    }

    public function salvar($dados=NULL){
		if($dados!=NULL){
            $this->db->insert('promocoes',$dados);
            return 1;
        }else{
            return 0;
        }
	}

    public function editar($dados=NULL){
        if($dados!=NULL){
            $this->db->where('id', $dados['id']);
            return $this->db->update('promocoes', $dados);
        }
    }

	public function abrirTitulo($titulo=NULL){
		if($titulo!=NULL){
        	$query = $this->db->query("SELECT * FROM promocoes WHERE titulo='$titulo'");
        	return $query->result();
        }else{
        	return 0;
        }
    }

    public function remover($id=NULL){
        if($id!=NULL){
            $this->db->where('id',$id);
            $this->db->delete('promocoes');
            return 0;
        }else{
            return 0;
        }
    }
    
     public function carregar(){
        $query = $this->db->query("SELECT p.*, i.* FROM promocoes as p JOIN img as i on(i.promocao=p.id);");
        return $query->result();
    }

}
