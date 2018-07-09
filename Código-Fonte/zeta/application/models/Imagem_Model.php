<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagem_Model extends CI_Model {
	
	public function salvar($dados=NULL){
		if($dados!=NULL){
            $this->db->insert('img',$dados);
            return 1;
        }else{
            return 0;
        }
	}

	public function removerFK($id=NULL){
        if($id!=NULL){
            $this->db->where('promocao',$id);
            $this->db->delete('img');
            return 0;
        }else{
            return 0;
        }
    }
}
