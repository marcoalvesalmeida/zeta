<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicao extends CI_Controller {

	public function principal(){
		
		$arquivo = $_FILES['arquivo1'][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivo1'][ 'name' ];
		$endereco1 = $this->salvarImagem($arquivo, $nome, 'arquivo1');

		$arquivo = $_FILES['arquivo2'][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivo2'][ 'name' ];
		$endereco2 = $this->salvarImagem($arquivo, $nome, 'arquivo2');

		$arquivo = $_FILES['arquivo3'][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivo3'][ 'name' ];
		$endereco3 = $this->salvarImagem($arquivo, $nome, 'arquivo3');
		
		$dados = $this->input->post('tituloprincipal')."|".$this->input->post('textoprincipal');

		if($endereco1!="" && $endereco1!=NULL)
			$dados.="|".$endereco1;
		if($endereco2!="" && $endereco2!=NULL)
			$dados.="|".$endereco2;
		if($endereco3!="" && $endereco3!=NULL)
			$dados.="|".$endereco3;

		//Abre ou cria o arquivo sobre.txt -- O parâmetro "a" significa que o arquivo será aberto para ser escrito
		$texto = fopen("arquivos/principal.txt", "w+");

		//Escreve o texto necessário no arquivo
		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}	

	public function sobre(){

		$arquivo = $_FILES['arquivosobre'][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivosobre'][ 'name' ];
		$endereco = $this->salvarImagem($arquivo, $nome, 'arquivosobre');

		$dados = $this->input->post('titulosobre')."|".$this->input->post('textosobre');

		if($endereco!="" && $endereco!=NULL)
			$dados.="|".$endereco;
	
		//Abre ou cria o arquivo sobre.txt -- O parâmetro "a" significa que o arquivo será aberto para ser escrito
		$texto = fopen("arquivos/sobre.txt", "w+");

		//Escreve o texto necessário no arquivo
		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}

	public function promocoes(){
		$dados = $this->input->post('titulopromocoes')."|".$this->input->post('textopromocoes');

		$texto = fopen("arquivos/promocoes.txt", "w+");

		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}

	public function cardapio(){
		$dados = $this->input->post('titulocardapio')."|".$this->input->post('textocardapio');

		$texto = fopen("arquivos/cardapio.txt", "w+");

		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}

	public function pedidos(){
		
		$arquivo = $_FILES['arquivopedidos'][ 'tmp_name' ];
		$nome = $_FILES[ 'arquivopedidos'][ 'name' ];
		$endereco = $this->salvarImagem($arquivo, $nome, 'arquivopedidos');

		$dados = $this->input->post('titulopedidos')."|".$this->input->post('textopedidos');

		if($endereco!="" && $endereco!=NULL)
			$dados.="|".$endereco;
	
		$texto = fopen("arquivos/pedidos.txt", "w+");

		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}

	public function contato(){
		$dados = $this->input->post('titulocontato')."|".$this->input->post('textocontato');

		$texto = fopen("arquivos/contato.txt", "w+");

		$escreve = fwrite($texto, $dados);

		fclose($texto);
	}

	public function salvarImagem($arquivo, $nome, $imagem){
		$imagem = $imagem;
		// verifica se foi enviado um arquivo
		$extensao = pathinfo ($nome, PATHINFO_EXTENSION);

        // Converte a extensão para minúsculo
		$extensao = strtolower ($extensao);

        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
		if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
			$novoNome = uniqid ( time () ) . '.' . $extensao;

            // Concatena a pasta com o nome
			$destino = './imagens/capa/';
			$configuracao = array('upload_path'=> $destino,
				'allowed_types' =>  array('jpg','png','jpeg','gif'),
				'file_name' => $novoNome,
				'max_size'  => '2000'
				);
			$this->load->library('upload');
			$this->upload->initialize($configuracao);

            // tenta mover o arquivo para o destino
			if ($this->upload->do_upload($imagem)) {
				return $destino.$novoNome;
			}
			else
				echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
		}
		else
			echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
	}

}
