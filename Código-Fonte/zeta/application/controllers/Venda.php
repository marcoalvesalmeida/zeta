<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {

    public function salvar(){
        $dados['codigo'] = $this->input->post('codigo');
        $cli = $this->input->post('cliente');
       // if(isset($cli)){
            //$dados['cliente'] = $this->session->userdata("usuario");
        //}else{
            $dados['cliente'] = $cli;
        //}
        $dados['valorTotal'] = $this->input->post('valorTotal');
        $dados['data_venda'] = date("Y-m-d H:i:s");
        $dados['finalizada'] = 0;
        $this->load->model('Venda_Model', 'vendas');
        if($this->vendas->salvar($dados)){
            echo 'Salvo com sucesso!';
        }else{
            echo 'Erro ao salvar!';
        }
    }

	public function buscarItens() {
		$this->load->model('Cardapio_Model', 'cardapio');
		foreach ($this->cardapio->buscarTodos() as $linha) {
			echo '<option value="' . $linha->id . '">' . $linha->titulo . '</option>';
		}
	}

    public function buscarClientes() {
        $this->load->model('Cliente_Model', 'clientes');
        foreach ($this->clientes->buscarTodos() as $linha) {
            echo '<option value="' . $linha->id . '">' . $linha->nome . '</option>';
        }
    }

	public function pesquisarCardapio(){
        $this->load->model('Cardapio_Model','cardapio');
        $dados['like'] = $this->input->post('like');
        $cont=0;
        $resposta = $this->cardapio->pesquisar($dados); 
        if(!is_array($resposta)){
            echo 0;
            return 0;
        }
         foreach ($resposta as $linha) {
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            $idl = $linha->id.'l';
            echo
            '<tr>
            <td>' . $linha->titulo . '</td>
            <td id='.$idl.'>' . $linha->valor . '</td>
            <td><button class="btn btn-info btn-fill" onclick="addItemVenda(' . $id . ',' . $titulo . ',' . $valor . ')">Vender</button></td>
            </tr>';
        }
    }

    public function CardapioIngrediente(){
        $this->load->model('Venda_Model','vendas');
        $dados['id'] = $this->input->post('id');
		foreach ($this->vendas->pesquisarCardapio($dados) as $linha) {
            $id = "'" . $linha->id . "'"; 
            $nome = "'" . $linha->nome . "'";
            $valor = "'" . $linha->valor ."'";
            echo "<button type='button' class='btn btn-info btn-fill' onclick=removeIngredienteVenda(".$id.") id=".$id.">" .$linha->nome . "</button>&nbsp;&nbsp;";
        }
    }

     public function CardapioIngrediente2(){
        $this->load->model('Venda_Model','vendas');
        $dados['id'] = $this->input->post('id');
        $ids="";
        foreach ($this->vendas->pesquisarCardapio($dados) as $linha) {
            $ids .= $linha->id."|";
        }
        echo $ids;
    }

    public function salvarItemTemporario(){
        $dados['lanche'] = $this->input->post('idlanche');
        $dados['adicionais'] = $this->input->post('adicionais');
        $dados['removidos'] = $this->input->post('ingredientes');
        $dados['venda']= $this->input->post('venda');
        $dados['finalizado'] = 2;
        $this->load->model('Venda_Model','vendas');
        $this->vendas->salvarItemTemporario($dados);
    }	

    public function cancelar(){
        $this->load->model('Venda_Model', 'vendas');
        $codigo = $this->input->post('venda');
        $this->vendas->cancelar($codigo);
    }
}
