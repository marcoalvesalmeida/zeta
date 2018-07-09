<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio_Model extends CI_Model {
    
    public function salvar($dados=NULL) {
        if($dados!=NULL){
            $this->db->insert('cardapio', $dados);
            return 1;
        }else{
            return 0;
        }
    }
    
    public function salvarPedido($dados=NULL) {
        if($dados!=NULL){
            $this->db->insert('pedidos_not_cad', $dados);
            return 1;
        }else{
            return 0;
        }
    }
    
     public function salvarItemPedido($dados=NULL) {
        if($dados!=NULL){
            $this->db->insert('itens_pedido', $dados);
            return 1;
        }else{
            return 0;
        }
    }
    
    public function remover($id=NULL) {
        if ($id != NULL) {
            $this->db->where('id', $id);
            $this->db->delete('cardapio');
            return 1;
        } else {
            return 0;
        }
    }
    
    public function editar($dados=NULL){
        if($dados!=NULL){
            $this->db->where('id', $dados['id']);
            return $this->db->update('cardapio', $dados);
        }
    }
    
    public function finalizarPedido($dados, $pedido){
       $this->db->where('id', $pedido);
       return $this->db->update('pedidos_not_cad', $dados);
    }
    
    public function esquecerPedido($pedido){
       $dados['status'] = 2;
       $this->db->where('id', $pedido);
       return $this->db->update('pedidos_not_cad', $dados);
    }
    
    public function listarCategorias() {
        $query = $this->db->query("SELECT * FROM categorias ORDER BY nome ASC");
        return $query->result();
    }
    public function listarIngredientes() {
        $query = $this->db->query("SELECT * FROM ingredientes ORDER BY nome ASC");
        return $query->result();
    }

     public function mostrarTodos() {
        $query = $this->db->query('SELECT cd.id as "id", cd.titulo as "titulo", cd.valor as "valor", ca.nome as "categoria" FROM cardapio as cd JOIN categorias as ca ON (cd.categoria=ca.id) ORDER BY categoria ;');
        return $query->result();        
    }
    
    public function buscarTodos() {
        $query = $this->db->query('SELECT cd.id as "id", cd.titulo as "titulo", cd.valor as "valor", ca.nome as "categoria" FROM cardapio as cd JOIN categorias as ca ON (cd.categoria=ca.id) ORDER BY cd.titulo ;');
        return $query->result();        
    }
    
     public function buscarTodosCategorias($categoria) {
        $query = $this->db->query('SELECT cd.id as "id", cd.titulo as "titulo", cd.valor as "valor", ca.nome as "categoria" FROM cardapio as cd JOIN categorias as ca ON (cd.categoria=ca.id) WHERE categoria='.$categoria.' ORDER BY cd.titulo ;');
        return $query->result();        
    }
     public function buscarTodosItens($pedido) {
        $query = $this->db->query('SELECT c.valor as  "valor", i.qtde as qtde FROM itens_pedido as i JOIN cardapio as c ON(c.id=i.produto) WHERE i.pedido='.$pedido.';');
        return $query->result();        
    }
    
    
    public function abrir($id=NULL) {
         if($id!=NULL){
            $this->db->where('id', $id);
            return $this->db->get('cardapio');
        }
    }
    
    public function salvar_ingred_cardapio($dados=NULL) {
        if($dados!=NULL){
            $query = $this->db->query("SELECT MAX(id) as 'id' FROM cardapio");
            $resultado = $query->result();
            foreach ($resultado as $linha) {
                $cardapio = $linha->id;
                break;
            }
            $inserir['cardapio'] = $cardapio;
            $i=0;
            while($i<count($dados)){
                $inserir['ingrediente'] = $dados[$i];
                $this->db->insert('cardapio_ingredientes', $inserir);            
                $i++;                
            }
            return 1;
        }else{
            return 0;
        }
    }
    
    public function buscarIngredientes($id) {
         if ($id != NULL) {
            $query=$this->db->query('SELECT i.id as id, i.nome as nome FROM cardapio_ingredientes as ci JOIN ingredientes as i ON (i.id=ci.ingrediente) WHERE ci.cardapio='.$id);
            return $query->result();
        }
        return 0;
    }

    public function pesquisar($dados=NULL){
        if($dados['like'] !=NULL){
            $like = $dados['like'];
            $query = $this->db->query('SELECT * FROM cardapio WHERE titulo LIKE "'.$like.'%"');
            return $query->result();
        }
    }
    
    public function getPedido($nome){
        if($nome != NULL){
            $query = $this->db->query('SELECT MAX(id) as id FROM pedidos_not_cad WHERE nome ="'.$nome.'"');
            return $query->result();
        }
    }

     public function mostrarIngredientes() {
        
            $query=$this->db->query('SELECT i.id as id, i.nome as nome , c.id as cardapio FROM cardapio_ingredientes as ci JOIN ingredientes as i ON (i.id=ci.ingrediente) JOIN cardapio as c ON (ci.cardapio=c.id) ');
            return $query->result();
    }
    
    
    
    
}
	
