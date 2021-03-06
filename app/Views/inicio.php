<?php echo view('template/header'); ?>

<!-- banner inicial do site -->
<section id="fh5co-home" data-section="home" style="background-image: url(<?php echo base_url('public/images/banner/banner01.jpg'); ?>); height: 800px;" 
data-stellar-background-ratio="0.5">
	<div class="gradient"></div>
	<div class="container">
		<div class="text-wrap">
			<div class="text-inner">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h1 class="to-animate">Controle de Competições <span>Jiu-Jitsu</span></h1>
						<h2 class="to-animate">Maior Controle e segurança para seu campeonato</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- competições em destaque -->
<section id="fh5co-services" data-section="services">
	<div class="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>Competições em destaque</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext">
							<h3 class="to-animate">Proximos Eventos a serem realizados .</h3>
						</div>
					</div>
				</div>
			</div>

			<div class="row">	
				<div class="col-md-3 text-center">
					<!-- competição em destaque 01 -->
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 01</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<form action="<?php echo site_url('competicao/cadastro_competicao'); ?>" method="post">
								<input name="idCompeticao" value='1' hidden>
								<button type="submit" class="btn btn-success">Inscrever-se</button>
							</form>
						</div>
					</div>
					<!-- // competição em destaque 01 -->

					<!-- competição em destaque  05 -->
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 05</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>
						</div>
					</div>
					<!-- // competição em destaque 05 -->
				</div>

				<div class="col-md-3 text-center">
					<!--competição em destaque 02 --> 
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 02</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<form action="<?php echo site_url('competicao/edital'); ?>" method="post">
								<input type="text" name="idCompeticao" value='1' hidden>
								<button type="submit" class="btn btn-success" value="enviar" name="enviar">Inscrever-se</button>
							</form>						
						</div>
					</div>
					<!-- // competição em destaque 02 -->

					<!-- competição em destaque 06 -->
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 06</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>
						</div>
					</div>
					<!-- // competição em destaque 06 -->
				</div>

				<div class="col-md-3 text-center">
                	<!-- competição em destaque 03 -->
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 03</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>	
						</div>
					</div>
					<!-- // competição em destaque 03 -->
					
					<!-- competição em destaque 07 -->
					<div class="box-services">
						<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 07</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>	
						</div>
					</div>
					<!-- // competição em destaque 07 -->	
				</div>
				
				<div class="col-md-3 text-center">
					<!-- competição em destaque 04 -->
					<div class="box-services">
							<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 04</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>	
						</div>
					</div>
					<!-- // competição em destaque 04 -->

					<!-- competição em destaque 08 -->
					<div class="box-services">
							<span><img src="<?php echo base_url('public/images/destaque/modelo_destaque.jpg'); ?>" alt=""></span>
						<div class="fh5co-post to-animate">
							<br>
							<h3>competição em destaque 08</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
							<button type="button" class="btn btn-success">Inscrever-se</button>	
						</div>
					</div>
					<!-- // competição em destaque 08 -->
				</div>
				
			</div>
		</div>
	</div>

<!-- nossa equipe -->

<!--
<section id="fh5co-team" class="fh5co-bg-color">
	<div class="fh5co-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>Nossa Equipe</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext">
							<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="<?php echo base_url('public/images/equipe/equipe01.png'); ?>" alt="Roger Garfield"></div>
						<h3>Roger Garfield</h3>
						<span class="position">Co-Founder, Lead Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="<?php echo base_url('public/images/equipe/equipe01.png'); ?>" alt="Roger Garfield"></div>
						<h3>Kevin Steve</h3>
						<span class="position">Co-Founder, Product Designer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-box text-center to-animate-2">
						<div class="user"><img class="img-reponsive" src="<?php echo base_url('public/images/equipe/equipe01.png'); ?>" alt="Roger Garfield"></div>
						<h3>Ross Standford</h3>
						<span class="position">Full Stack Developer</span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<ul class="social-media">
							<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
							<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
							<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
							<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->
<!-- // nossa equipe -->

<section id="fh5co-trusted" data-section="trusted">
	<div class="fh5co-trusted">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"><span>Equipes Parceiras</span></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext">
							<h3 class="to-animate">We’re trusted by these popular companies</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- patrocinador 01 -->	
				<div class="col-md-2 col-sm-3 col-xs-6 col-sm-offset-0 col-md-offset-1">
					<div class="partner-logo to-animate-2">
						<img src="<?php echo base_url('public/images/patrocinio/modelo_patrocinio.jpg'); ?>" alt="Partners" class="img-responsive">
					</div>
				</div>
				 <!-- // patrocinador 01 -->
				 <!-- patrocinador 02 -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="partner-logo to-animate-2">
						<img src="<?php echo base_url('public/images/patrocinio/modelo_patrocinio.jpg'); ?>" alt="Partners" class="img-responsive">
					</div>
				</div>
				<!-- // patrocinador 02 -->
				<!-- patrocinador 03 -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="partner-logo to-animate-2">
						<img src="<?php echo base_url('public/images/patrocinio/modelo_patrocinio.jpg'); ?>" alt="Partners" class="img-responsive">
					</div>
				</div>
				<!-- // patrocinador 03 -->
				<!-- patrocinador 04 -->
				<div class="col-md-2 col-sm-3 col-xs-6">
					<div class="partner-logo to-animate-2">
						<img src="<?php echo base_url('public/images/patrocinio/modelo_patrocinio.jpg'); ?>" alt="Partners" class="img-responsive">
					</div>
				</div>
				<!-- patrocinador 04 -->
				<!-- patrocinador 05 -->
				<div class="col-md-2 col-sm-12 col-xs-12">
					<div class="partner-logo to-animate-2">
						<img src="<?php echo base_url('public/images/patrocinio/modelo_patrocinio.jpg'); ?>" alt="Partners" class="img-responsive">
					</div>
				</div>
				<!-- // patrocinador 05 -->
			</div>
		</div>
	</div>
</section>


<?php echo view('template/footer'); ?>
<?php echo view('template/scripts'); ?>