<?php
require_once __DIR__.'/common/header.php';?>

<main>
    <link rel="stylesheet" href="/CSS/contact.css">
    <div class="background spacing">
        <div class="content spacing1">
            <div class=" spacing1">

                <form   action="" method="post" message="Post Criado." class="formulario">
	                <div id="erro" class="invisivel">
		                <p  class=" format-texto texto texto-background background-inside item-inside" >Erro Tente Novamente</p>
	                </div>
                    <div class="item-inside format-texto texto texto-background background-inside ">
                        <label class="labels" for="title">Titulo:</label><br>
                        <input class="input-field" type="text" id="title" name="title">
                    </div>
                    <div class="format-texto texto texto-background background-inside item-inside">
                        <label class="labels" for="preview">Preview:</label><br>
                        <textarea class="input-field" type="email" id="preview" name="preview" rows="5" cols="20"></textarea>
                    </div>
                    <div class="format-texto texto texto-background background-inside item-inside">
                        <label class="labels" for="post-text">Post Text:</label><br>
                        <textarea class="input-field" id="post-text" name="post-text" rows="10" cols="20"></textarea><br><br>
                        <input id="botao" class="btn btn-inside submit-form texto format-texto" type="submit" name="submitt" value="Submit">
                    </div>
                </form>

            </div>

        </div>
</main>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["title"] != null)
{

    $postControl = new \Utfpr\Pratica\Model\PostControl();
	$post = $postControl->criarNovoPost();
    $resultado =  $postControl->registrarPost($post);
    if($resultado === true){
		header("Location: http://localhost:8000/blog-home?id=0");
	    echo '<script>
				document.getElementById("erro").className = "invisivel";
		</script>';
    }else{
	    echo '<script>
				document.getElementById("erro").className = "visibilidadeOn";
		</script>';
    }
    exit();
}
require_once __DIR__.'/common/footer.php';?>



