<?php

	$messageControl = new \Utfpr\Pratica\Model\MessageControl();
	$messages = $messageControl->recuperaTodasMessages();

	$maxPerPage = 5;



require_once __DIR__.'/common/header.php';?>

<main>

	<link rel="stylesheet" href="/CSS/messages.css">
	<ul class="posts-preview spacing">
		<?php

		function RenderizarMensagens($messages, $maxPerPage, $pagesControl){
			$itensCount = 0;

			if($pagesControl==0){
				$pagesControl = -1;
			}
			for($id = $pagesControl; $id <= count($messages); $id++){
				$idMessage = count($messages) - $id - 2;
					if($idMessage >= 0){
							?>
							<li class="preview">
								<div class="background message">
									<div class="texto-background background-inside messages-item spacing1 content">
										<p class="format-texto texto">Name: <?php echo array_reverse($messages)[$idMessage]->getNome(); ?> </p>
										<p class="format-texto texto">Email: <?php echo array_reverse($messages)[$idMessage]->getEmail(); ?> </p>
										<p class="format-texto texto">Message: <?php echo array_reverse($messages)[$idMessage]->getMensagem(); ?> </p>
										<div class="botao-excluir spacing1">
											<a id="proximoMessage" class="btn-inside btn texto format-texto" href="/excluir?tp=1&ms=<?php echo $idMessage; ?>">Excluir</a>
										</div>
									</div>

								</div>

							</li>
						<?php
							$pagesControl++;
							$itensCount++;
							if($itensCount >= $maxPerPage)
							{
								break;
							}
					}
			}
			return $pagesControl;
		}
		$pagesControlProx = $_GET["id"];
		if($pagesControlProx==0){
			$pagesControlAnt = 0;
		}else{
			$pagesControlAnt = $pagesControlProx - $maxPerPage;
		}

		$pagesControlProx = RenderizarMensagens($messages, $maxPerPage, $pagesControlProx);

		?>
	</ul>
	<div class="paginas spacing1">
		<a id="anteriorMessage"  class="btn-inside btn spacing1 texto format-texto" href="/messages?id=<?php echo $pagesControlAnt; ?>">Anterior</a>
		<a id="proximoMessage" class="btn-inside btn spacing1 texto format-texto" href="/messages?id=<?php echo $pagesControlProx; ?>">Próximo</a>
	</div>
	<script>
		var controlProx = <?php echo $pagesControlProx;?> + 1;
		var count = <?php echo count($messages);?>;

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









