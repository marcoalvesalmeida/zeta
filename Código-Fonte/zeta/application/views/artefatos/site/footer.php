
	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2016 Foodee Free HTML5 Template. <br> Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a> <br> Tasty Icons Free <a href="http://handdrawngoods.com/store/tasty-icons-free-food-icons/" target="_blank">handdrawngoods</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>

				</div>

			</div>
		</div>
	</div>

<!-- login JS -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src=<?php echo base_url("assets/js/site/index.js");?>></script>
	
	
	
	
	<!-- jQuery -->
	<script src=<?php echo base_url("assets/js/site/jquery.min.js");?>></script>
	<!-- jQuery Easing -->
	<script src=<?php echo base_url("assets/js/site/jquery.easing.1.3.js");?>></script>
	<!-- Bootstrap -->
	<script src=<?php echo base_url("assets/js/site/bootstrap.min.js");?>></script>
	<!-- Bootstrap DateTimePicker -->
	<script src=<?php echo base_url("assets/js/site/moment.js");?>></script>
	<script src=<?php echo base_url("assets/js/site/bootstrap-datetimepicker.min.js");?>></script>
	<!-- Waypoints -->
	<script src=<?php echo base_url("assets/js/site/jquery.waypoints.min.js");?>></script>
	<!-- Stellar Parallax -->
	<script src=<?php echo base_url("assets/js/site/jquery.stellar.min.js");?>></script>

	<!-- Flexslider -->
	<script src=<?php echo base_url("assets/js/site/jquery.flexslider-min.js");?>></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src=<?php echo base_url("assets/js/site/main.js");?>></script>
	





     <div class="row" style="color: #000; font-family: 'Itim', cursive; font-size: 30px;">
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"  style="color: #000; font-family: 'Itim', cursive; font-size: 20px;">Login</h4>
                        </div>
                        <div class="modal-body">
                        
                            <div class="row">
                                <div class="input-group col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F7781D; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Email: </span>
                                  <input type="email" name="email" id="emaillog" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F7781D; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Senha: </span>
                                  <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancelar" class="btn btn-default" data-dismiss="modal"  style="color: #000; font-family: 'Itim', cursive; font-size: 15px;">Cancelar</button>
                            <button type="button" onclick="login()" class="btn btn-primary" style="background-color: #F7781D;border-color:#F7781D; color: #000; font-family: 'Itim', cursive; font-size: 15px ">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="row" style="color: #000; font-family: 'Itim', cursive; font-size: 30px;">
            <div id="myModal1" class="modal fade" role="dialog">
                <div class="modal-dialog modal-sm">

                    <!-- Modal content-->
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"  style="color: #000; font-family: 'Itim', cursive; font-size: 20px;">Login</h4>
                        </div>
                        <div class="modal-body">
                        
                            <div class="row">
                                <div class="input-group col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F7781D; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Email: </span>
                                  <input type="email" name="email" id="emaillog2" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F7781D; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Senha: </span>
                                  <input type="password" name="senha" id="senha2" class="form-control" placeholder="Senha" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancelar" class="btn btn-default" data-dismiss="modal"  style="color: #000; font-family: 'Itim', cursive; font-size: 15px;">Cancelar</button>
                            <button type="button" onclick="login2()" class="btn btn-primary" style="background-color: #F7781D;border-color:#F7781D; color: #000; font-family: 'Itim', cursive; font-size: 15px ">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    


        <div class="row" style="color: #000; font-family: 'Itim', cursive; font-size: 30px;">
            <div id="cadastromodal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-md">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"  style="color: #000; font-family: 'Itim', cursive; font-size: 20px;">Cadastro</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Nome: </span>
                                  <input type="text" name="nomec" id="nomec" class="form-control" placeholder="Nome" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="col-md-5 input-login ">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Sobrenome: </span>
                                  <input type="text" name="sobrenomec" id="sobrenomec" class="form-control" placeholder="Sobrenome" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Email: </span>
                                  <input type="email" name="emailc" id="emailc" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Senha: </span>
                                  <input type="password" name="senha1c" id="senha1c" class="form-control" placeholder="Senha" aria-describedby="basic-addon1" required="">
                                </div>
                            
                                <div class="col-md-5 input-login">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Confirme: </span>
                                  <input type="password" name="senha2c" id="senha2c" class="form-control" placeholder="Senha" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>

                            <div class="modal-header">
                                <h4 class="modal-title"  style="color: #000; font-family: 'Itim', cursive; font-size: 20px;">Contatos</h4>
                            </div>
                            
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-5 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Telefone: </span>
                                  <input type="text" name="telefonec" id="telefonec" class="form-control" placeholder="(DDD) 99999-9999" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="col-md-5 input-login ">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Whatsapp: </span>
                                  <input type="text" name="whatsappc" id="whatsappc" class="form-control" placeholder="(DDD) 99999-9999" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            
                            <div class="modal-header">
                                <h4 class="modal-title"  style="color: #000; font-family: 'Itim', cursive; font-size: 20px;">Endereço</h4>
                            </div>

                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-5 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Número</span>
                                  <input type="text" name="numeroc" id="numeroc" class="form-control" placeholder="Número" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="col-md-5 input-login">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px; " id="basic-addon1">Rua </span>
                                  <input type="text" name="ruac" id="ruac" class="form-control" placeholder="Rua" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 input-login col-md-offset-1">
                                  <span class="input-group-addon" style="background-color: #F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 20px;" id="basic-addon1">Bairro </span>
                                  <input type="text" name="bairroc" id="bairroc" class="form-control" placeholder="Bairro" aria-describedby="basic-addon1" required="">
                                </div>
                                
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancelar" class="btn btn-default" data-dismiss="modal"  style="color: #000; font-family: 'Itim', cursive; font-size: 15px;">Cancelar</button>
                             <button type="button" onclick="cadastro()" class="btn btn-primary" style="background-color: #F4BB5F;border-color:#F4BB5F; color: #000; font-family: 'Itim', cursive; font-size: 15px ">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>






	</body>
<script type="text/javascript">

     //  Gerar Código da Venda
    var data_atual = new Date();
    var mes = ""+data_atual.getMonth()+"";
    var ano = ""+data_atual.getFullYear()+"";
    var dia = ""+data_atual.getDate()+"";
    var hora = ""+data_atual.getHours()+"";
    var minutos = ""+data_atual.getMinutes()+"";
    var segundos = ""+data_atual.getSeconds()+"";


    var codigo = ano + mes + dia + hora + minutos + segundos;
    var codigoatual = 0;
    
    if ('<?php echo @$sessaostatus; ?>' == 'active') {
        verificasessao();
    }
	   
$(function() {
    
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }
});


     function cadastro() {
        
        var senha1 = $('#senha1c').val();
        var senha2 = $('#senha2c').val();
        alert(senha1);
        if(senha1==senha2){
            var senha = senha1;
            var nome = $('#nomec').val();
            var sobrenome = $('#sobrenomec').val();
            var email = $('#emailc').val();
        
            var telefone = $('#telefonec').val();
            var whatsapp = $('#whatsappc').val();
            var bairro = $('#bairroc').val();
            var rua = $('#ruac').val();
            var numero = $('#numeroc').val();
            alert(senha);
    
    
           
            // Mensagem de carregando
                    // Faz requisição ajax para o controller
            $.post("/zeta/Clientes/cadastro", {email: email, senha: senha, nome: nome, sobrenome: sobrenome, telefone: telefone, whatsapp: whatsapp, bairro: bairro, rua: rua, numero: numero }, function (resposta) {
                // Limpa a mensagem de carregamento
                alert(resposta);
                if (resposta!=0) {
                    $.post("/zeta/Clientes/verificaEmail", {email: email}, function (resposta) {
                        // Limpa a mensagem de carregamento
                         alert(resposta);
                        if (resposta!=0) {
                            $.post("/zeta/Clientes/verificaSenha", {senha: senha, email: email}, function (resposta) {
            
                                if (resposta!=10) {
                                     alert(resposta);
                                       $('#cadastromodal').modal('hide');
                                        $("#logar").hide("hide");
                                        $('#cliente').append(resposta);
                                }
            
                            });
            
            
                        }
                       
                    });
    
    
                }
               
            });
        }else{
            alert('as senhas não são iguais!!');
        }
    }
    
    
    function verificasessao(){
        usuariosessao = '<?php echo @$clienteid; ?>';
        $.post("/zeta/Clientes/verificaUsuario", {usuariosessao: usuariosessao}, function (resposta) {

                    if (resposta!=10) {
                            $("#logar").hide("hide");
                            $('#cliente').append(resposta);
                    }else{
                         $("#logar").hide("show");
                    }

                });
        
    }




    function login() {
        var email = $('#emaillog').val();
        var senha = $('#senha').val();
        // Mensagem de carregando
                // Faz requisição ajax para o controller
        $.post("/zeta/Clientes/verificaEmail", {email: email}, function (resposta) {
            // Limpa a mensagem de carregamento
            if (resposta!=0) {
                $.post("/zeta/Clientes/verificaSenha", {senha: senha, email: email}, function (resposta) {

                    if (resposta!=10) {
                           $('#myModal').modal('hide');
                            $("#logar").hide("hide");
                            $('#cliente').append(resposta);
                    }

                });


            }
           
        });
    }
    

   



 function criarVenda() {
    location.href='/zeta/Site/vendasemlog';
}

function verificaLogin() {
    $.post("/zeta/Site/verificaLogin", {codigo: codigo}, function (resposta) {
            if (resposta=='0') {
                   $('#myModal1').modal('show');
            }else if(resposta=='1'){
                 
                 location.href='/zeta/Site/venda?codigo='+codigo;
            }
           

        });
   
}

function login2() {
        var email = $('#emaillog2').val();
        var senha = $('#senha2').val();


       
       
        // Mensagem de carregando
                // Faz requisição ajax para o controller

        $.post("/zeta/Clientes/logar", {senha: senha, email: email}, function (resposta) {
            
            if (resposta!=0) {
                   $('#myModal1').modal('hide');
                   location.href='/zeta/Site/venda?venda='+codigo+'&cliente='+resposta;
            }

        });
    }
    



      
</script>
</html>

