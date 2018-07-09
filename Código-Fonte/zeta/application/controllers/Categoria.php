<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
    
    public function salvar() {
        $dados['nome'] = $this->input->post('titulocategoria');
        $this->load->model('Categoria_Model', 'categorias');
        if($this->categorias->salvar($dados)){
            echo "Salvo!";
        }else{
            echo "Erro";
        }
    }
    
    public function buscarTodas() {
        $this->load->model('Categoria_Model','categorias');
        $cont=0;
        foreach ($this->categorias->buscarTodas() as $linha) {
            $cont++;
            $id= "'".$linha->id. "'";
            $titulo = "'" . $linha->nome . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->nome . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="removerCategoria(' . $id . ')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterarCategoria(' . $id . ',' . $titulo .')">Editar</button></td>
			</tr>';
        }
    }
    
    public function remover() {
        $this->load->model('Categoria_Model','categorias');
        $id = $this->input->post('idremover');
        if($this->categorias->remover($id)){
            echo "Removido!";
        }else{
            echo "Erro";
        }
        
    }
    
    public function editar() {
        $this->load->model("Categoria_Model",'categorias');
        $dados['nome'] = $this->input->post("titulocategoria");
        $dados['id'] = $this->input->post("id");
        if($this->categorias->editar($dados)){
            echo 'Salvo!';
        }else{
            echo 'Erro!';
        }
    }

    public function pesquisar(){
        $this->load->model('Categoria_Model','categoria');
        $dados['like'] = $this->input->post('like');
        $cont=0;
        $resposta = $this->categoria->pesquisar($dados); 
        if(!is_array($resposta)){
            echo 0;
            return 0;
        }

         foreach ($resposta as $linha) {
            $cont++;
            $id= "'".$linha->id. "'";
            $titulo = "'" . $linha->nome . "'";
            echo
            '<tr>
            <td>' . $cont . '</td>
            <td>' . $linha->nome . '</td>
            <td><button class="btn btn-danger btn-fill" onclick="removerCategoria(' . $id . ')">Remover</button></td>
            <td><button class="btn btn-info btn-fill" onclick="alterarCategoria(' . $id . ',' . $titulo .')">Editar</button></td>
            </tr>';
        }

    }    
    
}
