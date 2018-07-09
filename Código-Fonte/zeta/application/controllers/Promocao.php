<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Promocao extends CI_Controller {
    
    public function index() {
        $this->load->model('Promocao_Model', 'promocoes');
        $dados['lista'] = $this->promocoes->buscarTodos();
        $this->load->view('promocoes.php', $dados);
    }

    public function salvar() {
        $dados['titulo'] = $this->input->post('titulo');
        $dados['valor'] = $this->input->post('valor');
        $dados['descricao'] = $this->input->post('descricao');
        $this->load->model('Promocao_Model', "promocoes");
        if ($this->promocoes->salvar($dados)) {
            echo "Salvo!";
            $resultado = $this->promocoes->abrirTitulo($dados['titulo']);
            foreach ($resultado as $promocao) {
                $id = $promocao->id;
                break;
            }
            $this->salvarImagem($id);
        } else
            echo "Erro!";
    }

    public function editar() {
        $dados['id'] = $this->input->post('id');
        $dados['titulo'] = $this->input->post('titulo');
        $dados['valor'] = $this->input->post('valor');
        $dados['descricao'] = $this->input->post('descricao');
        $this->load->model('Promocao_Model', "promocoes");
        if ($this->promocoes->editar($dados)) {
            echo "Salvo!";
            $resultado = $this->promocoes->abrirTitulo($dados['titulo']);
            foreach ($resultado as $promocao) {
                $id = $promocao->id;
                break;
            }
            if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
                $this->load->model('Imagem_Model', 'imagens');
                $this->imagens->removerFK($id);
                $this->salvarImagem($id);
            }
        } else
            echo "Erro!";
    }

    public function remover() {
        $id = $this->input->post('idremover');
        $this->load->model('Promocao_Model', 'promocoes');
        if ($this->promocoes->remover($id)) {
            echo 'Removido!';
        } else {
            echo 'Erro!';
        }
    }

    public function buscarTodos() {
        $this->load->model('Promocao_Model', 'promocoes');
        $cont = 0;
        echo '<thead>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Valor</th>
                                        <th>Descrição</th>
                                        <th>Ações</th>
                                    </thead><tbody>';
        foreach ($this->promocoes->buscarTodos() as $linha) {
            $cont++;
            $id = "'" . $linha->id . "'";
            $titulo = "'" . $linha->titulo . "'";
            $valor = "'" . $linha->valor . "'";
            $descricao = "'" . $linha->descricao . "'";
            echo
            '<tr>
			<td>' . $cont . '</td>
			<td>' . $linha->titulo . '</td>
			<td>' . $linha->valor . '</td>
			<td>' . $linha->descricao . '</td>
			<td><button class="btn btn-danger btn-fill" onclick="remover(' . $id . ')">Remover</button></td>
			<td><button class="btn btn-info btn-fill" onclick="alterar(' . $id . ',' . $titulo . ',' . $valor . ',' . $descricao . ')">Editar</button></td>
			</tr>';
        }
        echo '</tbody>';
    }

    public function salvarImagem($id) {
        // verifica se foi enviado um arquivo

        if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {

            $arquivo = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];

            // Pega a extensão

            $extensao = pathinfo($nome, PATHINFO_EXTENSION);

            // Converte a extensão para minúsculo
            $extensao = strtolower($extensao);

            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfileiro as extensões permitidas e separo por ';'
            // Isso serve apenas para eu poder pesquisar dentro desta String
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                $novoNome = uniqid(time()) . '.' . $extensao;

                // Concatena a pasta com o nome
                $destino = './imagens/';
                $configuracao = array('upload_path' => $destino,
                    'allowed_types' => array('jpg', 'png', 'jpeg', 'gif'),
                    'file_name' => $novoNome,
                    'max_size' => '2000'
                );
                $this->load->library('upload');
                $this->upload->initialize($configuracao);

                // tenta mover o arquivo para o destino
                if ($this->upload->do_upload('arquivo')) {
                    $dados['nome'] = $novoNome;
                    $dados['destino'] = $destino;
                    $dados['promocao'] = $id;
                    $this->load->model('Imagem_Model', 'imagens');
                    if ($this->imagens->salvar($dados))
                        echo 'Img Salva!';
                    else
                        echo 'Erro!';
                } else
                    echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
            } else
                echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
        }
        else {
            echo 'Você não enviou nenhum arquivo!';
        }
    }

}
