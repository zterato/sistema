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
<div class="container estr">
<!-- ambiente do formulário de cadastro -->
<div class="row" style="padding: 10%;">

<div class="col-md-12 formu">
<center><h2>Cadastro de Notícia</h2></center><br>

	<form method="post" name="formCad" class="contactForm" action="{{url('adicionar')}}">
	@csrf
	<div class="form-row">
	    <div class="form-group col-md-8">
		    <input type="text" name="titulo" placeholder="Digite o Titulo da Notícia:" class="form-control">
		</div>
		<div class="form-group col-md-4">
		    <select name="categorias"  class="form-control">
		    <option value="">Categoria</option>
			<option value="Valorant">Valorant</option>
			<option value="CS-GO">CS_GO</option>
			<option value="lol">League of Legends</option>
		    </select>
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-12">
		    <textarea name="noticia" placeholder="Digite a Notícia" class="form-control" ></textarea>
		</div>
		</div>
		<div class="form-row">
		<div class="form-group col-md-12">
		<script>
			function Cadastrar(){
				alert("Cadastrado com Sucesso!");
			}
			</script>
		<input type="submit" value="Cadastrar" class="btn btn-primary" onClick="Cadastrar();">
		</div>
		</div>
	</form>
</div>

</div>
<!-- fim do ambiente de formulário -->
	
</div>
<!-- fim da estrutura de cadastro de notícias -->

<!-- rodapé -->
	<footer class="footer navbar-bottom rodape" style="height: 7vh; width: 100%; background: white">
		<h4>Desenvolvido por: Zilvan Molina de Oliveira Junior</h4>
		<h5>Ciêntista da Computação</h5>
	</footer>
<!-- fim do rodapé -->
</body>
	</html>
