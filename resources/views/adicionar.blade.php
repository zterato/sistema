<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar Notícias</title>
<!-- front desenvolvida utilizando bootstrap e php para desafio -->
<!-- programador: Zilvan Molina de Oliveira Junior -->
<!-- api do bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- link para css externo -->
<link rel="stylesheet" type="text/css" href="{{url('assets/resources/css/style.css')}}">
</head>


<body>
<!-- criando navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sistema de Notícias</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastrar Notícia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Exibir Notícia</a>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
<!-- fim da navbar -->

<!-- estrutura de cadastro de notícias -->
<div class="est_cadastro">
<!-- ambiente do formulário de cadastro -->
<div class="form_cad">
	<form method="post" name="formCad" id="formCad" action="{{url('cadastrar')}}">
	@csrf
		<input type="text" name="titulo" placeholder="Digite o Titulo da Notícia:"><br>
		<textarea name="noticia" placeholder="Digite a Notícia"></textarea><br>
		<input type="submit" value="Cadastrar">
	</form>
	
</div>
<!-- fim do ambiente de formulário ->
	
</div>
<!-- fim da estrutura de cadastro de notícias -->

<!-- rodapé -->
<!-- fim do rodapé -->
</body>
</html>