<?php
$abre = fopen("arquivos/sobre.txt", "r");
$leitura = fread($abre, filesize("arquivos/sobre.txt"));

list($titulo, $sobre, $imagem) = explode("|", $leitura);
?>



<div id="fh5co-about" data-section="about">
	<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(<?php echo base_url($imagem);?>)"></div>
	<div class="fh5co-2col fh5co-text">
		<h2 class="heading to-animate"><?php echo $titulo;?></h2>
		<p class="to-animate"><span class="firstcharacter"><?php echo $sobre;?></p>
	</div>
</div>