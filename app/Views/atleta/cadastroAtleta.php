<?php echo view('template/header'); ?>

<section id="fh5co-services" data-section="services">
	<div class="fh5co-services">
        <div class="container">
            <div class="row">
                <div class="board">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="competidor">
                          	<h3 class="head text-center">Cadastro de Atleta</h3>
							  <strong><?php //echo $mensagem; ?></strong>
							<form class="form-horizontal form-label-left" method="post">
								
								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-user"></i>
										<label for="">Nome Completo</i></label>
										<input type="text" class="form-control" name="nome" maxlength="60" >
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-calendar-week"></i>
										<label for="">Nascimento</label>
										<input type="date" class="form-control" name="nascimento">
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-id-card"></i>
										<label for="">CPF</label>
										 <input type="text" class="form-control" data-mask="000.000.000-00" maxlength="14" autocomplete="off" name="cpf">
									</div>
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-venus-mars"></i>
										<label for="">Sexo</label>
										<br>
										<select name="sexo" class="form-control">
											<option value="">-</option>
											<option value="masculino">Masculino</option>
											<option value="feminino">Feminino</option>
										</select>
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
										<i class="fas fa-at"></i>
										<label for="">E-mail</label>
										<input type="email" class="form-control" name="email" maxlength="60" >
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
										<select class="selectpicker form-control" data-show-subtext="true" 
										data-live-search="true" name="estado" id="estado" required="">
										<option>Selecione o Estado</option>
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
												url: 'Home/buscarCidade',
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
										<select class="selectpicker form-control" data-show-subtext="true" 
										data-live-search="true" name="cidade" id="cidade" required="">
										<option>Selecione a cidade</option>
										<?php foreach ($cidade as $cidade) : ?>
										<option value="<?php echo $cidade->idCidade; ?>"><?php echo $cidade->nome; ?></option>
										<?php endforeach ?>
										</select>									
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
									<i class="fas fa-dumbbell"></i>
									<label for="">Academia</label>
										<br>
										<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="academia" required="">
											<option value="">Selecione a Academia</option>
											<?php foreach ($academia as $academia) : ?>
											<option value="<?php echo $academia->idacademia; ?>"><?php echo $academia->nome; ?></option>
											<?php endforeach ?>
										</select>
									</div>
									
									<div class="col-md-1"></div>
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-user"></i>
										<label for="">Professor</label>
										<br>
										<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="professor" required="">
											<option value="">Selecione a Academia</option>
											<?php foreach ($professor as $professor) : ?>
											<option value="<?php echo $professor->idprofessor; ?>"><?php echo $professor->nome; ?></option>
											<?php endforeach ?>										
										</select>
									</div>
								</div>

								<div class="row">
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
										<i class="fas fa-signal"></i>
										<label for="">Faixa</label>
										<select class="selectpiker form-control" data-show-subtext="trye" data-live-search="true" name="faixa">
											<option value="">-</option>
											<option value="branca">Branca</option>
											<option value="cinza">Cinza</option>
											<option value="amarela">Amarela</option>
											<option value="laranja">Laranja</option>
											<option value="verde">Verde</option>
											<option value="azul">Azul</option>
											<option value="roxa">Roxa</option>
											<option value="marrom">Marrom</option>
											<option value="preta">Preta</option>
											<option value="coral">Coral</option>
										</select>
									</div>

									<div class="col-md-1"></div>
									
									<div class="col-md-5 col-sm-6 col-xs-12 form-group">
									<i class="fas fa-weight-hanging"></i>
										<label for="">Peso</label>
										<input type="text" class="form-control" data-mask="000,000" maxlength="7" autocomplete="off" name="peso">
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
									   
										<input type="password" name="senha" id="password" class="form-control fas fa-eye" />
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