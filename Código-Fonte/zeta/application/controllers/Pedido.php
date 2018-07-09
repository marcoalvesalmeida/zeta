<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

	public function atualizaPedidosNotCad(){
		$this->load->model('Pedido_Model','pedidos');
		$resultado = $this->pedidos->atualizaPedidosNotCad();
		foreach ($resultado as $linha) {
			$nome = "'".$linha->nome."'";
			$entrega = "'".$linha->entrega."'";
			$pagamento = "'".$linha->pagamento."'";
			$endereco = "'".$linha->endereco."'";
			$data_venda= "'".date( "d/m/Y h:m:s", strtotime($linha->data_venda))."'";
			echo '<tr>
            <td>' .$linha->nome. '</td>
            <td>' .$linha->id. '</td>
            <td>' .$linha->valorTotal.'</td>
            <td>' .date( "d/m/Y h:m:s", strtotime($linha->data_venda)). '</td>
            <td><button class="btn btn-success btn-fill" onclick="verPedidoNotCad('.$linha->id.','.$linha->valorTotal.','.$data_venda.','.$nome.','.$entrega.','.$pagamento.','.$endereco.')">Ver</button></td>
            </tr>';
		}
	}

	public function atualizaPedidosNotCadFinalizados(){
		$this->load->model('Pedido_Model','pedidos');
		$resultado = $this->pedidos->atualizaPedidosNotCadFinalizados();
		foreach ($resultado as $linha) {
			$nome = "'".$linha->nome."'";
			$entrega = "'".$linha->entrega."'";
			$pagamento = "'".$linha->pagamento."'";
			$endereco = "'".$linha->endereco."'";
			$data_venda= "'".date( "d/m/Y h:m:s", strtotime($linha->data_venda))."'";
			echo '<tr>
            <td>' .$linha->nome. '</td>
            <td>' .$linha->id. '</td>
            <td>' .$linha->valorTotal.'</td>
            <td>' .date( "d/m/Y h:m:s", strtotime($linha->data_venda)). '</td>
            <td><button class="btn btn-success btn-fill" onclick="verPedidoNotCad('.$linha->id.','.$linha->valorTotal.','.$data_venda.','.$nome.','.$entrega.','.$pagamento.','.$endereco.')">Ver</button></td>
            </tr>';
		}
	}


	public function atualizaPedidos(){
		$this->load->model('Pedido_Model','pedidos');
		$resultado = $this->pedidos->atualizaPedidos();
		foreach ($resultado as $linha) {
			$cliente = "'".$linha->cliente_nome."'";
			$endereco = "'".$linha->rua.", ".$linha->numero.", ".$linha->bairro.", ".$linha->cidade."'";
			$data_venda= "'".date( "d/m/Y h:m:s", strtotime($linha->data_venda))."'";
			echo '<tr>
            <td>' .$linha->cliente_nome. '</td>
            <td>' .$linha->codigo. '</td>
            <td>' .$linha->valorTotal.'</td>
            <td>' .date( "d/m/Y h:m:s", strtotime($linha->data_venda)). '</td>
            <td><button class="btn btn-success btn-fill" onclick="verPedido('.$linha->codigo.','.$linha->valorTotal.','.$cliente.', "Dinheiro", "Motoboy",'.$endereco.')">Ver</button></td>
            </tr>';
		}
	}
	public function atualizaPedidosFinalizados(){
		$this->load->model('Pedido_Model','pedidos');
		$resultado = $this->pedidos->atualizaPedidosFinalizados();
		foreach ($resultado as $linha) {
			$cliente = "'".$linha->cliente_nome."'";
			echo '<tr>
            <td>' .$linha->cliente_nome. '</td>
            <td>' .$linha->codigo. '</td>
            <td>' .$linha->valorTotal.'</td>
            <td>' .date( "d/m/Y h:m:s", strtotime($linha->data_venda)). '</td>
            <td><button class="btn btn-success btn-fill" onclick="verPedido('.$linha->codigo.','.$linha->valorTotal.','.$cliente.')">Ver</button></td>
            </tr>';
		}
	}
	public function atualizaPedidosLanches(){
		$this->load->model('Pedido_Model','pedidos');
		$dados['venda'] = $this->input->post('codigo');
		$resultado = $this->pedidos->atualizaPedidosLanches($dados);
		foreach ($resultado as $linha) {
			echo '<tr>
            <td>' .$linha->titulo. '</td>
            <td>' .$linha->adicionais.'</td>
            <td>' .$linha->removidos.'</td>
            </tr>';
		}
	}

	public function atualizaPedidosLanchesNotCad(){
		$this->load->model('Pedido_Model','pedidos');
		$dados['pedido'] = $this->input->post('codigo');
		$resultado = $this->pedidos->atualizaPedidosLanchesNotCad($dados);
		foreach ($resultado as $linha) {
			echo '<tr>
            <td>' .$linha->produto. '</td>
            <td>' .$linha->qtde.'</td>
            <td>' .$linha->observacoes.'</td>
            </tr>';
		}
	}

	public function finalizar(){
		$dados['venda'] = $this->input->post('venda');
		$this->load->model('Pedido_Model', 'pedidos');
		$this->pedidos->finalizar($dados);
	}

	public function finalizarNotCad(){
		$dados['pedido'] = $this->input->post('pedido');
		$this->load->model('Pedido_Model', 'pedidos');
		$this->pedidos->finalizarNotCad($dados);
	}
}