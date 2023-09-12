<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Pesquisar</title>
    <link rel="stylesheet" href="style.css">
</head>

    
<body>

    <nav class="navbar" style="background-color: #e3f2fd;" fixed-top>
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
					<li><a class="dropdown-item" href="1a.htm">1°A</a></li>
					<li><a class="dropdown-item" href="1b.htm">1°B</a></li>
					<li><a class="dropdown-item" href="2a.htm">2°A</a></li>
					<li><a class="dropdown-item" href="2b.htm">2°B</a></li>
					<li><a class="dropdown-item" href="2c.htm">2°C</a></li>
					<li><a class="dropdown-item" href="2d.htm">2°D</a></li>
					<li><a class="dropdown-item" href="3a.htm">3°A</a></li>
					<li><a class="dropdown-item" href="3b.htm">3°B</a></li>
					<li><a class="dropdown-item" href="3c.htm">3°C</a></li>
					<li><a class="dropdown-item" href="3d.htm">3°D</a></li>
				  </ul>
				  <form class="d-flex mt-3" role="search" orm action="pesquisar.php" method="POST">
				<input class="form-control me-2" type="search" placeholder="Série" aria-label="Search" name="pesquisar">
				<button class="btn btn-outline-success" type="submit">Buscar</button>
			  </form>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </nav>

      <br><br><br>
<center>

<?php


    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];
    $totalAcumulado = 0;

    $resultado="SELECT * FROM tampinha WHERE serie LIKE '%$pesquisar%' LIMIT 5";
    $resultado_serie=mysqli_query($conexao, $resultado);

    while($rows_serie=mysqli_fetch_array($resultado_serie)){
        echo "Nome: ".$rows_serie['nome']."<br>";
        echo "Serie: ".$rows_serie['serie']."<br>";
        echo "Total: ".$rows_serie['total']."<br><br>";
        $totalAcumulado += $rows_serie['total']; // Acumula o valor total
              
        
    }
       echo "<br>";
       echo "Total acumulado: " . $totalAcumulado; // Imprime o total acumulado após o loop
?>
</center>

</body>
</html>