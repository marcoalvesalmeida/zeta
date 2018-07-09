<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function index(){
		$this->load->view('dashboard.php');
	}

	public function perfil($id){
		$this->load->model('Cliente_Model',"cliente");
		if($id){
			$resultado = $this->cliente->carregaDados($id);
				foreach ($resultado as $cliente) {
				$dados['id'] = $cliente->id;
				$dados['nome'] = $cliente->nome;
				$dados['sobrenome'] =$cliente->sobrenome;
				$dados['email']=$cliente->email;
				$dados['telefone']=$cliente->telefone;
				$dados['whatsapp']=$cliente->whatsapp;
				$dados['cep']=$cliente->cep;
				$dados['cidade']=$cliente->cidade;
				$dados['rua']=$cliente->rua;
				$dados['bairro']=$cliente->bairro;
				$dados['numero']=$cliente->numero;
				$dados['complemento']=$cliente->complemento;
				break;		
			}
			$this->load->view('cliente/perfil.php',$dados);
		}
	}

	public function login(){
		$this->load->view('login/login.php');
	}

	public function entrar(){
		$dados['email'] = $this->input->post('email');
		$dados['senha'] = $this->input->post('senha');
		$this->load->model('Login_Model',"login");

		$resultado = $this->login->entrar($dados);
		foreach ($resultado as $cliente) {
			$id = $cliente->id;
			break;		
		}
		if($id){
			$this->perfil($id);	
		}else{
			echo "ERRO:usuario não encontrado!";
		}	
	}	

	public function cadastrar(){
		$dados['nome'] = $this->input->post('nome');
		$dados['sobrenome'] = $this->input->post('sobrenome');
		$dados['email'] = $this->input->post('email');
		$data['senha1'] = $this->input->post('senha1');
		$data['senha2'] = $this->input->post('senha2');
		$dados['telefone'] = $this->input->post('telefone');
		$dados['whatsapp'] = $this->input->post('whatsapp');
		$dados['cep'] = $this->input->post('cep');
		$dados['cidade'] = $this->input->post('cidade');
		$dados['rua'] = $this->input->post('rua');
		$dados['bairro'] = $this->input->post('bairro');
		$dados['numero'] = $this->input->post('numero');
		$dados['complemento'] = $this->input->post('complemento');

		if($data['senha1']==$data['senha2']){
			$dados['senha']=$data['senha2'];
		}else{
			echo "erro senha";
		}

		$this->load->model('Login_Model',"login");
		if($this->login->cadastrar($dados)){
			$resultado = $this->login->entrar($dados);
			foreach ($resultado as $cliente) {
				$id = $cliente->id;
				break;		
			}
			$this->perfil($id);
		}else
			echo "Erro!";
	}
}