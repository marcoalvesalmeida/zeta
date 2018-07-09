<?php $this->load->view('artefatos/login/header.php');?>
<div class="form">
  
    <ul class="tab-group">
    	<li class="tab active"><a href="#login">Entre</a></li>
        <li class="tab "><a href="#signup">Cadastre-se</a></li>
    </ul>
  
    <div class="tab-content">
    
      	<div id="login">   
          	<h1>Bem vindo!</h1>
          
          	<form action=<?php echo base_url('Clientes/entrar');?> method="post">
          
	            <div class="field-wrap">
		            <label>
		              Email<span class="req">*</span>
		            </label>
		            <input type="email" name="email" required autocomplete="on"/>
	          	</div>
          
		        <div class="field-wrap">
		            <label>
		              Senha<span class="req">*</span>
		            </label>
		            <input type="password" name="senha" required autocomplete="off"/>
		         </div>
          
          		<p class="forgot"><a href="#">Esqueceu a senha?</a></p>
          
          		<button class="button button-block"/>Entre</button>
          	</form>
        </div>


        <div id="signup">   
          	<h1>Cadastre-se é grátis!</h1>
          
          	<form action=<?php echo base_url('Clientes/cadastrar');?> method="post">
          
	         	<div class="top-row">
		            <div class="field-wrap">
		              <label>
		                Nome<span class="req">*</span>
		              </label>
		              <input type="text" name="nome" required autocomplete="off" />
		            </div>
		        
		            <div class="field-wrap">
		              <label>
		                Sobrenome<span class="req">*</span>
		              </label>
		              <input type="text" name="sobrenome" required autocomplete="off"/>
		            </div>
	          	</div>

          		<div class="field-wrap">
		            <label>
		              Email<span class="req">*</span>
		            </label>
		            <input type="email" name="email" required autocomplete="off"/>
		        </div>
		          
		        <div class="top-row">
		            <div class="field-wrap">
		              <label>
		                Senha<span class="req">*</span>
		              </label>
		              <input type="password" name="senha1" required autocomplete="off"/>
		            </div>

		            <div class="field-wrap">
		              <label>
		                Confirme senha<span class="req">*</span>
		              </label>
		              <input type="password" name="senha2" required autocomplete="off"/>
		            </div>
		        </div>

          		<hr>
           		<h1>Contatos</h1>

		        <div class="top-row">
		            <div class="field-wrap">
		              <label>
		                Telefone<span class="req">*</span>
		              </label>
		              <input type="tel" name="telefone" required autocomplete="off" />
		            </div>
		        
		            <div class="field-wrap">
		              <label>
		                Whatsapp<span class="req">*</span>
		              </label>
		              <input type="tel" name="whatsapp" required autocomplete="off"/>
		            </div>
		        </div>

           		<hr>
           		<h1>Endereço</h1>


	            <div class="top-row">
	              	<div class="field-wrap">
		                <label>
		                  CEP<span class="req">*</span>
		                </label>
		                <input type="tel" name="cep" required autocomplete="off" />
	              	</div>
	          
		            <div class="field-wrap">
		                <label>
		                  Cidade<span class="req">*</span>
		                </label>
		                <input type="text" name="cidade" required autocomplete="off"/>
		            </div>
	            </div>
		        <div class="top-row">
		            <div class="field-wrap">
		                <label>
		                  Rua<span class="req">*</span>
		                </label>
		                <input type="text" name="rua" required autocomplete="off" />
		            </div>
		          
		            <div class="field-wrap">
		                <label>
		                  Bairro<span class="req">*</span>
		                </label>
		                <input type="text" name="bairro" required autocomplete="off"/>
		            </div>
		        </div>
	          	<div class="top-row">
		            <div class="field-wrap">
		                <label>
		                  Número<span class="req">*</span>
		                </label>
		                <input type="tel" name="numero" required autocomplete="off" />
		            </div>
	          
		            <div class="field-wrap">
		                <label>
		                  Complemento<span class="req">*</span>
		                </label>
		                <input type="text" name="complemento" required autocomplete="off"/>
		            </div>
	            </div>
          
          		<button type="submit" class="button button-block"/>Cadastre-se</button>
          	</form>
        </div>       
    </div><!-- tab-content -->
</div> <!-- /form -->
<?php $this->load->view('artefatos/login/footer.php');?>