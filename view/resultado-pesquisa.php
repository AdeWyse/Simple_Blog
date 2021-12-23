<?php
    $postControl = new \Utfpr\Pratica\Model\PostControl();
	$posts = $postControl->getPosts();
	$postsId = $postControl->pesquisaPosts();
    $maxPerPage = 4;
    $postsCount = 0;
	$idp = $_GET['id'];




require_once __DIR__.'/common/header.php';?>

<main>

    <link rel="stylesheet" href="/CSS/blog-home.css">
    <ul class="posts-preview spacing">
        <?php

        function RenderizarPreviews($posts, $maxPerPage, int $pagesControl, $postsId, $idp){
            $itensCount = 0;
			if($postsId == null){
	        ?>
		        <div class="">
			        <li class="preview ">
				        <div class="background small">
					        <div class="formulario">
						        <div class="texto-background background-inside spacing1 nao-encontrado-inside">
							        <p  class=" format-texto texto texto-background background-inside item-inside" > Nenhum resultado encontrado.</p>
						        </div>
					        </div>
				        </div>
			        </li>
		        </div>

	        <?php
	        return 0;
    }else{

		        for($id = $pagesControl; $id < count($posts); $id++){
			        if($idp >= count($postsId)){
				        return $pagesControl;
			        }else{


			        if($posts[$id]->getTitulo() == $postsId[$idp]->getTitulo()){
				        $idP = count($posts) - $id -1;

				        ?>
				        <li clas="preview ">
				        <div class="background">
					        <div class="content">
						        <img class="format-image spacing1" src="https://fakeimg.pl/1000x200/">
						        <div class="titulo spacing1">
							        <a class="link-titulo" href="/blog-post?id=<?php echo  $idP ?>"><h2 class="title"><?php echo $postsId[$idp]->getTitulo(); ?> </h2></a>
						        </div>
					        </div>
					        <div class="texto-background background-inside spacing1">
						        <p class="format-texto texto"><?php echo $postsId[$idp]->getPreview(); ?></p>
					        </div>

				        </div>
				        </li><?php
				        $idp++;
				        $pagesControl++;
				        $itensCount++;
					}
					}

			        if($itensCount >= $maxPerPage)
			        {
				        break;
			        }
		        }
		        return $pagesControl;
	        }


    }
        $pagesControlProx = $_GET["id"];
        if($pagesControlProx==0){
            $pagesControlAnt = 0;

        }else{
            $pagesControlAnt = $pagesControlProx - $maxPerPage;

        }

        $pagesControlProx = RenderizarPreviews($posts, $maxPerPage, $pagesControlProx, $postsId, $idp);
		$pesquisa = $_GET['pq'];

        ?>

    </ul>
    <div class="paginas spacing1">
        <a id="anteriorMessage"  class="btn-inside btn spacing1 texto format-texto" href="/pesquisa?pq=<?php echo $pesquisa;?>&id=<?php echo $pagesControlAnt; ?>">Anterior</a>
        <a id="proximoMessage" class="btn-inside btn spacing1 texto format-texto" href="/pesquisa?pq=<?php echo $pesquisa;?>&id=<?php echo $pagesControlProx; ?>">Próximo</a>
    </div>
    <script>
        var controlProx = <?php echo $pagesControlProx;?> +1;
        var count = <?php echo count($postsId);?> +1;
        if(controlProx >= count){
            document.getElementById("proximoMessage").classList.add("visibilidadeOff");
        }else{
            document.getElementById("proximoMessage").classList.remove("visibilidadeOff");
            document.getElementById("proximoMessage").classList.add("visibilidadeOn");
        }

        var controlAnt = <?php echo $_GET["id"]?>;
        if(controlAnt <= 0 ){
            document.getElementById("anteriorMessage").classList.add("visibilidadeOff");
        }else{
            document.getElementById("anteriorMessage").classList.remove("visibilidadeOff");
            document.getElementById("anteriorMessage").classList.add("visibilidadeOn");
        }

    </script>

</main>
<?php
require_once __DIR__.'/common/footer.php';?>
