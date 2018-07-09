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
<body style=" background-image: url(<?php echo base_url('assets/img/site/bg.jpg');?>);background-repeat: no-repeat;background-size:100%;">
    

    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-menu-1 ">
                <ul class="nav navbar-nav">
                <li><a href="#" data-nav-section="home"><img style=" margin-top: -50px; margin-bottom: -50px; width: 75px;height: 50px;" src= <?php echo base_url('assets/img/site/logo.png');?>></a></li>
                  <li><a href="#" data-nav-section="home" style=" font-family: 'Itim', cursive;font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Início</a></li>
                  <li><a href="#" data-nav-section="about" style=" font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Sobre</a></li>
                  <li><a href="#" data-nav-section="features" style="font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Promoções</a></li>
                  <li><a href="#" data-nav-section="menu" style="font-family: 'Itim', cursive; font-size: 20px; color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Cardápio</a></li>
                  <li><a href="#" data-nav-section="events" style="font-family: 'Itim', cursive; font-size: 20px;color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Pedidos</a></li>
                  <li><a href="#" data-nav-section="reservation" style="font-family: 'Itim', cursive; font-size: 20px;color: #FFF;" onMouseOver="this.style.color='#F75300'"
               onMouseOut="this.style.color='#FFF'">Contato</a></li>
                </ul>
                 <ul id="logado" class="nav navbar-nav navbar-right" >
			    	
				   	<div id="cliente" style="margin-top: 13px; margin-bottom: -50px;">
				   		
				   	</div>
			    </ul>

                </div>
          
        </div>
    </div>
<div class="content" style="margin-top: 40px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar Perfil</h4>
                            </div>
                            <div class="content">
                                <form method="post" action=<?php echo base_url('Clientes/editar');?>>
                                	<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" id="nomeEdit" name="nomeEdit" class="form-control" value="<?php echo $nome;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sobrenome</label>
                                                <input type="text" id="sobrenomeEdit" name="sobrenomeEdit" class="form-control" value="<?php echo $sobrenome;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" id="emailEdit" name="emailEdit" class="form-control" placeholder="Email" value="<?php echo $email;?>">
                                            </div>
                                        </div>
                                       
                                    </div>

		                            <div>
		                                <h4 class="title">Contatos</h4>
		                            </div>

		                             <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            	<i class="pe-7s-call"></i>
                                                <label>Telefone</label>
                                                <input type="tel" id="telefoneEdit" name="telefoneEdit" class="form-control" placeholder="telefone" value="<?php echo $telefone;?>">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            	<i class="fab fa-whatsapp"></i>
                                                <label>Whatsapp</label>
                                                <input type="tel" id="whatsappEdit" name="whatsappEdit" class="form-control" placeholder="telefone" value="<?php echo $whatsapp;?>">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div>
		                                <h4 class="title">Endereço</h4>
		                            </div>

                                    <div class="row">
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                
                                                <label>CEP</label>
                                                <input type="tel" id="cepEdit" name="cepEdit" class="form-control" placeholder="CEP" value="<?php echo $cep;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cidade</label>
                                                <input type="text" id="cidadeEdit" name="cidadeEdit" class="form-control" placeholder="Cidade" value="<?php echo $cidade;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Rua</label>
                                                <input type="text" id="ruaEdit" name="ruaEdit" class="form-control" placeholder="Rua" value="<?php echo $rua;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bairro</label>
                                            <input type="text" id="bairroEdit" name="bairroEdit" class="form-control" placeholder="Bairro" value="<?php echo $bairro;?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Número</label>
                                                <input type="tel" id="numeroEdit" name="numeroEdit" class="form-control" placeholder="Número" value="<?php echo $numero;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Complemento</label>
                                                <input type="text" id="complementoEdit" name="complementoEdit" class="form-control" placeholder="Complemento" value="<?php echo $complemento;?>">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <input type="hidden" id="idEdit" name="idEdit" class="form-control" value="<?php echo $id;?>">

                                    <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Editar </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="<?php echo base_url('assets/img/faces/face-0.jpg')?>" alt="..."/>

                                      <h4 class="title"><?php echo $nome;?><br />
                                         <small><?php echo $sobrenome;?></small>
                                      </h4>
                                    </a>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php 
    $this->load->view('artefatos/footer.php');
?>