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

    
</head>

<body>

<div id="columnchart_values" style="width: 100vw; height: 99vh;"></div>

  <!-- Jquery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>

  

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- Main JS -->
  <script src="{{asset('js/main.js')}}"></script>

<s<script src="https://www.google.com/jsapi"></s>


  
    <script src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript">


      // gera os dados 
      var label = []
      var opniao = []
      var perc = [];
      var total = 0;
      var opniao_label = [];
      $.getJSON('/importancia-dados', obj => {
        console.log(obj)
        obj.forEach(element => {
          if(element.opniao_isolamento == "nao"){
            label.push("Nao acha necessário");
          }else{
            label.push("Acha necessário");
          }
              opniao.push(element.num);
              total += element.num;
        });

        for(var i = 0; i < opniao.length; i++){
          perc.push(parseInt(opniao[i]) / parseInt(total) * 100)
        }

        opniao_label[0] = ["teste", "Porcentagem",{ role: 'style' }, { role: 'annotation' }];

        for(var i = 0; i < opniao.length; i++){
          opniao_label[i+1] = [label[i], parseInt(perc[i]),"#178c7d", parseInt(perc[i])+ "%"]
        }

        console.log(opniao_label)
        
      });

      console.log(label)
      console.log(opniao)

      
      google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      //Nome da columa(Parte de Baixo) .. Na Primeira será o valorO valor que será exibido .. 
      var data = google.visualization.arrayToDataTable(opniao_label);

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