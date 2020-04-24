<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Fianto - Transformando Vidas</title>

  <meta charset="UTF-8">


  <link rel="shortcut icon" href="{{asset('img/icone.png')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/rev-settings.css')}}">

  <!-- Animate.css -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">

  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles-5.css')}}" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900&display=swap" rel="stylesheet">
  <script src="{{asset('js/mascara_telefone.js')}}"></script>
  <style>
    #top-bar {
      background-color: #148b7e !important;
    }

    .nav-menu li a {
      color: #148b7e !important;
    }

    .nav-dropdown li a {
      background-color: #148b7e !important;
      color: white !important;
    }

    #btn-cadastrar {
      border: 1px solid #148b7e;
      background-color: transparent;
      color: #148b7e;
      margin-left: auto;
      margin-right: auto;
      display: block;
      margin-bottom: 10px;
    }

    #btn-cadastrar:hover {
      border: 1px solid white;
      background-color: #148b7e;
      color: white;
    }

    .form-group label {
      color: #148b7e;

    }

    #pergunta_1_form,
    #pergunta_1_1_form,
    #pergunta_2_form,
    #pergunta_3_form,
    #pergunta_4_form,
    #adicionar_btn,
    #pergunta_5_form {
      display: none;
    }
  </style>
</head>

<body id="conteudoGeral">
<!-- Modal -->
<div class="modal fade" id="politica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Política de Privacidade.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: gray">
      A Fianto Serviços de Tecnlogia Ltda adere ao estabelecido na Lei Geral de Proteção de Dados.
LEI Nº 13.709, DE 14 DE AGOSTO DE 2018.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="busca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buscar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="busca" method="GET">
          <div class="modal-body">
            <input class="form-control" type="search" name="pesquisa" placeholder="Buscar Por...">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Buscar" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="google_translate_element" class="boxTradutor"></div>

  <!-- Preloader Start-->
  <div id="preloader">
    <div class="row loader">
      <div class="loader-icon"></div>
    </div>
  </div>
  </div>
  <!--BUSCA-->

  <!-- Button trigger modal -->

  <!-- Top-Bar START -->
  <div id="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">

          <div class="top-bar-info">
            <ul>

              <li><a href="#" style="color: white" id="btn_topo">Ir para o Topo [1]</a></li>
              <li><a href="#" style="color: white" id="btn_menu">Ir para o Menu [2]</a></li>
              <li><a href="#" style="color: white" id="btn_busca">Ir para a busca [3]</a></li>
              <li><a href="#" style="color: white" id="btn_rodape">Ir para o rodapé [4]</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-6 col-12 text-right">
          <div class="top-bar-info">
            <ul>
              <li><span style="color: white" id="auto_contraste">Auto Contraste</span></li>
              <li><a href="javascript:trocarIdioma('pt')"><img alt="português" src="{{asset('img/icone_portugues.png')}}" style="max-width: 20px"></a></li>
              <li><a href="javascript:trocarIdioma('en')"><img alt="ingles" src="{{asset('img/icone_ingles.png')}}" style="max-width: 20px"></a></li>
              <li><a href="javascript:trocarIdioma('es')"><img alt="espanhol" src="{{asset('img/icone_espanhol.png')}}" style="max-width: 20px"></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top-Bar END -->


  <div style="width: 100%;display:flex; flex-direction: column; align-items: center; justify-content: center">
    <span style="text-align:center;font-size: 30px;color: #148b7e;font-family: Heebo;margin-top: 20px;">Sistema Proteja</span>

    <div class="cadastro" style="padding-right: 15px;width: 50vw;margin-bottom: 50px;box-shadow: 10px 10px 10px rgba(0,0,0,.2)">

      <div class="row">
      <div class="col-sm-12 col-lg-4" style="background-color: #148b7e; display: flex;flex-direction: column;padding-top: 15px">
        <span style="font-weight: bold;font-size: 20px;margin-bottom: 20px"><a href="/painel" style=" color:white;">Painel</a></span>

            <div style="background-color: rgba(255,255,255,.5);padding: 5px">
              <img src="{{asset('img/Fianto_horizontal_positiva.png')}}" alt="">
            </div>
            <div class="row mt-30">
              <div class="col-12">
                <span style="font-weight: 500;font-size: 16px; color:white;margin-bottom: 20px">Dados do usuário</span>
                <ul style="font-size: 12px;">
                  <li style="color: white">Nome: <span style="color: white">{{Request::session()->get('nome')}}</span></li>
                  <li style="color: white">E-mail: <span style="color: white">{{Request::session()->get('email')}}</span></li>
                  <li style="margin-top: 5px"><a href="{{route('logout')}}" class="btn btn-sm btn-danger" style="font-size: 12px">Sair</a></li>
                </ul>
              </div>
            </div>

                <p style="font-size: 10px;color: white;position: absolute;bottom: 0;left:calc(50% - 40px);">versão beta 1.1</p>

        </div>
        <div class="col-sm-12 col-lg-8">
          <form style="margin-top: 10px" id="form" action="{{route('cadastro.endereco')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control" required id="nome" name="nome" placeholder="" value="{{$result[0]->nome}}">
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" disabled="disabled" id="cpf" nome="cpf" placeholder="" value="{{$result[0]->cpf}}">
            </div>
            <div class="form-group">
              <label for="data">Data de nascimento</label> 
              <input class="form-control" name="data" required id="data" type="date">
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" required maxlength="15" id="telefone" name="telefone" placeholder="">
            </div>
            <div class="form-group">
              <label for="cep">CEP</label>
              <input type="text" class="form-control" required id="cep" name="cep">
              <small style="color: darkred">Insira o cep sem a pontuação</small>
            </div>
            <div class="form-group">
              <label for="logradouro">Endereço</label>
              <input type="logradouro" class="form-control" required id="logradouro" name="logradouro">
            </div>
            <div class="form-group">
              <label for="uf">Estado</label>
              <input type="uf" class="form-control" id="uf" required name="uf" placeholder="">
            </div>
            <div class="form-group">
              <label for="localidade">Cidade</label>
              <input type="localidade" class="form-control" required id="localidade" name="localidade" placeholder="">
            </div>
            <div class="form-group">
              <label for="bairro">Bairro</label>
              <input type="bairro" class="form-control" required id="bairro" name="bairro" placeholder="">
            </div>
            <div class="form-group">
              <label for="numero">Número</label>
              <input type="numero" class="form-control" required id="numero" name="numero" placeholder="">
            </div>


            <input type="text" class="form-control" id="lat" name="lat" required style="display: none">
            <input type="text" class="form-control" id="lng" name="lng" required style="display: none">
            <input type="text" class="form-control" value="{{Session::get('idUsuario')}}" id="cod" name="cod" style="display: none">

            <button type="submit" class="btn btn-success center" id="btn-cadastrar">Finalizar cadastro</button>
          </form>
        </div>
      </div>
    </div>



  </div>




 <!-- Footer START -->
 <footer id="footer">
    <div class="container">
      <div class="row">
        <!-- Column 1 Start -->
        <div class="col-md-4 col-sm-6 col-12">
          
          <div class="">
            <img src="{{asset('img/Fianto_horizontal_negativa.png')}}" style="max-width: 213px" alt="footer-logo">
            <p class="mt-15" style="font-size: 15px">Vamos juntos transformar a vida das pessoas! </p>
            <div class="footer-social-icons mt-25">
              <ul>
                <li><a href="https://fb.me/fianto.oficial"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/fianto.oficial/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/65253665/"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Column 1 End -->

        <!-- Column 2 Start -->
        <div class="col-md-3 col-sm-6 col-12">
          <h3 class="mt-25">Contatos</h3>
          <ul class="footer-list">
            <li><i class="icon-telemarketer"></i> &nbsp;(61) 9 8288 3525</li>
            <li><i class="icon-mail-2"></i> &nbsp;contato@fianto.com.br</li
          </ul>
        </div>
        <!-- Column 2 End -->

        <!-- Column 3 Start -->
        <div class="col-md-3 col-sm-6 col-12">
          <h3 class="mt-25">Posts Recentes</h3>
          <div class="mt-25">
            
            <!-- Post Start -->
            <div class="footer-recent-post clearfix">
              <div class="footer-recent-post-thumb">
                <img src="{{asset('img/143019202004165e986bfb02601.jpeg')}}" alt="img">
              </div>
              <div class="footer-recent-post-content">
                <span>01 Apr 2020</span>
                <a href="https://fianto.com.br/blog/post?id=25">Plataforma Colaborativa Protej...</a>
              </div>
            </div>
            <!-- Post End -->
            
            <!-- Post Start -->
            <!-- <div class="footer-recent-post clearfix">
              <div class="footer-recent-post-thumb">
                <img src="http://via.placeholder.com/65x65" alt="img">
              </div>
              <div class="footer-recent-post-content">
                <span>20 de Fevereiro de 2020</span>
                <a href="#">Informação 1</a>
              </div>
            </div> -->
            <!-- Post End -->
            <!-- Post Start -->
            <!-- <div class="footer-recent-post clearfix">
              <div class="footer-recent-post-thumb">
                <img src="http://via.placeholder.com/65x65" alt="img">
              </div>
              <div class="footer-recent-post-content">
                <span>20 de Fevereiro de 2020</span>
                <a href="#">Informação 1</a>
              </div>
            </div> -->
            <!-- Post End -->
          </div>
        </div>
        <!-- Column 3 End -->
        <!-- Column 4 Start -->
        <div class="col-md-2 col-sm-6 col-12">
          <h3 class="mt-25">Tags</h3>
          <div class="footer-tags mt-25">
            
            <a href="#">sistema</a>
            <a href="#">proteja</a>
            <a href="#">covid-19</a>
            <a href="#">startup</a>
            <a href="#">inovacao</a>
            
          </div>
        </div>
        <!-- Column 4 End -->
      </div>
      <div class="row">
        <div class="col-12 text-center" style="color: white;font-weight: 100;font-size: 14px">Fianto Serviços de Tecnologia Ltda © 2020 - Todos os direitos reservados. </div>
      </div>
      <div class="row">
        <div class="col-12 text-center" style="color: white;font-weight: 100;font-size: 10px;"><a href="" data-toggle="modal" data-target="#politica" style="font-weight: 400;color: white">Política de Privacidade</a></div>
      </div>
    </div>
  </footer>
  <!-- Footer END -->




  <!-- Scroll to top button Start -->
  <a href="#" class="search" id="btn_busca" data-toggle="modal" data-target="#busca"><i class="icon-search-1" aria-hidden="true"></i></a>
  <!-- Scroll to top button Start -->
  <a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <!-- Scroll to top button End -->


  <!-- Jquery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>

  <!--Popper JS-->
  <script src="{{asset('js/popper.min.js')}}"></script>

  <!-- Bootstrap JS-->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <!-- Owl Carousel-->
  <script src="{{asset('js/owl.carousel.js')}}"></script>

  <!-- Navbar JS -->
  <script src="{{asset('js/navigation.js')}}"></script>
  <script src="{{asset('js/navigation.fixed.js')}}"></script>

  <!-- Wow JS -->
  <script src="{{asset('js/wow.min.js')}}"></script>

  <!-- Countup -->
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>

  <!-- Tabs -->
  <script src="{{asset('js/tabs.min.js')}}"></script>

  <!-- Yotube Video Player -->
  <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>

  <!-- Swiper Slider -->
  <script src="{{asset('js/swiper.min.js')}}"></script>

  <!-- Isotop -->
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>

  <!-- Switcher JS -->
  <script src="{{asset('js/switcher.js')}}"></script>

  <!-- Modernizr -->
  <script src="{{asset('js/modernizr.js')}}"></script>

  <!-- Chart JS -->
  <script src="{{asset('js/Chart.bundle.js')}}"></script>
  <script src="{{asset('js/utils.js')}}"></script>

  <!-- Revolution Slider -->
  <script src="{{asset('js/revolution/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.actions.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.carousel.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.kenburn.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.layeranimation.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.migration-2.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.parallax.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.navigation.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.slideanims.min.js')}}"></script>
  <script src="{{asset('js/revolution/revolution.extension.video.min.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('js/main.js')}}"></script>

  <script src="https://www.google.com/jsapi"></script>


  <!--TRADUÇÃO -->
  <!-- <script src="{{asset('js/locales.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
          var pt = "pt-br";
          var es = "es";
          var en = "en";
            $('#pt').click(function (){
              $(document).translate(pt);
              sessionStorage.setItem('linguagem' , 'pt-br');
            });
            $('#es').click(function (){
              $(document).translate(es);
              sessionStorage.setItem('linguagem' , 'es');
            });
            $('#en').click(function (){
              $(document).translate(en);
              sessionStorage.setItem('linguagem' , 'en');
            });
            if(!sessionStorage.linguagem){
              sessionStorage.setItem('linguagem' , 'pt-br');
              $(document).translate(sessionStorage.getItem("linguagem"))
            }else{
              $(document).translate(sessionStorage.getItem("linguagem"))
            }
        });
    </script> -->
  <script type="text/javascript">
    var comboGoogleTradutor = null; //Varialvel global

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'pt,en,es',
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
      }, 'google_translate_element');

      comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
    }

    function changeEvent(el) {
      if (el.fireEvent) {
        el.fireEvent('onchange');
      } else {
        var evObj = document.createEvent("HTMLEvents");

        evObj.initEvent("change", false, true);
        el.dispatchEvent(evObj);
      }
    }

    function trocarIdioma(sigla) {
      if (comboGoogleTradutor) {
        comboGoogleTradutor.value = sigla;
        changeEvent(comboGoogleTradutor); //Dispara a troca
      }
    }
    

    var conteudoGeral = document.getElementById("conteudoGeral");
    var auto_contraste = document.getElementById("auto_contraste");
    var h1 = document.querySelectorAll("h1");
    var h2 = document.querySelectorAll("h2");
    var h3 = document.querySelectorAll("h3");
    var h4 = document.querySelectorAll("h4");
    var h5 = document.querySelectorAll("h5");
    var h6 = document.querySelectorAll("h6");
    var div = document.querySelectorAll("div");
    var section_block = document.getElementsByClassName('section-block');
    var section_block_black = document.getElementsByClassName('section-block-black');
    var section_heading_h3 = document.getElementById('section-heading-h3');
    var icone = document.querySelectorAll('.feature-flex-square-icon i');
    var textoIcone = document.querySelectorAll('.feature-flex-content h4');
    var estilo = document.getElementById('colors');

    $(document).ready(() => {
      //ATALHOS TECLADO

      $(document).keydown(function(e) {
        if (e.keyCode == 49 && e.altKey) {
          $('html, body').animate({
            scrollTop: 0
          })
        }
        if (e.keyCode == 50 && e.altKey) {
          $('html, body').animate({
            scrollTop: 0
          })
        }
        if (e.keyCode == 51 && e.altKey) {
          $('.search').trigger('click');
        }
        if (e.keyCode == 52 && e.altKey) {
          $('html, body').animate({
            scrollTop: ($('#footer').offset().top) + 200
          })
        }
      });

      //Formatando a data
      function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    // charAt -> retorna o caractere posicionado no índice especificado
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
      // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
      // instStr.search(expReg);
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        // substring(indice1,indice2)
        // indice1, indice2 -> será usado para delimitar a string
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}


      //FIM ATALAHOS DO TECLADO
      //Animação de pontos Ancoras
      $("#btn_topo").click(() => {
        $('html, body').animate({
          scrollTop: ($('#top_bar').offset().top) + 200
        })
      });
      $("#btn_menu").click(() => {
        $('html, body').animate({
          scrollTop: ($('#nav_transparent').offset().top) + 200
        })
      });
      $("#btn_busca").click(() => {
        $('html, body').animate({
          scrollTop: ($('#busca').offset().top) + 200
        })
      });
      $("#btn_rodape").click(() => {
        $('html, body').animate({
          scrollTop: ($('#footer').offset().top) + 200
        })
      });
      //Termino de animação ponto Ancoras
    });

    if (!sessionStorage.getItem("auto_contraste")) {
      sessionStorage.setItem("auto_contraste", "false");
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5e7cfbae69e9320caabd62a4/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>

  <script>
    var form = document.getElementById('form');
    var pergunta1 = document.getElementById('pergunta_1_form');
    var pergunta1_1 = document.getElementById('pergunta_1_1_form');
    var pergunta2 = document.getElementById('pergunta_2_form');
    var pergunta3 = document.getElementById('pergunta_3_form');
    var pergunta4 = document.getElementById('pergunta_4_form');
    var pergunta5 = document.getElementById('pergunta_5_form');
    var adicionar = document.getElementById('adicionar');
    var adicionar_btn = document.getElementById('adicionar_btn');
    var nome = document.getElementById('nome');
    var cpf = document.getElementById('cpf');
    var data = document.getElementById('data');
    var telefone = document.getElementById('telefone');
    var cep = document.getElementById('cep');
    var logradouro = document.getElementById('logradouro');
    var uf = document.getElementById('uf');
    var localidade = document.getElementById('localidade');
    var bairro = document.getElementById('bairro');
    var numero = document.getElementById('numero');
    var lat = document.getElementById('lat');
    var lng = document.getElementById('lng');
    var botao = document.getElementById('btn-cadastrar');



    botao.addEventListener("click", function(event) {
            var regex = /-/ig;
            if (regex.test(cep.value)) {
              alert("Somente números no campo cep!")
              event.preventDefault();
            }
            if(lat.value == "" && lng.value == ""){
              alert("Ocorreu um erro ao validar sua localização, por favor clique novamente em 'finalizar cadastro'");
              event.preventDefault();
            }
    })


  </script>
  <!--End of Tawk.to Script-->

  <!-- script de endereço   -->
  <script>
    let posicao = []

    $('#cep').blur(() => {
      $.getJSON(`https://viacep.com.br/ws/${$('#cep').val()}/json/unicode/`, data => {

        $('#logradouro').val(data.logradouro)
        $('#uf').val(data.uf)
        $('#localidade').val(data.localidade)
        $('#bairro').val(data.bairro)
        $('#endereco').val(data.logradouro)

        $.getJSON(`https://maps.googleapis.com/maps/api/geocode/json?address=${data.logradouro +',' + data.bairro + ',' + data.localidade + ',' + data.estado}&key=AIzaSyCD2Pt6Rzn27Bchdk_Hdq1Q7mudbwXHFCE`, element => {

          $('#lat').val(element.results[0].geometry.location.lat)
          $('#lng').val(element.results[0].geometry.location.lng)
        })
      })
    })
  </script>
</body>

</html>