<?php

	$postControl = new \Utfpr\Pratica\Model\PostControl();
	$post = $postControl->recuperaUmPost();
require_once __DIR__.'/common/header.php';?>

<main>
	<link rel="stylesheet" href="/CSS/blog-post.css">
	<div class="background spacing">
		<div class="content">
			<img class="format-image spacing1" src="https://fakeimg.pl/1000x400/">
			<div class="background-inside spacing1">
				<div class="titulo ">
					<a class="link-titulo" href="<?php $_SERVER['REQUEST_URI']?>"><h1 class="title-post"><?php echo $post->getTitulo()?></h1></a>
				</div>
				<?php
					foreach($post->getTextoConvertido() as $paragraphId => $paragrapgh){
						?>
						<p class="format-texto texto">&nbsp&nbsp&nbsp&nbsp<?= $post->getTextoConvertido()[$paragraphId]?></p>
						<?php
					}
				?>

				<div class="botao-excluir">
					<a id="proximoMessage" class="btn-inside btn texto" href="/excluir?tp=0&id=<?php echo $_GET['id'];?>">Excluir</a>
				</div>
			</div>
		</div>

</main>
<?php
require_once __DIR__.'/common/footer.php';?>
