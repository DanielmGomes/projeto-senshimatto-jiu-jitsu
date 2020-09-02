<?php if (isset($scripts)) {
      foreach ($scripts as $script_name){
        $src = base_url() . 'restrict/js/' . $script_name; ?>
        <script src="<?=$src?>"></script>
      <?php }
    } ?>

<?php echo view('template/templateAdmin/header'); ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro de Competições</h2>       
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Cartaz</th>
                                <th>Evento</th>
                                <th>Endereço</th>
                                <th>bairro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($competicao as $competicao) : ?>
                                <tr>
                                    <td><?php echo $competicao->nome; ?></td>
                                    <td><?php echo $competicao->nome; ?></td>
                                    <td><?php echo $competicao->endereco; ?></td>
                                    <td><?php echo $competicao->bairro; ?></td>

                                </tr>
                            <?php endforeach ?> 
                        </tbody>
                    </table>
                </div>
            </div>
            <button type="button" href="#" id="btn_add_competicao" class="btn btn-success" data-toggle="modal" data-target="#modal_competicao">Cadastrar</button>
        </div>
    </div>
</div>

<!-- modal -->
<div id="modal_competicao" class="modal fade">
    <div class="modal-dialog modal-x1">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">Cadastro de Competições</h4>
            </div>
            <div class="modal-body">
                <form id="form_competicao"  action="<?php echo site_url('competicao/inserir'); ?>" method="post">
                    <input name="idCompeticao" hidden>
                    <div class="form-group">
                       
                        <div class="form-row">
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                                <label for="">Evento</label>
                                <input type="text" class="form-control" name="nome">
                            </div>               
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Endereço</label>
                                <input type="text" class="form-control" name="endereco">
                            </div>  
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Bairro</label>
                                <input type="text" class="form-control" name="bairro">
                            </div>              
                        </div>

                        <div class="form-row">
					        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
						        <label for="">Estado</label>
						        <br>
                                <select class="form-control" name="estado" id="estado" required="">
									<option value="">Selecione o Estado</option>
									<?php foreach ($estado as $estado) : ?>
									<option value="<?php echo $estado->idEstado; ?>"><?php echo $estado->nome; ?></option>
									<?php endforeach ?>
								</select>
					        </div>

					        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
						        <label for="">Cidade</label>
						        <br>
                                <select class="form-control" name="cidade" id="cidade" style="" required="">
                                <?php foreach ($cidade as $cidade) : ?>
                                    <option value="">Selecione a Cidade</option>
									<option value="<?php echo $cidade->idCidade; ?>"><?php echo $cidade->nome; ?></option>
									<?php endforeach ?>
                                </select>	
					        </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Data do Evento</label>
                                <input type="date" class="form-control" name="data">
                            </div>    
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"></div>             
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                <label for="">Descrição do Evento</label>
                                <textarea class="form-control" name="descricao" placeholder="Descrição do Evento" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <input type="text" value="<?php echo ($_SESSION['idAdministrativo']); ?>" style="display: none" name="idAdministrativo">

                    <div class="form-row">
						<br>
						<div class="ln_solid"></div>
							<div class="form-group">
							    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
									<input type="submit" class="btn btn-success" value="inserir"; class="btn btn-block"/>
									<input type="reset" class="btn btn-danger" value="canccelar"/>
								</div>
							</div>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // modal -->
<?php echo view('template/templateAdmin/footer'); ?>
<?php echo view('template/templateAdmin/scripts'); ?>