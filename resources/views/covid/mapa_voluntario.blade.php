<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Fianto - Transformando Vidas</title>

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
  <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/styles-5.css')}}" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900&display=swap" rel="stylesheet">
  <script src="{{asset('js/mascara_telefone.js')}}"></script>
    <style>


    #map{
      width: 100vw !important;
      height: 100vh !important;
    }
    

    </style>
    @if(Request::input('cadastro') > 0)
    <script>
      alert("Suas informações foram recebidas com sucesso.\nAgradecemos a sua colaboração. ")
      window.location.href = '/painel'
    </script>
    @endif
    @isset($status)
      @if($status == "1")
        <?php
          echo "<script>alert('Informações atualizadas com sucesso!');window.location.href='/painel'</script>";
        ?>
      @else
        <?php
          echo "<script>alert('Erro na atualização\nVerifique suas informações!');window.location.href='/atualizar'</script>";
        ?>
      @endif
    @endisset
    @isset($dependentes)
      @if($dependentes == "0")
        <?php
          echo "<script>alert('Informações de dependentes atualizadas com sucesso!');window.location.href='/painel'</script>";
        ?>
      @else
        <?php
          echo "<script>alert('Erro na atualização de dependentes\nVerifique suas informações!');window.location.href='/atualizar'</script>";
        ?>
      @endif
    @endisset
</head>

<body>
          <div id="map"></div>




















<!-- <div class="container-fluid" style="margin-left: -15px">
  <div class="row" style="padding-bottom: 100px">
    <div class="col-3" style="">
    <div class="border-right" id="sidebar-wrapper">
      <div style="background-color: rgba(255,255,255,.5);padding: 5px">
        <img src="{{asset('img/Fianto_horizontal_positiva.png')}}" alt="" class="img-fluid">
      </div>
      <p style="color: gold;font-size: 20px;font-weight: 600;font-family: Heebo;margin-top: 15px;margin-bottom: 20px" align="center">Sistema Proteja</p>

      <div class="sidebar-heading" style="background-color: transparent;color: white" align="center">Dados do usuário</div>
      <hr>
      <ul>
        <li style="color:white;font-size: 14px"><div class="row"><div class="col-3">Nome: </div><div class="col-9">{{Request::session()->get('nome')}}</div></div></li>
        <li style="color:white;font-size: 14px"><div class="row"><div class="col-3">Email: </div><div class="col-9">{{Request::session()->get('email')}}</div></div></li>
        <li style="margin-top: 5px"><a href="{{route('logout')}}" class="btn btn-sm btn-danger" style="font-size: 12px">Sair</a></li>
      </ul>
      
      <div class="sidebar-heading mt-30" style="background-color: transparent;color: white" align="center">Menu</div>
      
      <div class="list-group list-group-flush">
        <a href="{{route('painel')}}" class="list-group-item list-group-item-action" style="color:white;background-color:#148b7e;font-size: 14px">Painel</a>
        <a href="{{route('relatorio')}}" class="list-group-item list-group-item-action" style="color:white;background-color:#148b7e;font-size: 14px">Voluntários na sua cidade</a>
        <a href="{{route('evolucao')}}" class="list-group-item list-group-item-action" style="color:white;background-color:#148b7e;font-size: 14px">Evolução do vírus em tempo real no Brasil</a>
      </div>

      <p style="font-size: 10px;color: white;position: absolute;bottom: 0;left:calc(50% - 40px);">versão beta 1.0</p>

    </div>

    </div>
    <div class="col-9">  
      <div class="row" style="height: 50vh">
        <div class="col-6">
          <p style="font-size: 15px;font-family: Heebo;text-align:center;margin-top: 20px;margin-bottom: 20px">Visão geral de voluntários no Brasil</p>
          <div id="map" style="height: 100%"></div>
        </div>
        <div class="col-6">
          <p style="font-size: 15px;font-family: Heebo;text-align:center;margin-top: 20px;margin-bottom: 20px">Acompanhe em tempo real a evolução do vírus</p>
          <iframe src="https://visao.ibict.br/#/visao?chart=1&grupCategory=16" style="margin-bottom: 100px;height: 100%;width: 100%;margin-left:auto;margin-right: auto;display: block"></iframe>
        </div>
      </div>
      <div class="row" style="height: 50vh;margin-top: 70px">
        <div class="col-6">
          <p style="font-size: 15px;font-family: Heebo;text-align:center;margin-top: 20px;margin-bottom: 20px">Visão geral de residências que precisam de auxílio no Brasil</p>
          <div id="columnchart_material" style="height: 100%;width: 100%"></div>
        </div>
        <div class="col-6">
          <p style="font-size: 15px;font-family: Heebo;text-align:center;margin-top: 20px;margin-bottom: 20px">Acompanhe em tempo real a evolução do vírus</p>
        </div>
      </div>
    </div>
      
  </div>
  


  </div> -->









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
  <!-- Chart JS -->
  <script src="{{asset('js/Chart.bundle.js')}}"></script>
  <script src="{{asset('js/utils.js')}}"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="{{asset('js/util/grafico.js')}}"></script>
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
    <!-- script do mapa  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- <script src="{{asset('js/util/mapa.js')}}"></script> -->
  <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNi37qvWyLWCzCZ61e6gOEWNl-oForXoE&callback=mapa"></script>
    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">


      function initMap(locations) {

      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: { lat: -13.6570407, lng: -69.7197471 }
      });

      // Create an array of alphabetical characters used to label the markers.
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      // Add some markers to the map.
      // Note: The code uses the JavaScript Array.prototype.map() method to
      // create an array of markers based on a given "locations" array.
      // The map() method here has nothing to do with the Google Maps API.
      console.log(locations)
      var markers = locations.map(function (location, i) {
          return new google.maps.Marker({
              position: location,
              label: labels[i % labels.length]
          });
      });

      // Add a marker clusterer to manage the markers.
      var markerCluster = new MarkerClusterer(map, markers,
          { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });
      }

      function mapa(){
      // $.getJSON("/dados-mapa", data => {
      //     initMap(data)
      // })
      $.getJSON("/dados-mapa-voluntario-cidade?localidade={{$localidade}}", data => {
          initMap(data);
      })
      }


    var comboGoogleTradutor = null; //Varialvel global

    $(document).ready(function(){
      $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    })

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
    var senha = document.getElementById('senha');
    var botao = document.getElementById('btn-cadastrar');

    function verificaSenha(){
      
        
        var regex = /([a-zA-Z]*([0-9]+[a-zA-Z]+)|([a-zA-Z]+[0-9]+)[0-9]*)+/;
        if(!regex.test(senha.value)){
          senha.style.borderColor="red";
          alert("Campo senha tem que conter letras e números!");
          return false;
          
        }else{
          senha.style.borderColor="lightgray";
          if(confirmacao.value != ""){
            if(confirmacao.value == senha.value){
              confirmacao.style.borderColor="lightgray";
              senha.style.borderColor="lightgray";
              return true;
            }else{
              alert("Senhas não coincidem!")
              confirmacao.style.borderColor="red";
              senha.style.borderColor="red";
              return false;
            }
          }
        }
      
      
      
    }
    
    botao.addEventListener("click", function(event) {
        if(termosUso.checked == true && verificadorCPF == true){
          if(!verificaSenha()){
            event.preventDefault();
          }
        }else{
          alert("Confirme os termos!");
          event.preventDefault();
          if(!verificaSenha()){
            event.preventDefault();
          }
        }
        
    })

    function TestaCPF(strCPF) {
        var Soma;
        var Resto;
        Soma = 0;
      if (strCPF == "00000000000") return false;
        
      for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
      Resto = (Soma * 10) % 11;
      
        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
      
      Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;
      
        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
        return true;
    }
    var verificadorCPF = false;
    function teste(){
      var cpfString = cpf.value;
      if(!TestaCPF(cpfString)){
        cpf.style.borderColor = "red";
        alert("Cpf Inválido!");
        
      }else{
        cpf.style.borderColor = "lightgray";
        verificadorCPF = true;
      }
    }

    $(document).ready(() => {
      //ATALHOS TECLADOs
      
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

</body>

</html>