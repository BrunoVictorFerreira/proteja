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

    #pergunta_1_1_form{
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
    <p style="text-align:center;font-size: 30px;color: #148b7e;font-family: Heebo;margin-top: 10px;">Sistema Proteja</p>
    <div class="cadastro" style="padding-right: 15px;width: 50vw;margin-bottom: 50px;box-shadow: 10px 10px 10px rgba(0,0,0,.2)">

    <div class="row">
        <div class="col-sm-12 col-lg-4" style="padding-bottom: 50px;background-color: #148b7e; display: flex;flex-direction: column;padding-top: 15px">
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

          <form action="{{route('cadastro.assistencia')}}" style="margin-top: 10px" id="form" method="post">
          {{ csrf_field() }}


          <div class="form-group" id="pergunta_6_form">
              <label>
                5 - Informe-nos sobre seu isolamento social
              </label>
              <div class="custom-control custom-radio">
                <input type="radio" id="nao_realizei" name="pergunta_6" class="custom-control-input" value="nao_realizei">
                <label class="custom-control-label" for="nao_realizei">Não realizei isolamento social até o momento</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="1" name="pergunta_6" class="custom-control-input" value="1">
                <label class="custom-control-label" for="1">01 dia de isolamento</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="3" name="pergunta_6" class="custom-control-input" value="3">
                <label class="custom-control-label" for="3">03 a 06 dias de isolamento social</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="6" name="pergunta_6" class="custom-control-input" value="6">
                <label class="custom-control-label" for="6">06 a 09 dias de isolamento social</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="9" name="pergunta_6" class="custom-control-input" value="9">
                <label class="custom-control-label" for="9">09 a 12 dias de isolamento social</label>
              </div>   
              <div class="custom-control custom-radio">
                <input type="radio" id="12" name="pergunta_6" class="custom-control-input" value="12">
                <label class="custom-control-label" for="12">12 a 15 dias de isolamento social</label>
              </div>   
              <div class="custom-control custom-radio">
                <input type="radio" id="15" name="pergunta_6" class="custom-control-input" value="15">
                <label class="custom-control-label" for="15">15 dias de isolamento social ou mais</label>
              </div>   
              <div class="custom-control custom-radio">
                <input type="radio" id="30" name="pergunta_6" class="custom-control-input" value="30">
                <label class="custom-control-label" for="30">30 dias de isolamento social ou mais</label>
              </div>   

          </div>
            
          <div class="form-group" id="pergunta_7_form">
              <label>
                6 - Se você estiver em isolamento social, quantas pessoas encontram-se em isolamento com você?
              </label>
              <div class="custom-control custom-radio">
                <input type="radio" id="1_pessoa" name="pergunta_7" class="custom-control-input" value="1">
                <label class="custom-control-label" for="1_pessoa">Até 01 pessoa</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="2_pessoas" name="pergunta_7" class="custom-control-input" value="2">
                <label class="custom-control-label" for="2_pessoas">Até 02 pessoas</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="3_pessoas" name="pergunta_7" class="custom-control-input" value="3">
                <label class="custom-control-label" for="3_pessoas">Até 03 pessoas</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="4_pessoas" name="pergunta_7" class="custom-control-input" value="4">
                <label class="custom-control-label" for="4_pessoas">Até 04 pessoas</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="5_pessoas" name="pergunta_7" class="custom-control-input" value="5">
                <label class="custom-control-label" for="5_pessoas">Até 05 pessoas</label>
              </div>   
              <div class="custom-control custom-radio">
                <input type="radio" id="mais_5_pessoas" name="pergunta_7" class="custom-control-input" value="mais_5">
                <label class="custom-control-label" for="mais_5_pessoas">Mais de 05 pessoas</label>
              </div>     

          </div>

          <div class="form-group" id="pergunta_8_form">
              <label>
              7 - Você considera que suas condições de isolamento ajudam a combater a Pandemia causada pelo Coronavírus (COVID-19)?
              </label><br>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="sim" name="opniao" value="sim" class="custom-control-input">
                <label class="custom-control-label" for="sim">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="nao" name="opniao" value="nao" class="custom-control-input">
                <label class="custom-control-label" for="nao">Não</label>
              </div>
            </div>


            <div class="form-group" id="pergunta_9_form">
              <label for="pergunta_9">
                8 - Você declara  precisar de alguma assistência em sua residência, marque abaixo a sua necessidade imediata.
              </label>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="nao_preciso" name="pergunta_9[]" class="custom-control-input" value="nao_preciso">
                <label class="custom-control-label" for="nao_preciso">Não preciso de assistência</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="financeira" name="pergunta_9[]" class="custom-control-input" value="Financeira">
                <label class="custom-control-label" for="financeira">Financeira</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="alimenticia" name="pergunta_9[]" class="custom-control-input" value="Alimentícia">
                <label class="custom-control-label" for="alimenticia">Alimentícia</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="farmaceutica" name="pergunta_9[]" class="custom-control-input" value="Farmacêutica">
                <label class="custom-control-label" for="farmaceutica">Farmacêutica</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="hospitalar" name="pergunta_9[]" class="custom-control-input" value="Hospitalar">
                <label class="custom-control-label" for="hospitalar">Hospitalar</label>
              </div>   
              <div class="custom-control custom-checkbox">
                <input type="checkbox" id="psicologica" name="pergunta_9[]" class="custom-control-input" value="psicologica">
                <label class="custom-control-label" for="psicologica">Psicológica</label>
              </div>   
            </div>

            <div class="form-group" id="pergunta_10_form">
              <label for="pergunta_10">
                9 - Qual seu grau de satisfação em relação as medidas adotadas pelo Prefeito Municipal em relação ao controle do Coronavírus (COVID-19) em sua cidade.
              </label>
              <div class="custom-control custom-radio">
                <input type="radio" id="muito_satisfeito" name="pergunta_10" class="custom-control-input" value="muito_satisfeito">
                <label class="custom-control-label" for="muito_satisfeito">Muito Satisfeito</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="satisfeito" name="pergunta_10" class="custom-control-input" value="satisfeito">
                <label class="custom-control-label" for="satisfeito">Satisfeito</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="insatisfeito" name="pergunta_10" class="custom-control-input" value="insatisfeito">
                <label class="custom-control-label" for="insatisfeito">Insatisfeito</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="muito_insatisfeito" name="pergunta_10" class="custom-control-input" value="muito_insatisfeito">
                <label class="custom-control-label" for="muito_insatisfeito">Muito Insatisfeito</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="nao_sei" name="pergunta_10" class="custom-control-input" value="nao_sei">
                <label class="custom-control-label" for="nao_sei">Não sei dizer</label>
              </div>    
            </div>

            <div class="form-group" id="pergunta_11_form">
              <label for="pergunta_11">
                11 - Em caso de urgência, você gostaria de ser um voluntário, autorizando-nos a enviar mensagens e e-mails?
              </label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="sim_volun" name="voluntario" value="SIM" class="custom-control-input">
                <label class="custom-control-label" for="sim_volun">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="nao_volun" name="voluntario" value="NÃO" class="custom-control-input">
                <label class="custom-control-label" for="nao_volun">Não</label>
              </div>
            </div>
            <button type="submit" class="btn btn-success center" id="btn-cadastrar">Enviar dados para o Proteja</button>
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
    $('.upload-form').blur((e) => {
      alert('file size is correct- ' + fileSize + ' bytes');

      if ($('.upload-file').get(0).files.length) {
        var fileSize = $('.upload-file').get(0).files[0].size; // in bytes

        if (fileSize > maxSize) {
          alert('file size is more then' + maxSize + ' bytes');
          return false;
        } else
          alert('file size is correct- ' + fileSize + ' bytes');

      } else {
        alert('choose file, please');
        return false;
      }

    });

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

      $('#nao_preciso').on("click", function(){
        if($("#nao_preciso").is(":checked")){
          $("#financeira").prop("disabled", true);
          $("#alimenticia").prop("disabled", true);
          $("#farmaceutica").prop("disabled", true);
          $("#hospitalar").prop("disabled", true);
          $("#psicologica").prop("disabled", true);
          $("#financeira").prop("checked", false);
          $("#alimenticia").prop("checked", false);
          $("#farmaceutica").prop("checked", false);
          $("#hospitalar").prop("checked", false);
          $("#psicologica").prop("checked", false);

        }else{
          $("#financeira").prop("disabled", false);
          $("#alimenticia").prop("disabled", false);
          $("#farmaceutica").prop("disabled", false);
          $("#hospitalar").prop("disabled", false);
          $("#psicologica").prop("disabled", false);
        }

        
      })
      


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

      if (sessionStorage.getItem("auto_contraste") == "true") {
        $('#colors').attr('href', "{{asset('css/styles-5-contrast.css')}}");
      } else {
        $('#colors').attr('href', "{{asset('css/styles-5.css')}}");
      }
      $('#auto_contraste').click(() => {
        if (sessionStorage.getItem("auto_contraste") == "true") {
          sessionStorage.setItem('auto_contraste', 'false');
          $('#colors').attr('href', "{{asset('css/styles-5.css')}}");
        } else {
          sessionStorage.setItem('auto_contraste', 'true');
          $('#colors').attr('href', "{{asset('css/styles-5-contrast.css')}}");
        }
      });
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
    var endereco = document.getElementById('endereco');
    var estado = document.getElementById('estado');
    var cidade = document.getElementById('cidade');
    var rua = document.getElementById('rua');
    var numero = document.getElementById('numero');
    var botao = document.getElementById('btn-cadastrar');


    botao.addEventListener("click", function(event) {
      if (nome.value != "" && cpf.value != "" && data.value != "" && telefone.value != "" && cep.value != "" &&
        endereco.value != "" && estado.value != "" && cidade.value != "" && rua.value != "" && numero.value != "") {
        alert('estao preenchidos')
      } else {
        event.preventDefault();
        alert('Preencha todos os campos!')
      }
    })


    function verifica(teste) {
      if (teste.value == "SIM") {
        pergunta1_1.style.display = "block";
      } else {
        pergunta1_1.style.display = "none";
      }
    }


    $(document).ready(function() {
      $('#adicionar_btn').on("click", function() {
        $('.adicionar').append("<hr><label style='font-size: 13px'>1 – Nome </label><input type='text' class='form-control' placeholder=''><label for='cpf_risco' style='font-size: 13px'>2 – CPF </label><input type='text' class='form-control' class='cpf_risco' name='cpf_risco' placeholder=''><label for='idade_risco' style='font-size: 13px'>3 - Qual a faixa etária desta pessoa? </label><div class='custom-control custom-checkbox'><input type='checkbox' id='dez' name='pergunta_3[]' class='custom-control-input' value='dez'>  <label class='custom-control-label' style='width:60px' for='dez'>&nbsp;&nbsp;0 – 10</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='vinte' name='pergunta_3[]' class='custom-control-input' value='vinte'>  <label class='custom-control-label' style='width:60px' for='vinte'>11 – 20</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='trinta' name='pergunta_3[]' class='custom-control-input' value='trinta'>  <label class='custom-control-label' style='width:60px' for='trinta'>21 – 30</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='quarenta' name='pergunta_3[]' class='custom-control-input' value='quarenta'>  <label class='custom-control-label' style='width:60px' for='quarenta'>31 – 40</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='cinquenta' name='pergunta_3[]' class='custom-control-input' value='cinquenta'>  <label class='custom-control-label' style='width:60px' for='cinquenta'>41 – 50</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='sessenta' name='pergunta_3[]' class='custom-control-input' value='sessenta'>  <label class='custom-control-label' style='width:60px' for='sessenta'>51 – 60</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='setenta' name='pergunta_3[]' class='custom-control-input' value='setenta'>  <label class='custom-control-label' style='width:60px' for='setenta'>61 – 70</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='oitenta' name='pergunta_3[]' class='custom-control-input' value='oitenta'>  <label class='custom-control-label' style='width:60px' for='oitenta'>71 – 80</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='noventa' name='pergunta_3[]' class='custom-control-input' value='noventa'>  <label class='custom-control-label' style='width:60px' for='noventa'>81 – 90</label><label>anos</label></div><div class='custom-control custom-checkbox'>  <input type='checkbox' id='maisnoventa' name='pergunta_3[]' class='custom-control-input' value='maisnoventa'>  <label class='custom-control-label' style='width:80px' for='maisnoventa'>mais de 90 </label><label>anos.</label></div>");
      });
    });
  </script>
  <!--End of Tawk.to Script-->
  <script src="{{asset('js/util/localizacao.js')}}"></script>
  <script>
    let posicao = []

    $('#cep').blur(() => {

      $.getJSON(`https://viacep.com.br/ws/${$('#cep').val()}/json/unicode/`, data => {

        $('#endereco').val(data.logradouro)
        $('#estado').val(data.uf)
        $('#cidade').val(data.localidade)
        $('#bairro').val(data.bairro)
        $('#endereco').val(data.logradouro)

        $.getJSON(`https://maps.googleapis.com/maps/api/geocode/json?address=${data.bairro + ',' + data.localidade + ',' + data.estado}&key=AIzaSyCq7nonPSYYajWwYlsD9Qyi2ac-17lAb3M`, element => {

          posicao.push({
            lat: element.results[0].geometry.location.lat,
            lng: element.results[0].geometry.location.lng
          })

        })
      })
    })
  </script>
</body>

</html>