<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrativo Senshimatto</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('restrict/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('restrict/css/nprogress.css'); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('restrict/css/custom.min.css'); ?>" rel="stylesheet">

    <?php if (isset($styles)) {
      foreach ($styles as $style_name){
        $href = base_url() . 'restrict/css/' . $style_name; ?>
        <link href="<?=$href?>" rel="stylesheet">
      <?php }
    } ?>

    <?php if (isset($scripts)) {
      foreach ($scripts as $script_name){
        $src = base_url() . 'restrict/js/' . $script_name; ?>
        <script src="<?=$src?>"></script>
      <?php }
    } ?>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="login_form" action="<?php echo site_url('administrador/login'); ?>" method="post">
              <h1>Senshimato</h1>
              <div>
                <input type="text" placeholder="usuario" id="username" name="username" class="form-control">
                <span class="help-block"></span>
              </div>
              <div>
                <input type="password" placeholder="senha" name="password" class="form-control">
              </div>
              <div>
                <button type="submit" id="btn-login" value="enviar" class="btn btn-block">Login</button>
                <span class="help-block"></span>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />
                <h1><?php echo $mensagem; ?></h1>

                <div>
                  <h1>Controle Administrativo Senshimatto</h1>
                  <p>©2019 Todos os direitos reservados | Desenvolvido por Daniel Gomes</p>
                </div>
                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
