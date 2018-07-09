<div id="fh5co-featured" data-section="features">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Promoções</h2>
				<p class="sub-heading to-animate"> A fome é o ponto de partida, o Guia do Hambúrguer é o caminho, e o SnacksToday é o destino: ninguém precisa de GPS quando o assunto é comer os melhores lanches da cidade!</p>
			</div>
		</div>
		<div class="row">
			<div class="fh5co-grid">
				<?php
					$cont=1;
					foreach ($resultado as $promocao) {
						echo '<div class="fh5co-v-half">';
		    			if ($cont%2!=0) {
			    			
								echo '<div class="fh5co-h-row-2 to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url('.base_url($promocao->destino.$promocao->nome).')"></div>
									<div class="fh5co-v-col-2 fh5co-text arrow-left">
										<h2>'.$promocao->titulo.'</h2>
										<span class="pricing">'.$promocao->valor.'</span>
										<p>'.$promocao->descricao.'</p>
									</div>
								</div>';
								$cont+=0.5;
							
		    			}else{
		    				echo '<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url('.base_url($promocao->destino.$promocao->nome).')"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>'.$promocao->titulo.'</h2>
									<span class="pricing">'.$promocao->valor.'</span>
									<p>'.$promocao->descricao.'</p>
								</div>
							</div>';
		    			}
		    			
		    			echo '</div>';
		    			
					}
				?>	
			</div>
		</div>

	</div>
</div>