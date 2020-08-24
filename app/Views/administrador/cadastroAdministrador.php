<?php echo view('template/header'); ?>

<section id="fh5co-services" data-section="services">
	<div class="fh5co-services">
        <div class="container">
            <div class="row">
                <div class="board">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="competidor">
                          	<h3 class="head text-center">Cadastro Administrador de Eventos</h3>

                            <strong><?php echo $mensagem; ?></strong>
							<form class="form-horizontal form-label-left" method="post">
								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-user"></i>
										<label for="">Nome Completo</i></label>
										<input type="text" class="form-control" name="nome" maxlength="60">
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
                                    <i class="fas fa-at"></i>
										<label for="">E-mail</label>
										<input type="email" class="form-control" name="email" maxlength="60" required="">
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-phone"></i>
										<label for="">Telefone</label>
										<input type="text" class="form-control" data-mask="(00) 0 0000-0000" maxlength="16" autocomplete="off" name="telefone">
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
                                    <i class="fab fa-whatsapp"></i>										
                                    <label for="">Whatsapp</label>
                                    <input type="text" class="form-control" data-mask="(00) 0 0000-0000" maxlength="16" autocomplete="off" name="whastapp">
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-map-marker-alt"></i>
										<label for="">Endereço</label>
										<input type="text" class="form-control" name="endereco">
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-map-marker-alt"></i>
										<label for="">Bairro</label>
										<input type="text" class="form-control" name="bairro">
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
										<i class="fas fa-map-marker-alt"></i>
										<label>Estado</label>
										<select class="form-control" name="estado" id="estado" required="">											
										<option value="">Selecione o Estado</option>
										<?php foreach ($estado as $estado) : ?>
										<option value="<?php echo $estado->idEstado; ?>"><?php echo $estado->nome; ?></option>
										<?php endforeach ?>
										</select>										
									</div>
									<script>
                                    /*
										$("#estado").on("change",function(){
											var idEstado = $("#estado").val();
											$.ajax({
												url: 'Administrador/buscarCidade',
												type: 'POST',
												data:{idEstado:idEstado},
                                                
												beforeSend: function(){
													$("#cidade").css({'display':'block'});
													$("#cidade").html("carregando....");
												},
												success: function(data)
												{
													$("#cidade").css({'display':'block'});
													$("#cidade").html(data);
												},
												error: function(data)
												{
													$("#cidade").css({'display':'block'});
													$("#cidade").html("erro ao carregar cidades");
												}
                                                
											});
										});
                                        */
									</script>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
										<i class="fas fa-map-marker-alt"></i>
										<label>Cidade</label>
                                        <!--
                                        <select class="form-control" name="cidade" id="cidade" style="display:none"></select>
                                        -->
										<select class="form-control" name="cidade" id="cidade" required="">											
										<option value="">Selecione a cidade</option>
										<?php foreach ($cidade as $cidade) : ?>
										<option value="<?php echo $cidade->idCidade; ?>"><?php echo $cidade->nome; ?></option>
										<?php endforeach ?>
										</select>	
                                    </div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-user"></i>
										<label for="">Usuario</label>
										<input type="text" class="form-control" name="usuario" maxlength="60" >
										<?php
										if(isset($_SESSION['duplicado'])):
											?>
											<div class="notification is-danger">
												<span class="help-block" style="color: red;">ERRO: Usuário já cadastrado.</span>
											</div>
										<?php
										endif;
										unset($_SESSION['duplicado']);
										?>
									</div>

									<div class="col-md-1"></div>

									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-key"></i>
										<label for="">Senha</label>
										<!-- js olho para mostrar senha -->
										<script>
											$(document).ready(function(){
  												$('#showPassword').on('click', function(){
    
													var passwordField = $('#password');
													var passwordFieldType = passwordField.attr('type');
													if(passwordFieldType == 'password')
													{
														passwordField.attr('type', 'text');
														$(this).val('Hide');
													} 
													else 
													{
														passwordField.attr('type', 'password');
														$(this).val('Show');
													}
  												});
											});
										</script>
									   
										<input type="password" name="senha" id="password" class="form-control fas fa-eye" / required="">
										<span class="fas fa-eye eye" id="showPassword"></span>

									</div>
								</div>

								<div class="row">
									<br>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
											<input type="submit" class="btn btn-success" value="<?php echo $acao; ?>"; class="btn btn-block"/>
											<input type="reset" class="btn btn-danger" value="canccelar"/>
										</div>
									</div>
								</div>
							</form>
                      	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php echo view('template/footer'); ?>
<?php echo view('template/scripts'); ?>