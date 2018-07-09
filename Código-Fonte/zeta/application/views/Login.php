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
<body style="overflow: hidden;">
<div class="container" style="margin-top: 180px;">
	 <div style="background: #F7F7F8;">
      		<div class="row">
	            <div class="col-md-4 col-md-offset-4 col-lg-offset-4">
	                <div class="card">
	                    <div class="header" align="center">
	                        <h4 class="title" id="title_item">Login Administrador</h4>
	                    </div>
	                    <div class="content">
	                        <form method="POST" id="nlogin_form">
	                            <div class="row">
	                                <div class="col-md-10 col-md-offset-1 col-lg-offset-1">
	                                    <div class="form-group">
	                                        <label>Email:</label>
	                                        <input type="email" class="form-control titulo" id="email" name="email" placeholder='Email' required>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-md-10  col-md-offset-1 col-lg-offset-1">
	                                    <div class="form-group">
	                                        <label>Senha:</label>
	                                        <input type="password" class="form-control titulo" id="senha" name="senha" placeholder='Senha' required>
	                                    </div>
	                                </div>
	                            </div>
	                            <button class="btn btn-danger btn-fill pull-left" type="button" onclick="limpar()">Limpar</button>
	                            <button class="btn btn-info btn-fill pull-right" type="submit">Entrar</button>
	                            <div class="clearfix"></div>
	                        </form>
	                    </div>
	                </div>
            </div>
</div>
</div>
</div> 
<footer class="footer col-md-4 col-md-offset-4" style="text-align: center;" >
    <div class="container-fluid">
     <p class="copyright">
        &copy; <script>document.write(new Date().getFullYear())</script> Desenvolvido por:<a href="http://www.marcoalves.tk" > Geek Software </a>
    </p>
    </div>
</footer>

    </div>
<?php $this->load->view('artefatos/footer.php');?>


