<?php $this->load->view('artefatos/header.php');?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title" id="title_item">Novo Item:</h4>
                    </div>
                    <div class="content">
                        <form method="POST" id="ncardapio_form">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Título:</label>
                                        <input type="text" class="form-control titulo" id="titulo" name="titulo" placeholder='Digite um título para a novo item de cardápio...' required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Valor(R$):</label>
                                        <input type="number" min="0" step="0.01" class="form-control valor" id="valor" name="valor" required placeholder="Digite o valor..." value="0">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Ingredientes:</label>
                                        <select name="ingredientes" id="ingredientes" class="form-control" required>                                        
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label>Adicionar:</label>
                                        <button class="btn btn-info btn-fill pull-right" onclick="addIngrediente()" type="button">+</button>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-offset-1">
                                    <div class="form-group">
                                        <label>Categoria:</label>
                                        <select name="categoria" id="categorias" class="form-control" required>                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <fieldset id="field_ingredientes" align="center">
                                            <legend>Ingredientes:</legend>
                                            <div id="set_ingredientes">

                                            </div>
                                        </fieldset>
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
                            <h4 class="title">Cardápio Atual</h4>
                            <p class="category">Gerencie o cardápio disponível atualmente</p>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Busca:</label>
                                <input type="text" class="form-control" id="buscacardapio" name="buscacardapio" required/>
                            </div>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped" >
                                <thead>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Valor</th>
                                    <th>Categoria</th>
                                    <th>Remover</th>
                                    <th>Editar</th>
                                </thead>
                                <tbody id="lista_cardapio">

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
