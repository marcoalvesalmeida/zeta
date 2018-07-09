<?php $this->load->view('artefatos/header.php');?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title" id="title_ingrediente">Novo Ingrediente:</h4>
                    </div>
                    <div class="content">
                        <form method="POST" id="ningrediente_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input type="text" class="form-control tituloingrediente" name="tituloingrediente" id="tituloingrediente" placeholder='Digite um novo título para o ingrediente...' value="" required>
                                    </div>
                                </div>
                                  <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Quantidade:</label>
                                            <input type="number" class="form-control qtdeingrediente" name="qtdeingrediente" id="qtdeingrediente" min="0" step='1' required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Valor(R$):</label>
                                            <input type="number" class="form-control valoringrediente" name="valoringrediente" id="valoringrediente" min="0" step='0.01' required>
                                        </div>
                                    </div>&nbsp
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" class="form-check-input" id="adicional_ck" name="adicional_ck">
                                            <label class="form-check-label" for="adicional_ck">Adicional</label>
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
                        <h4 class="title">Ingredientes</h4>
                        <p class="category">Veja os ingredientes cadastrados...</p>
                    </div>                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Busca:</label>
                            <input type="text" class="form-control" id="buscaingrediente" name="buscaingrediente" required/>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" >
                            <thead>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Quantidade</th>
                                <th>Valor(R$)</th>
                                <th>Remover</th>
                                <th>Editar</th>
                            </thead>
                            <tbody id="lista_ingredientes">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit"></button>

<?php $this->load->view('artefatos/pre-footer.php');?>
</div>
</div>


<?php $this->load->view('artefatos/footer.php');?>