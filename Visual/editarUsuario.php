<?php
    session_start();

    if(!isset($_SESSION['IdUser'])){
        header("Location: Login.php");
    }

	require_once("Controle/Controle.php");
	$controle = new ControleUsuario();
    $id = $_SESSION['IdUser'];
    
    $id = (int)$id["idUser"];

    $itens = $controle->selecionarPid($id);

    $_SESSION['usuario'] = $itens['user'];
	
	$_SESSION["Img"] = $itens['img'];

	echo "
	<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <title>Editar Usuario</title>
        <meta charset='utf-8'>
    </head>
	<body>
		<form action='Controle/edit.php' method='post' enctype='multipart/form-data' >
			<img style='width: 150px; height: 150px;' src='{$itens['img']}'><br>
			<input type='file' name='imagem' id='imagem' onchange='previewImagem()'><br>
	        <label>Usuário</label>
	        <input type='text' name='usuario' value='{$itens['user']}' required/> 
	        <label>E-mail</label>
	        <input type='text' name='email' value='{$itens['email']}' />
	        <label>Senha Antiga</label>
	        <input type='password' name='senhaAnt' required />
	        <label>Nova Senha</label>
	        <input type='password' name='nvsenha' required />
	        <label>Confirm</label>
	        <input type='password' name='confirm' required />
	        <input type='submit' name='submit' value='Atualizar' />
		</form>
		<h5>Está claro que não é possível mudar o nome de usuario para um outro já existente!</h5>
	</body>
	<script src='um.js'></script>
	</html>
	";
?>