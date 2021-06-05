<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de notícias</title>
<!-- front desenvolvida utilizando bootstrap e php para desafio -->
<!-- programador: Zilvan Molina de Oliveira Junior -->
<!-- api do bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- link para css externo -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<!-- criando navbar -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; width: 100%;">
  <a class="navbar-brand" href="home">Sistema de Notícias</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="cadastro">Cadastrar Notícia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="exibir">Exibir Notícia</a>
      </li>
      
      
    </ul>
       <form class="form-inline my-2 my-lg-0" method="get" action="{{url('pesquisar')}}">
      <input class="form-control" name="pesq" type="text" placeholder="Perquisar" list="pesq">
      <datalist id="pesq" >
      <option>Categorias</option>
      @foreach($noticia as $n)
      <option value="{{$n->titulo}}">{{$n->titulo}}</option>
      <option value="{{$n->categorias}}">{{$n->categorias}}</option>
      @endforeach
      </datalist>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
	</nav>
	</header>
<!-- fim da navbar -->

<!-- introdução do sistema -->
<div class="container estrhome">
	<div class="row espa">
		<div class="col-md-12 bem">
			<h1>Bem Vindos ao sistema</h1>
		</div>
	</div>
</div>
<!-- bem vindos -->



<!-- rodapé -->
	<footer class="footer navbar-bottom rodape" style="height: 7vh; width: 100%; background: white">
		<h4>Desenvolvido por: Zilvan Molina de Oliveira Junior</h4>
		<h5>Ciêntista da Computação</h5>
	</footer>
<!-- fim do rodapé -->

<body>
</body>
</html>