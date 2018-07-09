<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cardapio extends CI_Controller {

    public function salvar() {
        $dados['titulo'] = $this->input->post('titulo');
        $dados['valor'] = $this->input->post('valor');
        $dados['categoria'] = $this->input->post('categoria');
        $this->load->model('Cardapio_Model', 'cardapio');
        if ($this->cardapio->salvar($dados)) {
            echo "Salvo";
            echo "Descrição:". $this->input->post('descricao');
            $ingredientes = explode("|", $this->input->post('descricao'));
            for($i=0; $i<count($ingredientes); $i++){
                echo "Ingrediente: ".$ingredientes[$i]."</br>";
            }
            if($this->cardapio->salvar_ingred_cardapio($ingredientes)){
                echo "Salvo 2!";
            }else{
                echo "Erro 2!";
            }
        } else {
            echo "Erro!";
        }
    }
    
    public function abrirValor() {
       $id=$this->input->post("id");
       $this->load->model('Ingrediente_Model', 'ingrediente'); 
       foreach ($this->ingrediente->abrir($id) as $linha) {
           echo $linha->valor;
           break;
       }
    }
    
    public function remover() {
        $id = $this->input->post('idremover');
        $this->load->model('Cardapio_Model', 'cardapio');
        if($this->cardapio->remover($id)){
            echo "Removido!";
        }else{
            echo 'Erro';
        }
    }
    
    public function editar() {
        $dados['id'] = $this->input->post('id');
        $dados['titulo'] = $this->input->post('titulo');
        $dados['valor'] = $this->input->post('valor');
        $dados['descricao'] = $this->input->post('descricao');
       // $dados['categoria'] = $this->input->post('categoria');
        $this->load->model('Cardapio_Model', "cardapio");
        if ($this->cardapio->editar($dados)) {
            echo "Salvo!";
        } else {
            echo "Erro!";
        }
    }
    
    public function listarIngredientes() {
        $this->load->model('Cardapio_Model', 'cardapio');
        foreach ($this->cardapio->listarIngredientes() as $linha) {
            echo '<option value="' . $linha->id . '">' . $linha->nome . '</option>';
        }
    }
    
    public function buscarIngredientes() {
        $id = $this->input->post('ideditar');
        $this->load->model('Cardapio_Model', 'cardapio');
        foreach ($this->cardapio->buscarIngredientes($id) as $linha) {
            echo "<button class='btn btn-default' type='button' id='".$linha->id."' onclick='removeIngrediente(".$linha->id.")'>".$linha->nome."</button>";
        }
    }

    public function listarCategorias() {
        $this->load->model('Cardapio_Model', 'cardapio');
        foreach ($this->cardapio->listarCategorias() as $linha) {
            echo '<option value="' . $linha->id . '">' . $linha->nome . '</option>';
        }
    }
    
    public function buscarTodos() {
        $this->load->model('Cardapio_Model', 'cardapio');    
        $cont=0; 
        foreach ($this->cardapio->buscarTodos() as $linha) {
            $cont++;
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            $categoria = "'" . $linha->categoria . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->titulo . '</td>
			<td>' . $linha->valor . '</td>
                        <td>' . $linha->categoria . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="removerItemCardapio(' . $id . ')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterarItemCardapio(' . $id . ',' . $titulo . ',' . $valor .','.$categoria.')">Editar</button></td>
			</tr>';
        }
    }
    
    public function buscarTodos3() {
        $this->load->model('Cardapio_Model', 'cardapio');    
        $cont=0; 
        foreach ($this->cardapio->buscarTodos() as $linha) {
            $cont++;
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            //$descricao = "'" . $linha->descricao . "'";
            $categoria = "'" . $linha->categoria . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->titulo . '</td>
			<td>' . $linha->valor . '</td>
			<!--<td>' . $linha->descricao . '</td>-->
                        <td>' . $linha->categoria . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="removerItemCardapio(' . $id . ')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterarItemCardapio(' . $id . ',' . $titulo . ',' . $valor . ',' . $descricao .','.$categoria.')">Editar</button></td>
			</tr>';
        }
    }
    
    
    public function buscarTodosVenda() {
        $this->load->model('Cardapio_Model', 'cardapio');    
        $cont=0; 
        foreach ($this->cardapio->buscarTodos() as $linha) {
            $cont++;
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            $descricao = "'" . $linha->descricao . "'";
            echo
            '<tr>
			<td>' . $linha->titulo . '</td>
			<td>' . $linha->valor . '</td>
			<td>' . $linha->descricao . '</td>
			<td><button class="btn btn-info btn-fill" onclick="addItemVenda(' . $id . ',' . $titulo . ',' . $valor . ',' . $descricao .')">Vender</button></td>
			</tr>';
        }
    }
    public function abrirDescricao() {
        $id = $this->input->post('id');
        $this->load->model('Cardapio_Model', 'cardapio'); 
        foreach ($this->cardapio->abrir($id) as $linha) {
            echo $linha->descricao;
            break;
        }
    }

    public function pesquisar(){
        $this->load->model('Cardapio_Model','cardapio');
        $dados['like'] = $this->input->post('like');
        $cont=0;
        $resposta = $this->cardapio->pesquisar($dados); 
        if(!is_array($resposta)){
            echo 0;
            return 0;
        }
         foreach ($resposta as $linha) {
            $cont++;
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            $categoria = "'" . $linha->categoria . "'";
            echo
            '<tr>
            <td>' . $cont . '</td>
            <td>' . $linha->titulo . '</td>
            <td>' . $linha->valor . '</td>
                        <td>' . $linha->categoria . '</td>
            <td><button class="btn btn-danger btn-fill" onclick="removerItemCardapio(' . $id . ')">Remover</button></td>
            <td><button class="btn btn-info btn-fill" onclick="alterarItemCardapio(' . $id . ',' . $titulo . ',' . $valor .','.$categoria.')">Editar</button></td>
            </tr>';
        }
    }
}
?>


