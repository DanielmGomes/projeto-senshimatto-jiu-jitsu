<div id="fh5co-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-4 to-animate">
				<h3 class="section-title">Sobre Nós</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
				<p class="copy-right">&copy; 2019 SenshiMatto - Competições. <br>Todos os direitos são reservados. <br>
					Designed by <a href="" target="_blank">Daniel Gomes</a>
				</p>
			</div>
			<div class="col-md-4 to-animate">
				<h3 class="section-title">Entre em contato</h3>
				<ul class="contact-info">
					<li><i class="fas fa-phone"></i>(35) 9 9999-9999</li>
					<li><i class="fas fa-envelope-square"></i><a href="#">contato@senshimatto.com</a></li>
					<li><i class="fas fa-at"></i><a href="<?php echo base_url('home'); ?>">www.senshimatto.com</a></li>
				</ul>
				<h3 class="section-title">Nossas redes sociais</h3>
				<ul class="social-media">
					<li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
					<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#" class="dribbble"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#" class="dribbble"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4 to-animate">
				<h3 class="section-title">Fale conosco</h3>

				<form class="contact-form" id="form_contato" action="<?= site_url(); ?>" method="post">
					<div class="form-group">
						<label for="name" class="sr-only">Name</label>
						<input type="name" class="form-control" id="name" placeholder="Nome" name="nome">
					</div>
					<div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
					</div>
					<div class="form-group">
						<label for="message" class="sr-only">Message</label>
						<textarea class="form-control" id="message" rows="7" placeholder="Mensagem" name="mensagem"></textarea>
					</div>
					<div class="form-group">
						<input type="button" id="btn-submit" class="btn btn-send-message btn-md" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
