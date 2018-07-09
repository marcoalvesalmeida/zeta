<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=<?php echo base_url("assets/img/burger.png");?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ZETA - Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

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

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image=<?php echo base_url("assets/img/sidebar-5.jpg")?>>

    <!--

        Tipo 1: Você pode mudar a cor da sidebar usando: data-color="blue | azure | green | orange | red | purple"
        Tipo 2: Você pode também adicionar uma imagem usando a tag: data-image

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <img src=<?php echo base_url("assets/img/burger.png");?> width=30px; height=30px; style="margin-top: -7px;"> ZETA 
                </a>
            </div>

            <ul class="nav">
                <li class=<?php echo '"'.@$admin.'"'; ?>>
                    <a href=<?php echo base_url("Admin");?>>
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$edicoes.'"'; ?>>
                    <a href=<?php echo base_url("Admin/edicoes");?>>
                        <i class="pe-7s-note"></i>
                        <p>Editar Seções</p>
                    </a>
                </li>
                  <li class=<?php echo '"'.@$categorias.'"'; ?>>
                    <a href=<?php echo base_url("Admin/categorias");?>>
                        <i class="pe-7s-ticket"></i>
                        <p>Categorias</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$promocoes.'"'; ?>>
                    <a href=<?php echo base_url("Admin/promocoes");?>>
                        <i class="pe-7s-gleam"></i>
                        <p>Promoções</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$ingredientes.'"'; ?>>
                    <a href=<?php echo base_url("Admin/ingredientes");?>>
                        <i class="pe-7s-news-paper"></i>
                        <p>Ingredientes</p>
                    </a>
                </li>
                 <li class=<?php echo '"'.@$cardapio.'"'; ?>>
                    <a href=<?php echo base_url("Admin/cardapio");?>>
                        <i class="pe-7s-note2"></i>
                        <p>Cardápio</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$venda.'"'; ?>>
                    <a href=<?php echo base_url("Admin/venda");?>>
                        <i class="pe-7s-cart"></i>
                        <p>Vender</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$pedidos.'"'; ?>>
                    <a href=<?php echo base_url("Admin/pedido");?>>
                        <i class="pe-7s-hourglass"></i>
                        <p>Pedidos</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$pedidosFinalizado.'"'; ?>>
                    <a href=<?php echo base_url("Admin/finalizados");?>>
                        <i class="pe-7s-box1"></i>
                        <p>Pedidos Finalizados</p>
                    </a>
                </li>
                <li class=<?php echo '"'.@$pedidosnotcad.'"'; ?>>
                    <a href=<?php echo base_url("Admin/pedidonotcad");?>>
                        <i class="pe-7s-hourglass"></i>
                        <p>Pedidos EXTRA</p>
                    </a>
                </li>
                 <li class=<?php echo '"'.@$pedidosnotcadfinalizados.'"'; ?>>
                    <a href=<?php echo base_url("Admin/pedidonotcadfinalizados");?>>
                        <i class="pe-7s-box1"></i>
                        <p>EXTRA Finalizados</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Big Burger</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Big Burger</p>
                            </a>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/zeta/Admin/sair">
                                <p>Sair</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
