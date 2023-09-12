<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampinhas cadastradas</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="cadastro.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar bg-body-tertiary fixed-top">
		<div class="container-fluid">
		<a class="navbar-brand" href="index.htm">Coleta de tampinhas</a>
		  <a class="navbar-brand" href="pesquisar.htm">Pesquisar por Serie</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
			  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
			  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="index.htm">Início</a>
				</li>
				
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Séries
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="1b.htm">1ºB</a></li>
					<li><a class="dropdown-item" href="2a.htm">2ºA</a></li>
					<li><a class="dropdown-item" href="2b.htm">2ºB</a></li>
					<li><a class="dropdown-item" href="2c.htm">2ºC</a></li>
					<li><a class="dropdown-item" href="2d.htm">2ºD</a></li>
					<li><a class="dropdown-item" href="3a.htm">3ºA</a></li>
					<li><a class="dropdown-item" href="3b.htm">3ºB</a></li>
					<li><a class="dropdown-item" href="3c.htm">3ºC</a></li>
					<li><a class="dropdown-item" href="3d.htm">3ºD</a></li>
					<li>
					  <hr class="dropdown-divider">
					</li>
				  </ul>
				</li>
			  </ul>
			  <form class="d-flex mt-3" role="search">
				<input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Pesquisar</button>
			  </form>
			</div>
		  </div>
		</div>
	  </nav>


<?php
    include("conexao.php");
    $nome=$_POST['nome'];
    $serie=$_POST['serie'];
    $total=$_POST['total'];      
    
    $sql="INSERT INTO tampinha (nome, serie, total) 
    VALUES('$nome', '$serie', '$total')"; 
    
    if(mysqli_query($conexao, $sql)) {
        echo "<img class='certo' src='certo.png'>  &nbsp;  &nbsp;  &nbsp;";
        echo "<h1 class='mensagem'> Tampinhas cadastradas com sucesso </h1>";
        echo "<a href='index.htm'</a><br>";
    }
    else{
        echo "erro: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    
    ?>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>