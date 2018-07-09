<div id="fh5co-contact" data-section="reservation">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate" style="color: #FFF">Contato</h2>
				<p class="sub-heading to-animate">Nos envie uma menssagem com sugestões, dúvidas ou críticas.</p>
			</div>
		</div>
		 <div id="map" style=" height: 400px;width: 100%;"></div>
		    <script>
		      function initMap() {
		        var uluru = {lat: -15.480143, lng: -44.368136};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 18,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeklxQKpYWybu2tENd4ZcZXtngCUSbsQc&callback=initMap">
		    </script>
		<div class="row">
			<div class="col-md-6 to-animate-2">
				<h3 style="color: #FFF">Informações de Contato</h3>
				<ul class="fh5co-contact-info">
					<li class="fh5co-contact-address " style="color: #FFF">
						Av. Conego Ramiro Leite, 725, Centro, Januaria, MG, CEP 39480-000, Brasil
					</li>
					<li style="color: #FFF"></i>Tel: (38) 9806-8744 / (38) 99150-6339</li>
				</ul>
			</div>
			<div class="col-md-6 to-animate-2">
				<h3 style="color: #FFF">Contate-nos</h3>
				<div class="form-group ">
					<label for="name" class="sr-only">Nome</label>
					<input id="name" class="form-control" placeholder="Name" type="text">
				</div>
				<div class="form-group ">
					<label for="email" class="sr-only">Email</label>
					<input id="email" class="form-control" placeholder="Email" type="email">
				</div>
				<div class="form-group ">
					<label for="assunto" class="sr-only">Assunto</label>
					<input id="assunto" class="form-control" placeholder="Assunto" type="text">
				</div>


					
				<div class="form-group ">
					<label for="message" class="sr-only">Mensagem</label>
					<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group ">
					<input class="btn btn-primary" value="Enviar Mensagem" type="submit">
				</div>
			</div>
		</div>
	</div>
</div>

</div>
