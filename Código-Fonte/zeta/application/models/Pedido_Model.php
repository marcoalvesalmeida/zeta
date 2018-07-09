<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_Model extends CI_Model {

	public function atualizaPedidos()
	{
		$query = $this->db->query("SELECT c.nome as 'cliente_nome', c.rua as 'rua', c.numero as 'numero', c.bairro as 'bairro', c.cidade as 'cidade', v.* FROM vendas as v JOIN clientes as c ON (c.id=v.cliente) WHERE finalizada=0 ORDER BY v.data_venda desc");
		return $query->result();
	}

	public function imprimir($id)
	{
		$dados['id'] = $id;
		$query = $this->db->query("SELECT c.nome as 'cliente_nome', c.rua as 'rua', c.numero as 'numero', c.bairro as 'bairro', c.cidade as 'cidade', v.* FROM vendas as v JOIN clientes as c ON (c.id=v.cliente) WHERE v.id=".$dados['id']." ORDER BY v.data_venda desc");
		return $query->result();
	}

	public function atualizaPedidosNotCad()
	{
		$query = $this->db->query("SELECT * FROM pedidos_not_cad WHERE status=1 ORDER BY data_venda desc");
		return $query->result();
	}

	public function atualizaPedidosNotCadFinalizados()
	{
		$query = $this->db->query("SELECT * FROM pedidos_not_cad WHERE status=4 ORDER BY data_venda desc");
		return $query->result();
	}


	public function atualizaPedidosFinalizados()
	{
		$query = $this->db->query("SELECT c.nome as 'cliente_nome', c.rua as 'rua', c.numero as 'numero', c.bairro as 'bairro', c.cidade as 'cidade', v.* FROM vendas as v JOIN clientes as c ON (c.id=v.cliente) WHERE finalizada=1 ORDER BY v.data_venda desc");
		return $query->result();
	}

	public function atualizaPedidosLanches($dados)
	{
		$venda = $dados['venda'];
		$query = $this->db->query("SELECT hl.*, c.titulo as 'titulo' FROM historico_lanches as hl join cardapio as c ON (hl.lanche=c.id) WHERE venda='$venda'");
		return $query->result();
	}

	public function atualizaPedidosLanchesNotCad($dados)
	{
		$venda = $dados['pedido'];
		$query = $this->db->query("SELECT i.qtde as 'qtde', i.observacoes as 'observacoes', c.titulo as 'produto' FROM itens_pedido as i join cardapio as c ON (i.produto=c.id) WHERE pedido='$venda'");
		return $query->result();
	}

	public function finalizar($dados){
		$venda = $dados['venda'];
		$this->db->where('venda', $venda);
    	$this->db->update('historico_lanches',array('finalizado' => 1));
    	$this->db->where('codigo', $venda);
    	$this->db->update('vendas',array('finalizada' => 1));
	}

	public function finalizarNotCad($dados){
		$venda = $dados['pedido'];
    	$this->db->where('id', $venda);
    	$this->db->update('pedidos_not_cad',array('status' => 4));
	}

}