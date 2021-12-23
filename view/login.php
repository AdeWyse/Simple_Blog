<?php
require_once __DIR__.'/common/header.php';?>


    <main>
        <link rel="stylesheet" href="/CSS/contact.css">
        <div class="background spacing">
            <div class="content spacing1">
                <div class=" spacing1">

                    <form action="" method="post" class="formulario">
                        <div class="format-texto texto texto-background background-inside item-inside">
                            <label class="labels" for="usuario">Usuario:</label><br>
                            <input class="input-field " type="text" id="usuario" name="usuario" required>
                        </div>
                        <div class="item-inside format-texto texto texto-background background-inside ">
                            <label class="labels" for="senha">Senha:</label><br>
                            <input class="input-field " type="password" id="senha" name="senha" required><br><br>
	                        <input class="btn btn-inside submit-form texto format-texto" type="submit" value="Login" >
                        </div>
                    </form>
                </div>

            </div>
    </main>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = new \Utfpr\Pratica\Model\UserControl();
		$user->loginCheck();
	}
require_once __DIR__.'/common/footer.php';?>