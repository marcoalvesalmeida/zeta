<?php $this->load->view('artefatos/header.php'); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Adicionar Item</h4>
                        <p class="category">Adicione itens e sua respectiva quantidade</p>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Busca:</label>
                            <input type="text" class="form-control" name="buscacardapiovenda" id="buscacardapiovenda" required/>
                        </div>
                    </div>
                    <!-- Deixa quieto @Marco @marco
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Quantidade:</label>
                            <input type="number" class="form-control qtdeItem" name="qtdeItem" min="1" value="1" required/>
                        </div>
                    </div>
                    -->
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" >
                            <thead>
                                <th>Título</th>
                                <th>Valor</th>
                                <th>Adicionar</th>
                            </thead>
                            <tbody id="lista_itens">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Detalhes da Venda:</h4>
                            <p class="category">Gerencie aqui a venda atual</p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Valor Total:</label>
                                <input type="text" class="form-control valorTotal" name="valorTotal" value="0" disabled/>
                            </div>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped" >
                                <thead>
                                    <th>Título</th>
                                    <th>Valor</th>
                                    <th>Remover</th>
                                </thead>
                                <tbody id="lista_itens_venda">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-lg-offset-1 col-md-6 col-lg-6">
                    <label> Cliente: </label>
                    <select name="lista_clientes" id="lista_clientes" class="form-control">
                    </select>
                </div>
                <div class="col-md-4 col-lg-4">
                    <button type="submit" class="btn-fill btn btn-success pull-right" onclick="finalizarVenda()" style="margin-top: 25px; margin-left: 2%;">Confirmar</button>
                    <button type="submit" class="btn-fill btn btn-danger pull-right" onclick="cancelarVenda()" style="margin-top: 25px; margin-left: 2%;">Cancelar</button>
                </div>
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <form action="" method="post" id="nitemvenda_form">
                  <!-- Modal content -->
                  <div class="modal-content">
                    <div class="modal-header">
                      <span class="close" style="color: black;">&times;</span>
                      <h2 id="modal_titulo"></h2>
                      <div class="row">
                        <div class="col-md-2 pull-right">
                            <div class="form-group">
                                <label>Total:</label>
                                <input type="number" class="form-control" name="total" id="valor" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2 pull-right">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="idlanche" id="idlanche" disabled />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body" id="corpo_modal">
                    <p>Ingredientes:<i>(Clique para remover)</i></p>
                    <div id="ingredientes_modal">
                    </div>
                    <hr>

                </hr> 
                <!-- @marco @Marco
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Adicionais:</label>
                            <select name="ingredientes_adicionais" id="ingredientes_adicionais" class="form-control" required>                           
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Adicionar:</label>
                            <button class="btn btn-info btn-fill pull-right" onclick="addAdicional()" type="button">+</button>
                        </div>
                    </div>
                </div> 
                <p>Adicionais:</p>
                <div id="adicionais_modal">

                </div>                  
            </div> -->
            <div class="modal-footer">
              <button type="submit" class="btn-fill btn btn-info">Salvar</button>
          </div>
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


