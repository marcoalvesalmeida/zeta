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
<body style=" background-image: url(<?php echo base_url('assets/img/site/bg2.jpg');?>);background-repeat: no-repeat;background-size:100%;">
    

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
                <ul id="logado" class="nav navbar-nav navbar-right" >
                    
                    <div id="cliente" style="margin-top: 13px; margin-bottom: -50px;">
                        
                    </div>
                </ul>

                </div>
          
        </div>
    </div>
    <div class="content" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 col-lg-offset-1">
                <h1 style="color: #FFF;"> Obrigado pela preferencia!!!</h1><br>
                <h1 style="color: #FFF;"> O Big Burger Agradece...</h1>
                <h2 style="color: #FFF;"> Volte sempre!</h2>
            </div>
            
            <div class="col-md-4">
                <img style="margin-left: -40px;" src= <?php echo base_url('assets/img/site/logo.png');?>>
            </div>

        </div>

    </div>

</div>  
<?php 
    $this->load->view('artefatos/footer.php');
?>