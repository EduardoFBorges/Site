<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
        Acme | Login
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


      <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    
  </head>

  <body>
   <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">A<span>cme</span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a href="index.html">Home</a>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#"> | Empresa  | <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu">
                              <a href="#" tabindex="-1">Institucional</a>

                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="sobre.html" tabindex="-1">Quem somos</a>
                                  </li>

                                  <li>
                                    <a href="cultura-org.html">Cultura Organizacional</a>
                                  <li>
                                    <a href="reconhecimento.html">Reconhecimento</a>
                                  </li>
                                  <li>
                                      <a href="empresas-parceiras.html">Empresas Parceiras</a>
                                  </li>
                                  <li>
                                      <a href="termos-condicoes.html">Termos & Condições</a>
                                  </li>
                                  <li>
                                      <a href="politica-privada.html">Política Privada</a>
                                  </li>
                          </ul>
                              
                         <li class="dropdown-submenu">
                              <a href="#" tabindex="-1">Infraestrutura</a>

                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="servicos.html" tabindex="-1">Serviços</a>
                                  </li>

                                  <li>
                                    <a href="perfil-carga%20--.html">Perfil de Carga</a>
                                  <li>
                                    <a href="unidades.html">Unidades</a>
                                  </li>
                                  <li>
                                      <a href="seguranca.html">Segurança</a>
                                  </li>
                                  <li>
                                      <a href="frota.html">Frota</a>
                                  </li>
                          </ul>
                          </ul>
                  </li>
                  <li>
                      <a href="unidades.html">Unidades</a> 
                  </li>
                 <!-- <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Unidades <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="404.html">404 page</a>
                          </li>
                          <li>
                              <a href="faq.html">FAQ</a>
                          </li>
                      </ul>
                  </li>-->
                  <li>
                      <a href="trabalhe-conosco.html">Trabalhe conosco</a> 
                  </li>
                  <li>
                     <!-- <a href="#rodape">Fale conosco</a> -->
                      <a href="contato.html">Fale conosco</a>
                  </li>
                  <li>
                      <a href="login.php">Login</a> 
                  </li>
                  <li>
                      <a href="cadastro.php">Cadastre-se</a> 
                  </li>
                  <li><input class="form-control search" placeholder=" Pesquisar..." type="text"></li>
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Login</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
        <div class="container">
            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" id="login" name="login" action="./class/login.php" method="POST"  onsubmit="return validaLogin(); return false";>
            <h2 class="form-signin-heading">Faça seu Login agora</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Nome Usuário" autofocus="" name="nome_Usuario_Cli">
                <input type="password" class="form-control" placeholder="Senha" name="senha_CLi">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Lembre - me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Esqueceu sua senha?</a>

                    </span>
                </label>
                <button class="btn btn-lg btn-login btn-block" type="submit" name="enviar">Entrar </button>
               <!-- <p>or you can sign in via social network</p>  
                <div class="login-social-link">
                    <a href="index.html" class="facebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                    <a href="index.html" class="twitter">
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>
                </div> -->

                <div class="registration">
                    Não possui uma conta ainda?
                    <a class="" href="cadastro.php">
                        Criar uma conta
                    </a>
                </div>

            </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Esqueceu sua senha ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Entre com seu endereço de email para alterar sua senha.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button"><a href="login.html">Cancelar</a></button>
                              <button class="btn btn-success" type="button">Enviar</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          </form>
          <?php echo isset($erro) ? $erro : '';  ?>
          </div>
        </div>
    </div>
    <!--container end-->

     <!--footer start-->
     <footer id='rodape' class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              Informações de Contato
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Endereço: Av. São Miguel n° 1500 - Jardim Paulista</p>
              <p><i class="fa fa-globe pr-10"></i>São Paulo, SP </p>
              <p><i class="fa fa-mobile pr-10"></i>Telefone : (12) 95456-7890 </p>
              <p><i class="fa fa-phone pr-10"></i>Celular : (12) 95456-7890 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">empresa@empresa.br</a></p>
            </address>
          </div>
          <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
            <h1>Rede social</h1>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                 Show de bola a empresa
                  <a href="javascript:;">@exemplo</a>
                 entrega mais rápida antes do prazo previsto
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                  Equipe bem preparada
                  <a href="javascript:;">@exemplo</a>
                 Fui muito bem atendido!
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                  Cada vez mais me surpreende
                  <a href="javascript:;">@exemplo</a>
                  sempre além das minhas expectativas 
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
                Nossa empresa
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="rastreie-pedidos--.html">Rastreie seus pedidos</a>
                </li>
                  <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="ag-coleta.html">Agenda sua coleta</a>
                </li>
                  
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="prev-entrega--.html">Previsão de entregas</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="servicos.html">Serviços</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="unidades.html">Unidades</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="contato.html.">Fale conosco</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="trabalhe-conosco.html">Trabalhe conosco</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
              <h1>
                Frases
              </h1>
              <p class="text-justify">
                "Todos os seus sonhos podem se tornar realidade se você tem coragem para persegui-los".<br>
                  - Walt Disney, desenhista e empreendedor


              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; Copyright - 2016<br>
                        Desenvolvido por Lucas Martins</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

    <!-- Valida Formulario Login -->
    <script type="text/javascript">
      function validaLogin()
      {
        if(document.login.nome_Usuario_Cli.value=="")
          {
          alert("Inserir o Nome do Usuario!");
          return false;
          }
        else
          if(document.login.senha_CLi.value=="")
          {
          alert("Inserir a Senha!");
          return false;
          }
      }
    </script>

  </body>
</html>
