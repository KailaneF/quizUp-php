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

	echo "
	<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <title>Principal</title>
        <meta charset='utf-8'>
    </head>
    <body>
    	<label for='men'><img style='width: 150px; height: 150px;' src='{$itens['img']}'></label>
        <a href='Controle/sair.php'>Sair</a>
        <a href='editarUsuario.php'>Atualizar Conta</a></br></br>
        <a href=''>Matemática</a></br>
        <a href=''>Ciências Humanas</a></br>
        <a href=''>Ciências Naturais</a></br>
        <a href=''>Liguagens e Códigos</a></br>
        <a href=''>Geral</a></br>
        <a href=''>Atualidades</a></br></br>
        <h4>Geral</h4>
        <a href=''><button>Play</button></a>
    </body>
    </html>
    ";
?>