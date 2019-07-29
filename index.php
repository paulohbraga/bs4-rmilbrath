<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		#formContainer{

			width: 500px;
		}
		#botao{
			background-color: #EA1DCB;
			color: #fff;
		}
		
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Cadastro de produtos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/">Ação</a>
          <a class="dropdown-item" href="#">Outra ação</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Algo mais aqui</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Desativado</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
	<form action="cadastrar_produto.php" method="post">
		<div class="container" id="formContainer" style="margin-top: 40px">
			<h4 style="margin-bottom: 20px">Formulário de cadastro</h4>
			<div class="form-group">
				<label>Nome do produto</label>
				<input type="text" class="form-control" placeholder="Insira o número do produto" name="nome" required autocomplete="off">
			</div>
			<div class="form-group">
				<label>Número do produto</label>
				<input type="number" class="form-control" placeholder="Insira o número do produto" name="numero"  required  autocomplete="off">
			</div>
			<div class="form-group">
				<label>Categoria</label>
					<select class="form-control" name="categoria"  required>
						<option selected>Periféricos</option>
						<option>Hardware</option>
						<option>Software</option>
						<option>Celulares</option>
					</select>
			</div>
			<div class="form-group">
				<label>Quantidade</label>
				<input type="text" class="form-control" placeholder="Insira o número do produto" name="quantidade"  required autocomplete="off"> 
			</div>
			<div class="form-group">
    			<label>Fornecedor</label>
					<select class="form-control" name="fornecedor">
						<option>Fornecedor A</option>
						<option>Fornecedor B</option>
						<option>Fornecedor C</option>
						<option>Fornecedor D</option>
					</select>
			</div>
			<div style="text-align: right; margin-top: 25px">
				<button type="submit" class="btn btn-sm b" id="botao">Cadastrar</button>
			</div>
		</div>	  
	</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>