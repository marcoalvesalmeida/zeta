<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=<?php echo base_url("assets/img/favicon.ico");?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ZETA - Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href=<?php echo base_url("assets/css/site/style.css");?>>
    <!-- Bootstrap core CSS     -->
    <link href=<?php echo base_url("assets/css/bootstrap.min.css");?> rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href=<?php echo base_url("assets/css/animate.min.css");?> rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=<?php echo base_url("assets/css/light-bootstrap-dashboard.css?v=1.4.0");?> rel="stylesheet"/>

    <!-- My CSS -->
    <link href=<?php echo base_url("assets/css/estilo.css");?> rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=<?php echo base_url("assets/css/pe-icon-7-stroke.css");?> rel="stylesheet" />

</head>
<body>
	

    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-menu-1 ">
                <ul class="nav navbar-nav">
                <li><a href=<?php echo base_url("Site/");?> data-nav-section="home"><img style=" margin-top: -50px; margin-bottom: -50px; width: 75px;height: 50px;" src= <?php echo base_url('assets/img/site/logo.png');?>></a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="home" style=" font-family: 'Itim', cursive;font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Início</a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="about" style=" font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Sobre</a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="features" style="font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Promoções</a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="menu" style="font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Cardápio</a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="events" style="font-family: 'Itim', cursive; font-size: 20px;color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Pedidos</a></li>
                  <li><a href=<?php echo base_url("Site/");?> data-nav-section="reservation" style="font-family: 'Itim', cursive; font-size: 20px;color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Contato</a></li>
                </ul>
                <ul id="logar" class="nav navbar-nav navbar-right">
                      <li><a href=<?php echo base_url("Site/");?> data-toggle="modal" data-target="#Cadastro" onMouseOver="this.style.color='#DB4C04'"
                   onMouseOut="this.style.color='#F75300'" style="color: #fb6e14; font-family: 'Itim', cursive; font-size: 20px;"><i class="fas fa-user-plus"></i> Cadastrar</a></li>
                      <li><a href=<?php echo base_url("Site/");?> data-toggle="modal" data-target="#myModal" onMouseOver="this.style.color='#DB4C04'" onMouseOut="this.style.color='#F75300'" style=" color: #fb6e14; font-family: 'Itim', cursive; font-size: 20px;"><i class="fas fa-sign-in-alt"></i> Entrar</a></li>   

                </ul>

                <ul id="logado" class="nav navbar-nav navbar-right" >
                    
                    <div id="cliente" style="margin-top: 13px; margin-bottom: -50px;">
                        
                    </div>
                </ul>

                </div>
          
        </div>
    </div>



<div class="content">
    <div class="container-fluid" style="margin-top: 30px;">
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
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" >
                            <thead>
                                <th>Título</th>
                                <th>Valor</th>
                                <th>Observações</th>
                                <th>Adicionar</th>
                            </thead>
                            <tbody id="lista_itens1">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
                    <div class="card">
                        <input type="hidden" name="codigo" id="codigo" value=<?php echo '"'.$codigo.'"'; ?>>
                         <input type="hidden" name="cliente" id="cliente" value=<?php echo '"'.$idcliente.'"'; ?>>
                        <div class="header">
                            <h4 class="title">Carrinho de Compras</h4>
                            <p class="category">Gerencie aqui a venda atual</p>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Valor Total:</label>
                                <input type="text" class="form-control valorTotal" id="valorTotalPedido" name="valorTotalPedido" value="0" disabled/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Formas de Pagamento:</label><br>
                                <input type="radio" id="pagamento" value="Dinheiro" name="pagamento"/> Dinheiro
                                <input type="radio" id="pagamento" value="Cartão" name="pagamento"/> Cartão
                                <input type="radio" id="pagamento" value="Dinheiro e Cartão" name="pagamento"/> Dinheiro e Cartão
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Entrega:</label><br>
                                <input type="radio" id="entrega" value="Retirada na Loja" name="entrega"/> Presencial
                                <input type="radio" id="entrega" value="Motoboy" name="entrega"/> Delivery
                                
                            </div>
                        </div>
                    
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped" >
                                <thead>
                                    <th>Título</th>
                                    <th>Valor</th>
                                    <th>Observaçoes</th>
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
                <div class="col-md-12 col-lg-12">
                    <button type="submit" class="btn-fill btn btn-success pull-right" onclick="finalizarPedidoGet()" style="margin-top: 25px; margin-left: 2%; margin-right: 10%;">Confirmar</button>
                    <button type="submit" class="btn-fill btn btn-danger pull-right" onclick="cancelarVenda()" style="margin-top: 25px; margin-left: 2%;">Cancelar</button>
                </div>
            </div>
           

</div>
</div>
</div>
</div>	
<?php 
	$this->load->view('artefatos/footer.php');
?>