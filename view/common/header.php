<?php
namespace Utfpr\Pratica\Controller;

require_once __DIR__ . '/../scripts/logadoVerificacao.php';
$redirecionado = $_SERVER['REQUEST_URI'];
$redirecionado = strpos($redirecionado, 'redirected=true');
if ($redirecionado == true) {
	echo "<script>alert('Conteúdo restrito');</script>";
	$redirected = false;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Source+Code+Pro&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/f6ade79a48.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="CSS/reset.css">
	<link rel="stylesheet" href="CSS/colors.css">
	<link rel="stylesheet" href="CSS/estilo.css">
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="CSS/footer.css">
	<title><?= $title;?></title>
</head>

<header>
	<div class="barra-navegacao">
		<div class="logo">
			<a class="logo"  href="/home?id=0">FlyingBlob</a>
		</div>
		<div class="menu">
			<ul class="bar">
			<li class="nave-item">
				<a class="nave-link" href="/home?id=0">Home</a>
			</li>
			<li class="nave-item">
				<a class="nave-link" href="/about">About</a>
			</li>
			<li class="nave-item">
				<a class="nave-link" href="/contact">Contact</a>
			</li>
				<li class="nave-item">
					<div id="usuario" class="invisivel">
						<a class="nave-link" href="/menu">Menu</a>
					</div>
					<div id="logar" class="visibilidadeOn">
						<a class="nave-link" href="/login">Login</a>
					</div>

				</li>
			</ul>
		</div>
		<div class="caixa-pesquisa">
			<form class="pesquisa" action="" method="post">
				<input class="pesquisa_input" type="search" name="pesquisa_input" placeholder="Search" aria-label="Search">
				<div class="botao">
					<button id="pq" class="pesquisa_botao" type="submitt"><i class="fa fa-search"></i></button>

				</div>
			</form>
		</div>
	</div>
</header>

<script>

	var session ='<?= $logado; ?>';
	if(session == true){
		document.getElementById("usuario").className = "visibilidadeOn";
		document.getElementById("logar").className = "invisivel";
	}else{
		document.getElementById("usuario").className = "invisivel";
		document.getElementById("logar").className = "visibilidadeOn";
	}
</script>

<?php

	if($_SERVER["REQUEST_METHOD"] == "POST"){

			if(isset($_POST["pesquisa_input"])){
				$pesquisa = $_POST["pesquisa_input"];
				header("Location: http://localhost:8000/pesquisa?pq=".$pesquisa."&id=0&ct=0");
				exit();
			}

	}

?>


