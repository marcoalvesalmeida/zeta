<div id="fh5co-menus" data-section="menu">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Cardápio</h2>
				<p class="sub-heading to-animate">Pessoas que adoram comer são sempre as melhores pessoas!</p>
			</div>
		</div>
		<div class="row row-padded">

			<?php
				$cat=NULL;
				foreach ($resultado2 as $cardapio) {
					if($cat!=$cardapio->categoria && $cat!=NULL){
						echo '
							</ul>
							</div>
							</div>
						';
					}

					if($cat!=$cardapio->categoria){
						echo '
						<div class="col-md-8 col-md-offset-2  class="col-lg-8 col-lg-offset-2">
							<div class="fh5co-food-menu to-animate-2">
								<h2>'.$cardapio->categoria.'</h2>
								<ul>
								';
					}echo '
								<li>
									<div class="fh5co-food-desc">
										<div>
											<h3>'.$cardapio->titulo.'</h3>
											<p>';
												$cont=0;
												foreach ($resultado3 as $ingredientes) {
													if ($cardapio->id == $ingredientes->cardapio) {
														if ($cont==0) {
															echo $ingredientes->nome;
														}else{
															echo ', '.$ingredientes->nome;
														}
														$cont++;
													}
												    
												}echo ' </p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
										'.$cardapio->valor.'
									</div>
								</li>
							';

					
					$cat=$cardapio->categoria;
				}?>
				</ul>
			  </div>
			</div>
		
		</div>
	</div>
</div>