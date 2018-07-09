<?php $this->load->view('artefatos/header.php');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" id="title_categoria">Nova Categoria:</h4>
                            </div>
                            <div class="content">
                                <form method="POST" id="ncategorias_form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título:</label>
                                                <input type="text" class="form-control titulocategoria" name="titulocategoria" id="titulocategoria" placeholder='Digite um novo título para a categoria...' value="" required>
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
                        <h4 class="title">Categorias</h4>
                        <p class="category">Veja as categorias cadastradas...</p>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Busca:</label>
                            <input type="text" class="form-control" name="buscacategorias" id="buscacategorias" required/>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" >
                            <thead>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Remover</th>
                            <th>Editar</th>
                            </thead>
                            <tbody id="lista_categorias">

                            </tbody>
                        </table>

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