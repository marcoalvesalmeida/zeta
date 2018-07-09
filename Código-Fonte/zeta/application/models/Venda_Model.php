<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda_Model extends CI_Model {

	public function salvar($dados=NULL){
        if($dados!=NULL){
            $this->db->insert('vendas', $dados);
            return 1;
        }else{
            return 0;
        }
    }

    public function salvar2($dados=NULL){
        if($dados!=NULL){
            $this->db->insert('pedidos_not_cad', $dados);
             $query = $this->db->query('SELECT max(id) as "id" FROM pedidos_not_cad;');
            return $query->result();        
        }else{
            return 0;
        }
    }

    public function atualizar($dados=NULL) {
        if($dados!=NULL){
            $this->db->where("codigo",$dados['codigo']);
            $this->db->update('vendas',$dados);
            return 1;
        }else{
            return 0;
        }
    }

   public function atualizar2($dados=NULL) {
        if($dados!=NULL){
            $this->db->where("id",$dados['id']);
            $this->db->update('pedidos_not_cad',$dados);
            return 1;
        }else{
            return 0;
        }
    }

     public function buscarvenda($dados) {
        $data=$dados['data_venda'];
        $sql = 'SELECT * FROM pedidos_not_cad WHERE data_venda = ? ;';
        $query = $this->db->query($sql, array($data));
        return $query->result();        
    }

    public function pesquisarCardapio($dados=NULL){
        if($dados['id'] !=NULL){
            $id = $dados['id'];
            $query = $this->db->query("select  i.id as 'id', i.nome as 'nome', i.valor as 'valor' from cardapio_ingredientes as ci join ingredientes as i on(i.id = ci.ingrediente) where ci.cardapio='$id' and i.adicional=1");
            return $query->result();
        }
    }

    public function salvarItemTemporario($dados=NULL){
         if($dados!=NULL){
            $this->db->insert('historico_lanches',$dados);
         }
         $lanche = $dados['lanche'];
         $query = $this->db->query("SELECT ingrediente, i.qtde as qtde FROM cardapio_ingredientes JOIN ingredientes as i ON (i.id=ingrediente) WHERE cardapio='$lanche'");
         foreach ($query->result() as $linha) {
            $qtde = $linha->qtde - 1; 
            $this->db->where('id', $linha->ingrediente);
            $this->db->set('qtde', $qtde);
            $this->db->update('ingredientes');
         }
    }

    public function salvarItemPedido($dados=NULL){
         if($dados!=NULL){
            $this->db->insert('itens_pedido',$dados);
         }
    }

    public function cancelar($codigo){
        $this->db->where('venda', $codigo);
        $this->db->delete('historico_lanches');
    }

}
