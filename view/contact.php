<?php
require_once __DIR__.'/common/header.php';?>

    <main>
        <link rel="stylesheet" href="/CSS/contact.css">
        <div class="background spacing">
            <div class="content spacing1">
	            <div class=" spacing1">

		            <form   action="" method="post" message="" class="formulario">
			            <div id="resposta" class="invisivel">
				            <p  class=" format-texto texto texto-background background-inside item-inside" > Mensagem Enviada</p>
			            </div>
			            <div id="resposta" class="invisivel">
				            <p  class=" format-texto texto texto-background background-inside item-inside" > Mensagem Enviada</p>
			            </div>
			                <div class="item-inside format-texto texto texto-background background-inside ">
				                <label class="labels" for="fname">Name:</label><br>
				                <input class="input-field" type="text" id="fname" name="fname">
			                </div>
			            <div class="format-texto texto texto-background background-inside item-inside">
				            <label class="labels" for="email">Email:</label><br>
				            <input class="input-field" type="email" id="email" name="email">
			            </div>
			            <div class="format-texto texto texto-background background-inside item-inside">
				            <label class="labels" for="mensagem">Your Message:</label><br>
				            <textarea  class="input-field"  id="mensagem" name="mensagem" rows="10" cols="20"></textarea><br><br>
				            <input id="botao" class="btn btn-inside submit-form texto format-texto" type="submit" name="submitt" value="Submit">
			            </div>
		            </form>

	            </div>

            </div>
    </main>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$messageControl = new \Utfpr\Pratica\Model\MessageControl();
		$message = $messageControl->criarNovaMessage();
		$resultado = $messageControl->registrarMessage($message);
		if($resultado){
			echo '<script>
				document.getElementById("resposta").className = "visibilidadeOn";
		</script>';
		}else{

			echo '<script>
				document.getElementById("resposta").className = "invisivel";
		</script>';
		}
		exit();
	}
require_once __DIR__.'/common/footer.php';?>


