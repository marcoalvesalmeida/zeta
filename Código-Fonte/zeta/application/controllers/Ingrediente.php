<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ingrediente extends CI_Controller {

	public function salvar(){
		$this->load->model('Ingrediente_Model','ingredientes');
		$dados['nome'] = $this->input->post('tituloingrediente');
		$dados['qtde'] = $this->input->post('qtdeingrediente');
		$dados['valor'] = $this->input->post('valoringrediente');
		$bool = 0;
		if($this->input->post('adicional_ck')!=NULL){
			$bool = 1;
		}
		$dados['adicional'] = $bool;
		if($this->ingredientes->salvar($dados)){
			echo "Salvo!";
		}else{
			echo "Erro!";
		}
	}

	public function remover(){
		$this->load->model('Ingrediente_Model','ingredientes');
		$id = $this->input->post('idremover');
		if($this->ingredientes->remover($id)){
			echo "Removido!";
		}else{
			echo "Erro!";
		}
	}

	public function editar(){
		$this->load->model('Ingrediente_Model','ingredientes');
		$dados['id'] = $this->input->post('id');
		$dados['nome'] = $this->input->post('tituloingrediente');
		$dados['valor'] = $this->input->post('valoringrediente');
		$dados['qtde'] = $this->input->post('qtdeingrediente');
		if($this->ingredientes->editar($dados)){
			echo "Salvo!";
		}else{
			echo 'Erro!';
		}
 	}

	 public function buscarTodas() {
        $this->load->model('Ingrediente_Model','ingredientes');
        $cont=0;
        $resposta = $this->ingredientes->buscarTodas();
        if(!is_array($resposta))
        	return 0;
        foreach ($resposta as $linha) {
            $cont++;
            $id= "'".$linha->id. "'";
            $titulo = "'" . $linha->nome . "'";
            $qtde = "'" . $linha->qtde . "'";
            $valor = "'" . $linha->valor . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->nome . '</td>
			<td>' . $linha->qtde . '</td>
			<td>' . $linha->valor . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="removerIngredienteLista('.$id.')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterarIngrediente('.$id.','.$titulo.','.$valor.','.$qtde.')">Editar</button></td>
			</tr>';
        }
    }

    public function pesquisar(){
    	$this->load->model('Ingrediente_Model','ingredientes');
    	$dados['like'] = $this->input->post('like');
    	$cont=0;
    	$resposta = $this->ingredientes->pesquisar($dados); 
    	if(!is_array($resposta)){
        	echo 0;
        	return 0;
    	}
        foreach ($resposta as $linha) {
            $cont++;
            $id= "'".$linha->id. "'";
            $titulo = "'" . $linha->nome . "'";
            $qtde = "'" . $linha->qtde . "'";
            $valor = "'" . $linha->valor . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->nome . '</td>
			<td>' . $linha->qtde . '</td>
			<td>' . $linha->valor . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="removerIngredienteLista('.$id.')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterarIngrediente('.$id.','.$titulo.','.$valor.','.$qtde.')">Editar</button></td>
			</tr>';
        }
    }
    public function listarAdicionais(){
    	$this->load->model('Cardapio_Model', 'cardapio');
        foreach ($this->cardapio->listarIngredientes() as $linha) {
            if($linha->adicional==1){
            	echo '<option value="' . $linha->id . '">' . $linha->nome . '</option>';
            }
        }
	
    }
}


