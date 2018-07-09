<?php $this->load->view('artefatos/header.php');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" id="title_promocao">Nova Promoção</h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="npromocao_form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control titulo" id="titulo" name="titulo" placeholder='Digite um título para a nova promoção...' required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Valor(R$):</label>
                                                <input type="number" min="0" step="0.01" class="form-control valor" id="valor" name="valor" required placeholder="Digite o valor...">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Descrição:</label>
                                                <textarea class="form-control descricao" id="descricao" name="descricao" rows="4" placeholder='Digite uma descrição para a promoção...' required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Imagem:</label>
                                                <input type="file" class="form-control arquivo" id="arquivo" name="arquivo">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-fill pull-left" type="button" onclick="limpar()">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Promoções Atuais</h4>
                                <p class="category">Gerencie as promoções disponíveis atualmente</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped" id="lista_promocoes">
                                    <thead>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Valor</th>
                                        <th>Descrição</th>
                                        <th>Remover</th>
                                        <th>Editar</th>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $cont=0;
                                        foreach ($lista as $linha) {
                                            $cont++;
                                            $id ="'".$linha->id."'";
                                            $titulo="'".$linha->titulo."'";
                                            $valor="'".$linha->valor."'";
                                            $descricao="'".$linha->descricao."'";
                                            echo 
                                            '<tr>
                                                <td>'.$cont.'</td>
                                                <td>'.$linha->titulo.'</td>
                                                <td>'.$linha->valor.'</td>
                                                <td>'.$linha->descricao.'</td>
                                                 <td><button class="btn btn-danger btn-fill" onclick="remover('.$id.')">Remover</button></td>
                                                 <td><button class="btn btn-info btn-fill" onclick="alterar('.$id.','.$titulo.','.$valor.','.$descricao.')">Editar</button></td>
                                            </tr>';
                                        }
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                
            </div>
        </div>

        <?php $this->load->view('artefatos/pre-footer.php');?>
    </div>
</div>

<?php $this->load->view('artefatos/footer.php');?>