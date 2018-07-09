<?php $this->load->view('artefatos/header.php');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção <strong>Principal</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data" id="principal_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control tituloprincipal" name="tituloprincipal" placeholder='Digite um novo título para o Site' value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="4" class="form-control textoprincipal" name="textoprincipal"
                                                id="textopri" 
                                                 placeholder='Digite um novo texto para a resenha do Site' required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Escolha a 1ª imagem:</label>
                                                <input type="file" class="form-control arquivo1" id="arquivo1" name="arquivo1">
                                            </div>                    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Escolha a 2ª imagem:</label>
                                                <input type="file" class="form-control arquivo2" id="arquivo" name="arquivo2">
                                            </div>                    
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Escolha a 3ª imagem:</label>
                                                <input type="file" class="form-control arquivo3" id="arquivo" name="arquivo3">
                                            </div>                    
                                        </div>
                                        
                                    </div>
                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção <strong>Sobre</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="sobre_form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control titulosobre" name="titulosobre" placeholder='Digite um novo título para a seção "Sobre"' value="Sobre" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Escolha a imagem de Fundo:</label>
                                                <input type="file" class="form-control arquivosobre" id="arquivosobre" name="arquivosobre">
                                            </div>                    
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="5" class="form-control" name="textosobre" placeholder='Digite um novo texto para a seção "Sobre"' id="textosobre" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                 <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção<strong> Promoções</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="promocoes_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control" name="titulopromocoes" placeholder='Digite um novo título para a seção "Promoções"' value="Promoções" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="5" class="form-control" name="textopromocoes" placeholder='Digite um novo texto para a seção "Promoções"'></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                 <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção<strong> Cardápio</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="cardapio_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control" name="titulocardapio" placeholder='Digite um novo título para a seção "Cardápio"' value="Cardápio" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="5" class="form-control" name="textocardapio" placeholder='Digite um novo texto para a seção "Cardápio"'></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                 <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção<strong> Pedidos</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="pedidos_form">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control" name="titulopedidos" placeholder='Digite um novo título para a seção "Pedidos"' value="Pedidos" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Escolha a imagem de Fundo:</label>
                                                <input type="file" class="form-control arquivopedidos" id="arquivopedidos" name="arquivopedidos">
                                            </div>                    
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="5" class="form-control" name="textopedidos" id="textopedidos" placeholder='Digite um novo texto para a seção "Pedidos"'></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar a seção<strong> Contato</strong></h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="contato_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control" name="titulocontato" placeholder='Digite um novo título para a seção "Contato"' value="Contato" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Texto:</label>
                                                <textarea rows="5" class="form-control" name="textocontato" placeholder='Digite um novo texto para a seção "Contato"'></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-danger btn-fill pull-left" type="reset">Limpar</button>
                                    <button class="btn btn-info btn-fill pull-right" type="submit">Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php $this->load->view('artefatos/pre-footer.php');?>
    </div>
</div>


<?php $this->load->view('artefatos/footer.php');?>