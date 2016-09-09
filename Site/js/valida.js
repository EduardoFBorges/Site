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