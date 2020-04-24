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

                <p style="font-size: 10px;color: white;position: absolute;bottom: 0;left:calc(50% - 40px);">versão beta 1.0</p>

        </div>
        <div class="col-sm-12 col-lg-8">

          <form action="{{route('edicao_dependente')}}" method="post" style="margin-top: 10px" id="form">
          {{ csrf_field() }}
          <div class="adicionar">
          @for($i = 0 ; $i < $quantidade; $i++)
          @if($i == 0)
            <div class="form-group" id="pergunta_5_form">
              <label>5 - Se desejar,  informe-nos  o nome, CPF e a faixa etária das pessoas em  sua residência que podem ser consideradas de risco para o COVID-19 </label>
              
                <label for="nome_risco_0" style="font-size: 13px">1 – Nome completo </label>
                <input type="text" class="form-control" id="nome_risco_0" value="{{$dependente[$i]->nome}}" class="nome_risco" name="nome_risco[]" placeholder="">
                <label for="cpf_risco_0" style="font-size: 13px">2 – CPF </label>
                <input type="text" class="form-control" id="cpf_risco_0" value="{{$dependente[$i]->cpf}}" name="cpf_risco[]" placeholder="">
                <small style="color: darkred" id="instrucao_cpf_0">Insira o cpf sem traços ou pontos</small>
                <small style="color: darkred;display: none" id="cpf_bloqueado_0">A edição desse cpf foi bloqueada, você poderá alterar após o termino do cadastro</small>
                <br><label style="font-size: 13px">3 - Qual a faixa etária desta pessoa? </label>
                @if($dependente[$i]->faixa_etaria == 'dez')
                <div class="custom-control custom-radio">
                  <input type="radio" id="dez_0" onclick="testeCheck()" checked name="pergunta_5[]" class="custom-control-input" value="dez">
                  <label class="custom-control-label" style="width:60px" for="dez_0">&nbsp;&nbsp;0 – 10</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="dez_0" onclick="testeCheck()" name="pergunta_5[]" class="custom-control-input" value="dez">
                  <label class="custom-control-label" style="width:60px" for="dez_0">&nbsp;&nbsp;0 – 10</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'vinte')

                <div class="custom-control custom-radio">
                  <input type="radio" id="vinte_0" name="pergunta_5[]" checked class="custom-control-input" value="vinte">
                  <label class="custom-control-label" style="width:60px" for="vinte_0">11 – 20</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="vinte_0" name="pergunta_5[]" class="custom-control-input" value="vinte">
                  <label class="custom-control-label" style="width:60px" for="vinte_0">11 – 20</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'trinta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="trinta_0" name="pergunta_5[]" checked class="custom-control-input" value="trinta">
                  <label class="custom-control-label" style="width:60px" for="trinta_0">21 – 30</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="trinta_0" name="pergunta_5[]" class="custom-control-input" value="trinta">
                  <label class="custom-control-label" style="width:60px" for="trinta_0">21 – 30</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'quarenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="quarenta_0" name="pergunta_5[]" checked class="custom-control-input" value="quarenta">
                  <label class="custom-control-label" style="width:60px" for="quarenta_0">31 – 40</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="quarenta_0" name="pergunta_5[]" class="custom-control-input" value="quarenta">
                  <label class="custom-control-label" style="width:60px" for="quarenta_0">31 – 40</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'cinquenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="cinquenta_0" name="pergunta_5[]" checked class="custom-control-input" value="cinquenta">
                  <label class="custom-control-label" style="width:60px" for="cinquenta_0">41 – 50</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="cinquenta_0" name="pergunta_5[]" class="custom-control-input" value="cinquenta">
                  <label class="custom-control-label" style="width:60px" for="cinquenta_0">41 – 50</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'sessenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="sessenta_0" name="pergunta_5[]" checked class="custom-control-input" value="sessenta">
                  <label class="custom-control-label" style="width:60px" for="sessenta_0">51 – 60</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="sessenta_0" name="pergunta_5[]" class="custom-control-input" value="sessenta">
                  <label class="custom-control-label" style="width:60px" for="sessenta_0">51 – 60</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'setenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="setenta_0" name="pergunta_5[]" checked class="custom-control-input" value="setenta">
                  <label class="custom-control-label" style="width:60px" for="setenta_0">61 – 70</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="setenta_0" name="pergunta_5[]" class="custom-control-input" value="setenta">
                  <label class="custom-control-label" style="width:60px" for="setenta_0">61 – 70</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'oitenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="oitenta_0" name="pergunta_5[]" checked class="custom-control-input" value="oitenta">
                  <label class="custom-control-label" style="width:60px" for="oitenta_0">71 – 80</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="oitenta_0" name="pergunta_5[]" class="custom-control-input" value="oitenta">
                  <label class="custom-control-label" style="width:60px" for="oitenta_0">71 – 80</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'noventa')

                <div class="custom-control custom-radio">
                  <input type="radio" id="noventa_0" name="pergunta_5[]" checked class="custom-control-input" value="noventa">
                  <label class="custom-control-label" style="width:60px" for="noventa_0">81 – 90</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="noventa_0" name="pergunta_5[]" class="custom-control-input" value="noventa">
                  <label class="custom-control-label" style="width:60px" for="noventa_0">81 – 90</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'maisnoventa')

                <div class="custom-control custom-radio">
                  <input type="radio" id="maisnoventa_0" name="pergunta_5[]" checked class="custom-control-input" value="maisnoventa">
                  <label class="custom-control-label" style="width:80px" for="maisnoventa_0">mais de 90 </label><label>anos.</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="maisnoventa_0" name="pergunta_5[]" class="custom-control-input" value="maisnoventa">
                  <label class="custom-control-label" style="width:80px" for="maisnoventa_0">mais de 90 </label><label>anos.</label>
                </div>
                @endif
              </div>
              @else
              <div class="form-group" id="pergunta_5_form">
              <label>5 - Se desejar,  informe-nos  o nome, CPF e a faixa etária das pessoas em  sua residência que podem ser consideradas de risco para o COVID-19 </label>
              
                <label for="nome_risco_0" style="font-size: 13px">1 – Nome completo </label>
                <input type="text" class="form-control" id="nome_risco_{{$quantidade-1}}" value="{{$dependente[$i]->nome}}" class="nome_risco" name="nome_risco[]" placeholder="">
                <label for="cpf_risco_0" style="font-size: 13px">2 – CPF </label>
                <input type="text" class="form-control" id="cpf_risco_{{$quantidade-1}}" value="{{$dependente[$i]->cpf}}" name="cpf_risco[]" placeholder="">
                <small style="color: darkred" id="instrucao_cpf_0">Insira o cpf sem traços ou pontos</small>
                <small style="color: darkred;display: none" id="cpf_bloqueado_0">A edição desse cpf foi bloqueada, você poderá alterar após o termino do cadastro</small>
                <br><label style="font-size: 13px">3 - Qual a faixa etária desta pessoa? </label>
                @if($dependente[$i]->faixa_etaria == 'dez')
                <div class="custom-control custom-radio">
                  <input type="radio" id="dez_0" onclick="testeCheck()" checked name="pergunta_5{{$i}}[]" class="custom-control-input" value="dez">
                  <label class="custom-control-label" style="width:60px" for="dez_0">&nbsp;&nbsp;0 – 10</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="dez_0" onclick="testeCheck()" name="pergunta_5{{$i}}[]" class="custom-control-input" value="dez">
                  <label class="custom-control-label" style="width:60px" for="dez_0">&nbsp;&nbsp;0 – 10</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'vinte')

                <div class="custom-control custom-radio">
                  <input type="radio" id="vinte_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="vinte">
                  <label class="custom-control-label" style="width:60px" for="vinte_0">11 – 20</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="vinte_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="vinte">
                  <label class="custom-control-label" style="width:60px" for="vinte_0">11 – 20</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'trinta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="trinta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="trinta">
                  <label class="custom-control-label" style="width:60px" for="trinta_0">21 – 30</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="trinta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="trinta">
                  <label class="custom-control-label" style="width:60px" for="trinta_0">21 – 30</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'quarenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="quarenta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="quarenta">
                  <label class="custom-control-label" style="width:60px" for="quarenta_0">31 – 40</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="quarenta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="quarenta">
                  <label class="custom-control-label" style="width:60px" for="quarenta_0">31 – 40</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'cinquenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="cinquenta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="cinquenta">
                  <label class="custom-control-label" style="width:60px" for="cinquenta_0">41 – 50</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="cinquenta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="cinquenta">
                  <label class="custom-control-label" style="width:60px" for="cinquenta_0">41 – 50</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'sessenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="sessenta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="sessenta">
                  <label class="custom-control-label" style="width:60px" for="sessenta_0">51 – 60</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="sessenta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="sessenta">
                  <label class="custom-control-label" style="width:60px" for="sessenta_0">51 – 60</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'setenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="setenta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="setenta">
                  <label class="custom-control-label" style="width:60px" for="setenta_0">61 – 70</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="setenta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="setenta">
                  <label class="custom-control-label" style="width:60px" for="setenta_0">61 – 70</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'oitenta')

                <div class="custom-control custom-radio">
                  <input type="radio" id="oitenta_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="oitenta">
                  <label class="custom-control-label" style="width:60px" for="oitenta_0">71 – 80</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="oitenta_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="oitenta">
                  <label class="custom-control-label" style="width:60px" for="oitenta_0">71 – 80</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'noventa')

                <div class="custom-control custom-radio">
                  <input type="radio" id="noventa_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="noventa">
                  <label class="custom-control-label" style="width:60px" for="noventa_0">81 – 90</label><label>anos</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="noventa_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="noventa">
                  <label class="custom-control-label" style="width:60px" for="noventa_0">81 – 90</label><label>anos</label>
                </div>
                @endif
                @if($dependente[$i]->faixa_etaria == 'maisnoventa')

                <div class="custom-control custom-radio">
                  <input type="radio" id="maisnoventa_0" name="pergunta_5{{$i}}[]" checked class="custom-control-input" value="maisnoventa">
                  <label class="custom-control-label" style="width:80px" for="maisnoventa_0">mais de 90 </label><label>anos.</label>
                </div>
                @else
                <div class="custom-control custom-radio">
                  <input type="radio" id="maisnoventa_0" name="pergunta_5{{$i}}[]" class="custom-control-input" value="maisnoventa">
                  <label class="custom-control-label" style="width:80px" for="maisnoventa_0">mais de 90 </label><label>anos.</label>
                </div>
                @endif
              @endif
          @endfor
          </div>
          <div class="form-group" id="pergunta_5_form">

          <label for="nome_risco_{{$quantidade}}" style="font-size: 13px">1 – Nome completo </label>
                <input type="text" class="form-control" id="nome_risco_{{$quantidade}}" class="nome_risco" name="nome_risco{{$quantidade}}[]" placeholder="">
                <label for="cpf_risco_{{$quantidade}}" style="font-size: 13px">2 – CPF </label>
                <input type="text" class="form-control" id="cpf_risco_{{$quantidade}}" name="cpf_risco{{$quantidade}}[]" placeholder="">
                <small style="color: darkred" id="instrucao_cpf_{{$quantidade}}">Insira o cpf sem traços ou pontos</small>
                <small style="color: darkred;display: none" id="cpf_bloqueado_{{$quantidade}}">A edição desse cpf foi bloqueada, você poderá alterar após o termino do cadastro</small>
                <br><label style="font-size: 13px">3 - Qual a faixa etária desta pessoa? </label>
                <div class="custom-control custom-radio">
                  <input type="radio" id="dez_{{$quantidade}}" onclick="testeCheck()" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="dez">
                  <label class="custom-control-label" style="width:60px" for="dez_{{$quantidade}}">&nbsp;&nbsp;0 – 10</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="vinte_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="vinte">
                  <label class="custom-control-label" style="width:60px" for="vinte_{{$quantidade}}">11 – 20</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="trinta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="trinta">
                  <label class="custom-control-label" style="width:60px" for="trinta_{{$quantidade}}">21 – 30</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="quarenta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="quarenta">
                  <label class="custom-control-label" style="width:60px" for="quarenta_{{$quantidade}}">31 – 40</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="cinquenta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="cinquenta">
                  <label class="custom-control-label" style="width:60px" for="cinquenta_{{$quantidade}}">41 – 50</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="sessenta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="sessenta">
                  <label class="custom-control-label" style="width:60px" for="sessenta_{{$quantidade}}">51 – 60</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="setenta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="setenta">
                  <label class="custom-control-label" style="width:60px" for="setenta_{{$quantidade}}">61 – 70</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="oitenta_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="oitenta">
                  <label class="custom-control-label" style="width:60px" for="oitenta_{{$quantidade}}">71 – 80</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="noventa_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="noventa">
                  <label class="custom-control-label" style="width:60px" for="noventa_{{$quantidade}}">81 – 90</label><label>anos</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="maisnoventa_{{$quantidade}}" name="pergunta_5{{$quantidade}}[]" class="custom-control-input" value="maisnoventa">
                  <label class="custom-control-label" style="width:80px" for="maisnoventa_{{$quantidade}}">mais de 90 </label><label>anos.</label>
                </div>
          
          </div>
              <button style="color:#148b7e;font-size: 12px;cursor: pointer" align="right" id="adicionar_btn" type="button"><i class="icon-add"></i>Adicionar mais uma pessoa</button>
            </div>
            


            <button class="btn btn-success center" type="button" id="btn-cadastrar">Próximo</button>
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
                <li><a href="fb.me/fianto.oficial "><i class="fa fa-facebook"></i></a></li>
                <li><a href="@fianto.oficial"><i class="fa fa-instagram"></i></a></li>
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
              </div>
              <div class="footer-recent-post-content">
                
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
      var incrementoPerguntas = '{{$quantidade}}';

$(document).ready(function() {
  $('#adicionar_btn').on("click", function() {
    if($('#nome_risco_'+incrementoPerguntas).val() == "" || $('#cpf_risco_'+incrementoPerguntas).val() == ""){
      alert("Por favor, preencha o nome e o CPF para adicionar mais pessoas");
    }else{
      teste()
      if(verificadorCPF == true){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        let cpf_consulta = document.getElementById('cpf_risco_' + incrementoPerguntas).value;
        $.ajax({
          url : "{{route('verifica_cpf')}}",
          method : "post",
          data : {
            cpf : cpf_consulta,
            _token: '{{csrf_token()}}'
          },
          success : function(data) {
            if(data == "nao"){
              if(incrementoPerguntas > 0){    
                var testeCPF = true;            
                for(var i = incrementoPerguntas; i >= 0; i--){
                  $('#cpf_risco_'+incrementoPerguntas).val();
                  if($('#cpf_risco_'+incrementoPerguntas).val() == $('#cpf_risco_'+(i-1)).val()){
                    testeCPF = false;
                    break;
                  }
                }
                if(testeCPF == false){
                    alert("Você já registrou esse cpf anteriormente!");
                }else{
                  if($('#dez_'+incrementoPerguntas).prop("checked") || $('#vinte_'+incrementoPerguntas).prop("checked") ||
                    $('#trinta_'+incrementoPerguntas).prop("checked") || $('#quarenta_'+incrementoPerguntas).prop("checked") ||
                    $('#cinquenta_'+incrementoPerguntas).prop("checked") || $('#sessenta_'+incrementoPerguntas).prop("checked")||
                    $('#setenta_'+incrementoPerguntas).prop("checked") || $('#oitenta_'+incrementoPerguntas).prop("checked")||
                    $('#noventa_'+incrementoPerguntas).prop("checked") || $('#maisnoventa_'+incrementoPerguntas).prop("checked")){
                    $('#instrucao_cpf_'+incrementoPerguntas).css({'display' : "none"});
                    $('#cpf_bloqueado_'+incrementoPerguntas).css({'display' : "block"});
                    incrementoPerguntas++;
                    $('.adicionar').append("<hr><label style='font-size: 13px' for='nome_risco_"+incrementoPerguntas+"'>1 – Nome </label><input type='text' name='nome_risco[]' class='form-control' placeholder='' id='nome_risco_"+incrementoPerguntas+"'><label for='cpf_risco"+incrementoPerguntas+"' style='font-size: 13px'>2 – CPF </label><input type='text' id='cpf_risco_"+incrementoPerguntas+"' class='form-control' class='cpf_risco' name='cpf_risco[]' placeholder=''><small style='color: darkred' id='instrucao_cpf_"+incrementoPerguntas+"'>Insira o cpf sem traços ou pontos</small><small style='color: darkred;display: none' id='cpf_bloqueado_"+incrementoPerguntas+"'>A edição desse cpf foi bloqueada, você poderá alterar após o termino do cadastro</small><br><label style='font-size: 13px'>3 - Qual a faixa etária desta pessoa? </label><div class='custom-control custom-radio'><input type='radio' id='dez_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='dez'>  <label class='custom-control-label' style='width:60px' for='dez_"+incrementoPerguntas+"'>&nbsp;&nbsp;0 – 10</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='vinte_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='vinte'>  <label class='custom-control-label' style='width:60px' for='vinte_"+incrementoPerguntas+"'>11 – 20</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='trinta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='trinta'>  <label class='custom-control-label' style='width:60px' for='trinta_"+incrementoPerguntas+"'>21 – 30</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='quarenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='quarenta'>  <label class='custom-control-label' style='width:60px' for='quarenta_"+incrementoPerguntas+"'>31 – 40</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='cinquenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='cinquenta'>  <label class='custom-control-label' style='width:60px' for='cinquenta_"+incrementoPerguntas+"'>41 – 50</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='sessenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='sessenta'>  <label class='custom-control-label' style='width:60px' for='sessenta_"+incrementoPerguntas+"'>51 – 60</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='setenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='setenta'>  <label class='custom-control-label' style='width:60px' for='setenta_"+incrementoPerguntas+"'>61 – 70</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='oitenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='oitenta'>  <label class='custom-control-label' style='width:60px' for='oitenta_"+incrementoPerguntas+"'>71 – 80</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='noventa_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='noventa'>  <label class='custom-control-label' style='width:60px' for='noventa_"+incrementoPerguntas+"'>81 – 90</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='maisnoventa_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='maisnoventa'>  <label class='custom-control-label' style='width:80px' for='maisnoventa_"+incrementoPerguntas+"'>mais de 90 </label><label>anos.</label></div>");
                  }else{
                    alert("Preencha a faixa etária dessa pessoa");
                  }
                }
              }else{
                if($('#dez_'+incrementoPerguntas).prop("checked") || $('#vinte_'+incrementoPerguntas).prop("checked") ||
                    $('#trinta_'+incrementoPerguntas).prop("checked") || $('#quarenta_'+incrementoPerguntas).prop("checked") ||
                    $('#cinquenta_'+incrementoPerguntas).prop("checked") || $('#sessenta_'+incrementoPerguntas).prop("checked")||
                    $('#setenta_'+incrementoPerguntas).prop("checked") || $('#oitenta_'+incrementoPerguntas).prop("checked")||
                    $('#noventa_'+incrementoPerguntas).prop("checked") || $('#maisnoventa_'+incrementoPerguntas).prop("checked")){
                      $('#instrucao_cpf_'+incrementoPerguntas).css({'display' : "none"});
                      $('#cpf_bloqueado_'+incrementoPerguntas).css({'display' : "block"});
                      incrementoPerguntas++;
                      $('.adicionar').append("<hr><label style='font-size: 13px' for='nome_risco_"+incrementoPerguntas+"'>1 – Nome </label><input type='text' name='nome_risco[]' class='form-control' placeholder='' id='nome_risco_"+incrementoPerguntas+"'><label for='cpf_risco"+incrementoPerguntas+"' style='font-size: 13px'>2 – CPF </label><input type='text' id='cpf_risco_"+incrementoPerguntas+"' class='form-control' class='cpf_risco' name='cpf_risco[]' placeholder=''><small style='color: darkred' id='instrucao_cpf_"+incrementoPerguntas+"'>Insira o cpf sem traços ou pontos</small><small style='color: darkred;display: none' id='cpf_bloqueado_"+incrementoPerguntas+"'>A edição desse cpf foi bloqueada, você poderá alterar após o termino do cadastro</small><br><label style='font-size: 13px'>3 - Qual a faixa etária desta pessoa? </label><div class='custom-control custom-radio'><input type='radio' id='dez_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='dez'>  <label class='custom-control-label' style='width:60px' for='dez_"+incrementoPerguntas+"'>&nbsp;&nbsp;0 – 10</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='vinte_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='vinte'>  <label class='custom-control-label' style='width:60px' for='vinte_"+incrementoPerguntas+"'>11 – 20</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='trinta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='trinta'>  <label class='custom-control-label' style='width:60px' for='trinta_"+incrementoPerguntas+"'>21 – 30</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='quarenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='quarenta'>  <label class='custom-control-label' style='width:60px' for='quarenta_"+incrementoPerguntas+"'>31 – 40</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='cinquenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='cinquenta'>  <label class='custom-control-label' style='width:60px' for='cinquenta_"+incrementoPerguntas+"'>41 – 50</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='sessenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='sessenta'>  <label class='custom-control-label' style='width:60px' for='sessenta_"+incrementoPerguntas+"'>51 – 60</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='setenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='setenta'>  <label class='custom-control-label' style='width:60px' for='setenta_"+incrementoPerguntas+"'>61 – 70</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='oitenta_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='oitenta'>  <label class='custom-control-label' style='width:60px' for='oitenta_"+incrementoPerguntas+"'>71 – 80</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='noventa_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='noventa'>  <label class='custom-control-label' style='width:60px' for='noventa_"+incrementoPerguntas+"'>81 – 90</label><label>anos</label></div><div class='custom-control custom-radio'>  <input type='radio' id='maisnoventa_"+incrementoPerguntas+"' name='pergunta_5"+incrementoPerguntas+"[]' class='custom-control-input' value='maisnoventa'>  <label class='custom-control-label' style='width:80px' for='maisnoventa_"+incrementoPerguntas+"'>mais de 90 </label><label>anos.</label></div>");

                  }else{
                    alert("Preencha a faixa etária dessa pessoa");
                  }
                
              }
              
            }else{
              alert("CPF informado já está cadastrado!");
              $('#cpf_risco_' + incrementoPerguntas).val("");
            }
          }
        })
        
      }else{
        $('#cpf_risco_' + incrementoPerguntas).val("");
        alert("CPF não é válido!");
      }
      
    }
    
  });
  $('#btn-cadastrar').on("click", function(event){
    if($('#nome_risco_'+incrementoPerguntas).val() == "" && $('#cpf_risco_'+incrementoPerguntas).val() == "" && 
    (
      !$('#dez_'+incrementoPerguntas).prop("checked") || !$('#vinte_'+incrementoPerguntas).prop("checked") ||
                    !$('#trinta_'+incrementoPerguntas).prop("checked") || !$('#quarenta_'+incrementoPerguntas).prop("checked") ||
                    !$('#cinquenta_'+incrementoPerguntas).prop("checked") || !$('#sessenta_'+incrementoPerguntas).prop("checked")||
                    !$('#setenta_'+incrementoPerguntas).prop("checked") || !$('#oitenta_'+incrementoPerguntas).prop("checked")||
                    !$('#noventa_'+incrementoPerguntas).prop("checked") || !$('#maisnoventa_'+incrementoPerguntas).prop("checked")
    )){
      $('#form').submit();

    }else{
      teste()
      if(verificadorCPF == true){
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        let cpf_consulta = document.getElementById('cpf_risco_' + incrementoPerguntas).value;
        $.ajax({
          url : "{{route('verifica_cpf')}}",
          method : "post",
          data : {
            cpf : cpf_consulta,
            _token: '{{csrf_token()}}'
          },
          success : function(data) {
            if(data == "nao"){
                var testeCPF = true;            
                for(var i = incrementoPerguntas; i >= 0; i--){
                  $('#cpf_risco_'+incrementoPerguntas).val();
                  if($('#cpf_risco_'+incrementoPerguntas).val() == $('#cpf_risco_'+(i-1)).val()){
                    testeCPF = false;
                    break;
                  }
                }
                if(testeCPF == false){
                    alert("Você já registrou esse cpf anteriormente!");
                }else{
                  if($('#dez_'+incrementoPerguntas).prop("checked") || $('#vinte_'+incrementoPerguntas).prop("checked") ||
                    $('#trinta_'+incrementoPerguntas).prop("checked") || $('#quarenta_'+incrementoPerguntas).prop("checked") ||
                    $('#cinquenta_'+incrementoPerguntas).prop("checked") || $('#sessenta_'+incrementoPerguntas).prop("checked")||
                    $('#setenta_'+incrementoPerguntas).prop("checked") || $('#oitenta_'+incrementoPerguntas).prop("checked")||
                    $('#noventa_'+incrementoPerguntas).prop("checked") || $('#maisnoventa_'+incrementoPerguntas).prop("checked")){
                      $('#form').submit();

                  }else{
                    alert("Preencha a faixa etária dessa pessoa");
                  }
                    
                }
              
              
            }else{
              alert("CPF informado já está cadastrado!");
              $('#cpf_risco_' + incrementoPerguntas).val("");
            }
          }
        })
        
      }else{
        $('#cpf_risco_' + incrementoPerguntas).val("");
        alert("CPF não é válido!");
      }
      
    }
  });
});
function testeCheck(){

}


  //VALIDAÇÂO CPF

  function TestaCPF(strCPF) {
      var Soma;
      var Resto;
      Soma = 0;
      if (strCPF == "00000000000") return false;

      for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
      Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11)) Resto = 0;
      if (Resto != parseInt(strCPF.substring(9, 10))) return false;

      Soma = 0;
      for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11)) Resto = 0;
      if (Resto != parseInt(strCPF.substring(10, 11))) return false;
      return true;
    }
    var verificadorCPF = false;

    function teste() {
      var cpfString = $('#cpf_risco_' + incrementoPerguntas).val();
      if (!TestaCPF(cpfString)) {
        verificadorCPF = false;
      } else {
        verificadorCPF = true;
      }
    }


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



    function verifica(teste) {
      if (teste.value == "SIM") {
        pergunta1_1.style.display = "block";
      } else {
        pergunta1_1.style.display = "none";
      }
    }

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