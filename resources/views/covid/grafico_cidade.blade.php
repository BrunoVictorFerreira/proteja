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
   
</head>

<body>

<div id="columnchart_values" style="width: 100vw; height: 99vh;"></div>


  <!-- Jquery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>

  
  <!-- Chart JS -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
  <!-- <script src="{{asset('js/util/mapa.js')}}"></script> -->
      <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">

    // gera os dados 
    var label = []
      var assistencia = []
      var perc = [];
      var total = 0;
      var objNovo = [];

      var assistencia_label = [];
      $.getJSON('/grafico-cidade-dados', obj => {
        
        obj.forEach(element => {
            label.push(element.assistencia)
            assistencia.push(element.num)
            total += element.num;
            
        });
        console.log(obj)
        for(var i = 0; i < assistencia.length; i++){
          perc.push(parseInt(assistencia[i]) / parseInt(total) * 100)
        }
        

        assistencia_label[0] = ["teste", "Porcentagem",{ role: 'style' }, { role: 'annotation' }];

        for(var i = 0; i < assistencia.length; i++){
          assistencia_label[i+1] = [label[i], parseInt(perc[i]),"#178c7d", parseInt(perc[i])+ "%"]
        }
        console.log(assistencia_label)

      });


      
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      //Nome da columa(Parte de Baixo) .. Na Primeira será o valorO valor que será exibido .. 
      var data = google.visualization.arrayToDataTable(assistencia_label);

      var formatter = new google.visualization.NumberFormat({
          decimalSymbol: '.',
          negativeColor: 'red',
          negativeParens: true,
          suffix: '%'
        });
        formatter.format(data, 1);

      var view = new google.visualization.DataView(data);
      

      var options = {
        title: "",
        bar: {groupWidth: "50%", color : "red"},
        legend: { position: 'none' }
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

</body>

</html>