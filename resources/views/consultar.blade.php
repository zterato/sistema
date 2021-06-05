<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar Notícias</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- link para css externo -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
<!-- criando navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; width: 100%; margin: 0;">
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
      <option>testando</option>
      @foreach($noticia as $n)
      <option value="{{$n->titulo}}">{{$n->titulo}}</option>
      <option value="{{$n->titulo}}">{{$n->categorias}}</option>
      @endforeach
      </datalist>
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Pesquisar">
    </form>
  </div>
</nav>
<!-- fim da navbar -->
</header>
<!-- estrutura de cadastro de notícias -->
<!-- estrutura de exibir notícias -->
<div class="container-fluid estr">
<center><h1 style="padding-top: 7%">Pesquisa</h1></center>
	<div class="row" style="padding-left: 16%;">
	
	@foreach($noticia as $n)
	<div class="col-md-9 not">
		<h4>{{$n->titulo}}</h4>
		<p>{{$n->categorias}}</p>
		<p>{{$n->noticia}}</p>
		
	</div>
	@endforeach
	</div>
</div>
<!-- fim da estrutura de exibir notícias -->
<!-- fim da estrutura de cadastro de notícias -->

<!-- rodapé -->
	<footer class="footer navbar-bottom rodape" style="height: 7vh; width: 100%; background: white">
		<h4>Desenvolvido por: Zilvan Molina de Oliveira Junior</h4>
		<h5>Ciêntista da Computação</h5>
	</footer>
<!-- fim do rodapé -->
</body>
	</html>
