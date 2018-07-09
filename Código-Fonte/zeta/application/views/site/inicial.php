<?php
$abre = fopen("arquivos/principal.txt", "r");
$leitura = fread($abre, filesize("arquivos/principal.txt"));

list($titulo, $titulo2, $imagem1, $imagem2, $imagem3) = explode("|", $leitura);
?>





	
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate" ><?php echo $titulo;?></h1>
							<h2 class="to-animate" ><?php echo $titulo2;?></h2>
							
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(<?php echo base_url($imagem1);?>)" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(<?php echo base_url($imagem2);?>)" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(<?php echo base_url($imagem3);?>)" data-stellar-background-ratio="0.5"></li>
			  	</ul>	
			</div>	
		</div>