<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function api_categorias() {
        $this->load->model('Categoria_Model', 'categoria');
        $resultado = $this->categoria->buscarTodas();
        $response = null;
        $cont=0;
        foreach ($resultado as $promocao) {
            $response .= " | ". ++$cont." - ".$promocao->nome;
        }
        $response2 = array("categorias"=>$response);
        echo json_encode($response2);
    }
    
    
    public function api_tipo_pedido() {
        $this->load->model('Categoria_Model', 'categoria');
        $cat = $_GET['categoria'];
        $resultado = $this->categoria->buscarTodas();
        $categoria = null;
        $cont=0;
        foreach ($resultado as $promocao) {
            if(++$cont==$cat){
				$categoria = $promocao->id;
				break;
			}
        }
        $this->load->model('Cardapio_Model', 'cardapio');
        $resultado = $this->cardapio->buscarTodosCategorias($categoria);
        $response = null;
        $cont=0;
        foreach ($resultado as $promocao) {
            $response .= " | ". ++$cont." - ".$promocao->titulo;
        }
        $response2 = array("produtos"=>$response);
        echo json_encode($response2);
    }
    
    public function api_get_pedido_final() {
		$pedido = $_GET['pedido'];
		$this->load->model('Cardapio_Model', 'cardapio');
        $resultado = $this->cardapio->buscarTodosItens($pedido);
        $valor = 0;
        foreach ($resultado as $promocao) {
            $valor += $promocao->valor * $promocao->qtde;
        }
        echo json_encode(array("valor"=>$valor));
    }
     public function api_finalizar_pedido() {
		$pedido = $_GET['pedido'];
		$dados['data_venda'] = date("Y-m-d H:i:s");
		$this->load->model('Cardapio_Model', 'cardapio');
		$resultado = $this->cardapio->buscarTodosItens($pedido);
        $valor = 0;
        foreach ($resultado as $promocao) {
            $valor += $promocao->valor * $promocao->qtde;
        }
        $dados['valorTotal'] = $valor;
		$dados['status'] = 1;
        $resultado = $this->cardapio->finalizarPedido($dados, $pedido);      
        echo json_encode(array("pedido"=>"ok"));
    }
    
    public function api_esquecer_pedido() {
		$pedido = $_GET['pedido'];
		$this->load->model('Cardapio_Model', 'cardapio');
        $resultado = $this->cardapio->esquecerPedido($pedido);      
        echo json_encode(array("pedido"=>"ok"));
    }
    
    public function api_get() {
		$this->load->model('Categoria_Model', 'categoria');
        $cat = $_GET['categoria'];
        $resultado = $this->categoria->buscarTodas();
        $categoria = null;
        $cont=0;
        foreach ($resultado as $promocao) {
            if(++$cont==$cat){
				$categoria = $promocao->id;
				break;
			}
        }
		$produto = $_GET['produto'];
		$this->load->model('Cardapio_Model', 'cardapio');
        $resultado = $this->cardapio->buscarTodosCategorias($categoria);
        $response = null;
        $cont=0;
        foreach ($resultado as $p) {
			if($produto==++$cont){
				$cont2=0;
				$resp=null;
				foreach ($this->cardapio->buscarIngredientes($produto) as $linha) {
					if($cont2++!=0)				
						$resp .=' - ';
					$resp .= $linha->nome;           
				}
				$response = array("id"=>$p->id,"titulo"=>$p->titulo,"valor"=>$p->valor, "descricao"=>$resp);
				break;				
			}
        }
		echo json_encode(array("detalhes"=>$response));
    }
    
    public function api_insert_pedido(){
		$dados['nome'] = $_GET['nome'];
		$dados['endereco'] = $_GET['endereco'];
		$dados['telefone'] = $_GET['telefone'];
		$dados['pagamento'] = $_GET['pagamento'];
		$dados['entrega'] = $_GET['entrega'];
		$this->load->model('Cardapio_Model', 'cardapio');
        if ($this->cardapio->salvarPedido($dados)) {
			$resultado = $this->cardapio->getPedido($dados['nome']);
			foreach ($resultado as $c) {
				$id = $c->id;
				break;
			}
			echo json_encode(array("id_pedido"=>$id));
		}		
    }
    
    public function api_insert_pedido_item(){
		$this->load->model('Categoria_Model', 'categoria');
        $cat = $_GET['categoria'];
        $resultado = $this->categoria->buscarTodas();
        $categoria = null;
        $cont=0;
        foreach ($resultado as $promocao) {
            if(++$cont==$cat){
				$categoria = $promocao->id;
				break;
			}
        }
		$produto = $_GET['produto'];
		$this->load->model('Cardapio_Model', 'cardapio');
        $resultado = $this->cardapio->buscarTodosCategorias($categoria);
        $id = null;
        $cont=0;
        foreach ($resultado as $p) {
			if($produto==++$cont){
				$id = $p->id;
				break;				
			}
        }
        $dados['produto'] = $id;
		$dados['qtde'] = $_GET['qtde'];
		$dados['observacoes'] = $_GET['observacoes'];
		$dados['pedido'] = $_GET['pedido'];
        if ($this->cardapio->salvarItemPedido($dados)) {
			echo json_encode(array("pedido"=>"ok"));
		}		
    }
    
    public function verificaSessao(){
        $user = $this->session->userdata("usuario");

        if(empty($user)){
            $dados['erro'] ="";
            $this->load->view('Login',$dados);
        }else{
            return 1;
        }
    }

    public function index() {
        if($this->verificaSessao()){
            $dados['admin'] = "active";
            $this->load->view('dashboard.php', $dados);
        }else{
            $dados['erro'] ="";
            $this->load->view('Login',$dados);
        }
    }

    public function table() {
        if($this->verificaSessao()){
            $dados['table'] = "active";
            $this->load->view('table.php', $dados);
        }
    }

    public function edicoes() {
        if($this->verificaSessao()){
            $dados['edicoes'] = "active";
            $this->load->view('edicoes.php', $dados);
        }
    }
    
    public function categorias() {
        if($this->verificaSessao()){
            $dados['categorias'] = "active";
            $this->load->view('categorias.php', $dados);    
        }
    }

    public function promocoes() {
        if($this->verificaSessao()){
            $dados['promocoes'] = "active";
            $this->load->model('Promocao_Model', 'promocoes');
            $dados['lista'] = $this->promocoes->buscarTodos();
            $this->load->view('promocoes.php', $dados);
        }
    }

    public function ingredientes() {
        if($this->verificaSessao()){
            $dados['ingredientes'] = "active";
            $this->load->view('ingredientes.php', $dados);
        }
    }

    public function cardapio() {
        if($this->verificaSessao()){
            $dados['cardapio'] = "active";
            $this->load->view('cardapio.php', $dados);
         }
    }

    public function venda() {
        if($this->verificaSessao()){
            $dados['venda'] = "active";
            $this->load->view('venda.php', $dados);
        }
    }

    public function pedido() {
        if($this->verificaSessao()){
            $dados['pedidos'] = "active";
            $this->load->view('pedidos.php', $dados);
        } 
    }

    public function pedidonotcad() {
        if($this->verificaSessao()){
            $dados['pedidosnotcad'] = "active";
            $this->load->view('pedidosnotcad.php', $dados);
        } 
    }

    public function pedidonotcadfinalizados() {
        if($this->verificaSessao()){
            $dados['pedidosnotcadfinalizados'] = "active";
            $this->load->view('pedidosNotCadFinalizados.php', $dados);
        } 
    }

    public function finalizados() {
        if($this->verificaSessao()){
            $dados['pedidosFinalizado'] = "active";
            $this->load->view('pedidosFinalizados.php', $dados);
        } 
    }

    public function logar(){
        
        $dados['email'] = $this->input->post("email");
        $dados['senha'] = $this->input->post("senha");

        $this->load->model('Admin_Model','usuarios');
        $resultado = $this->usuarios->logar($dados);
        if ($resultado->num_rows()==1) {
            $usuario = $resultado->row();
            $this->session->set_userdata("usuario",$usuario->email);
            echo 1;
        } else {
            echo 0;
        }
    }

    public function sair(){
        $this->session->set_userdata("usuario","");
        redirect('/Admin');
    }


}
