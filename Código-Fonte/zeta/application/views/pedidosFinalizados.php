<?php $this->load->view('artefatos/header.php');?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Pedidos Finalizados</h4>
                        <p class="category">Esses são os pedidos marcados como finalizados</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Cliente</th>
                                <th>Código Venda</th>
                                <th>Valor Total</th>
                                <th>Data de Venda</th>
                                <th>Ações</th>
                            </thead>
                            <tbody id="lista_pedidos_finalizados">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <form action="" method="post" id="imprimir_pedido">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
            <span class="close" style="color: black;">x</span>
            <h3 id="modal_titulo"></h3>
            <div class="row" style="margin-left: 15%">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Total:</label>
                        <input type="number" class="form-control" name="total" id="valor" disabled/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Cliente:</label>
                        <input type="text" class="form-control" name="idlanche" id="idlanche" disabled />
                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="form-group">
                        <label>Entrega:</label>
                        <input type="text" class="form-control" name="identrega" id="identrega" disabled />
                    </div>
                </div>
            </div>
            <div class="row" style="margin-left: 15%">
                <div class="col-md-3">
                        <div class="form-group">
                             <label>Pagamento:</label>
                             <input type="text" class="form-control" name="idpagamento" id="idpagamento" disabled />
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">
                             <label>Endereço:</label>
                             <input type="text" class="form-control" name="idendereco" id="idendereco" disabled />
                        </div>
                </div>
            </div>
        </div>
        <div class="modal-body" id="corpo_modal">
            <p>Pedidos:</p>
            <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Lanche</th>
                    <th>Removidos</th>
                </thead>
                <tbody id="lista_lanches">
                </tbody>
            </table>
            </div>
            <hr></hr> 
        </div>
  </form>
</div>

</div>
</div>

<?php $this->load->view('artefatos/footer.php');?>