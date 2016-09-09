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
    <?php
      include_once("menu.php");
    ?>
   
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Registro</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Registro</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">

            <form class="form-signin wow fadeInUp" id="cadastro" name="cadastro" action="./class/cadastrar.php" method="post" onsubmit="return validaFormulario(); return false;">
                <h2 class="form-signin-heading">Criar Conta</h2>
                <div class="login-wrap">
                    <p>Cadastre-se sua Empresa</p>
                    <input name="razao_Social_CLi" type="text" class="form-control" placeholder="Razão Social*" autofocus="" >

                    <input name="nome_Fantasia_CLi" type="text" class="form-control" placeholder="Fantasia*" autofocus="" >

                    <input name="cnpj_CLi" type="text" class="form-control" placeholder="CNPJ*" autofocus="" >

                    <input name="rua_Cli" type="text" class="form-control" placeholder="Rua*" autofocus="" >

                    <input name="numero_Cli" type="text" class="form-control" placeholder="Número*" autofocus="">
    
                    <input name="bairro_CLi" type="text" class="form-control" placeholder="Bairro*" autofocus="" >
                
                    <p>Escolha o Centro de Distribuição mais próximo de você!</p>
                    <select name="fk_Cnpj_Centro_Dist" id="CD">
                      <option value="0">Centro de Distribuição</option>
                      <option value="1">São Paulo</option>
                      <option value="2">Santos</option>
                      <option value="3">Campinas</option>
                      <option value="4">Ribeirão Preto</option>
                      <option value="5">Marilia</option>
                      <option value="6">Presidente Prudente</option>
                    </select>
                    <br/><br/>
                    <select name="fk_Id_Cidade" id="Cidades">
                      <option data-regiao="0" value="">Cidade</option>   
                      <option data-regiao="1" value="1">Mogi</option>
                      <option data-regiao="1" value="1">Osasco</option> 
                      <option data-regiao="2" value="2">Guarujá</option>  
                      <option data-regiao="2" value="2">Taubaté</option>                     
                      <option data-regiao="3" value="3">Americana</option>
                      <option data-regiao="3" value="3">Jundiaí</option>
                      <option data-regiao="4" value="4">Jeriquara</option>
                      <option data-regiao="4" value="4">Franca</option>
                      <option data-regiao="5" value="5">Araraquara</option>
                      <option data-regiao="5" value="5">Bauru</option>                       
                      <option data-regiao="6" value="6">Mirassol</option>                   
                      <option data-regiao="6" value="6">Ouro Verde</option>
                     
                    </select>
                    <br/><br/>

                    <input name="fone_Cli" type="text" class="form-control" placeholder="Telefone*" autofocus="" >

                    <input name="email_CLi" type="email" class="form-control" placeholder="Email*" autofocus="" >
                    <!--<div class="radios">
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="male-radio" id="radio-01" value="1" type="radio" checked=""> Masculino
                        </label>
                        <label class="label_radio col-lg-6 col-sm-6" for="radio">
                            <input name="female-radio" id="radio-02" value="1" type="radio"> Feminino
                        </label>
                    </div>-->

                    <p>Digite os detalhes da conta abaixo</p>
                    <input name="nome_Usuario_Cli" type="text" class="form-control" placeholder="Nome para Login*" autofocus="" >
                    <input name="senha_CLi" type="password" class="form-control" placeholder="Criar uma senha*" >

                    <label class="checkbox">
                        <input name="" type="checkbox" value="ATIVO" checked="checked"> Eu concordo com os Termos de Serviço e <a href="politica-privada.html">Política de Privacidade</a>
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit" name="enviar">Enviar</button>

                    <div class="registration">
                        Já possui uma Conta ?
                        <a class="" href="login.php">
                            Login
                        </a>
                    </div>
                </div>
            </form>

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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>

    
    <script type="text/javascript">
      //valida form co cadastro da empresa
      function validaFormulario()
      {
        if(document.cadastro.razao_Social_CLi.value=="")
          {
          alert("O Campo Razão Social é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.nome_Fantasia_CLi.value=="")
          {
          alert("O Campo Fantasia é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.cnpj_CLi.value=="")
          {
          alert("O Campo CNPJ é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.rua_Cli.value=="")
          {
          alert("O Campo Rua é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.numero_Cli.value=="")
          {
          alert("O Campo Número é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.bairro_CLi.value=="")
          {
          alert("O Campo Bairro é obrigatório!");
          return false;
          }
        else 
          if(document.cadastro.fone_Cli.value=="")
          {
          alert("O Campo Telefone é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.email_CLi.value=="")
          {
          alert("O Campo Email é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.nome_Usuario_Cli.value=="")
          {
          alert("O Campo Login é obrigatório!");
          return false;
          }
        else
          if(document.cadastro.senha_CLi.value=="")
          {
          alert("Digite uma senha!");
          return false;
          }          
        return true;
      }       

      // Fim do JavaScript que valida os campos obrigatórios -

    </script>

    <script type="text/javascript">
      // Script para selecionar as cidades em função do Centro de Distribuição selecionado 
     
        $(window).load(function(){
          var cd = $('select[name="fk_Id_Cidade"] option');
                  $('select[name="fk_Cnpj_Centro_Dist"]').on('change', function () {
                      var fk_Cnpj_Centro_Dist = this.value;
                      var novoSelect = cd.filter(function () {
                          return $(this).data('regiao') == fk_Cnpj_Centro_Dist;
                      });
                      $('select[name="fk_Id_Cidade"]').html(novoSelect);
                  });
        });
    </script>
    
  </body>
</html>
