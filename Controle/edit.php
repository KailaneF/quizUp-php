<?php
session_start();

$id = $_SESSION['IdUser'];
    
$idUser = (int)$id["idUser"];


$a = $_FILES['imagem']['tmp_name'];

require_once("Controle.php");
require_once("../Modelo/Usuario.php");

try{

    if($_POST['confirm'] == $_POST['nvsenha']){

        $usuario = new Usuario();
        $usuario->setUsuario($_SESSION['usuario']);
        $usuario->setSenha($_POST['senhaAnt']);
        $control = new ControleUsuario();

        if ($control->verificar($usuario)) {
            $usuario->setId($idUser);
            $usuario->setSenha($_POST['nvsenha']);
            $usuario->setUsuario($_POST['usuario']);
            $usuario->setEmail($_POST['email']);
            $_FILES['imagem']['name'] = "$idUser".'.png';
            if($a == ""){
                $d = $_SESSION["Img"];
            }else{
                $d = '../img/'.$_FILES['imagem']['name'];
            }
            $usuario->setImg('img/'."$idUser".'.png');
            if($control->atualizar($usuario)){
                move_uploaded_file($a, $d);
                header("Location: ../Main.php");
                echo "Acho que foi aqui</br>";
                var_dump($idUser);
            }else{
                echo "<script>alert('Erro ao atualizar!'); history.back();</script>";
            }
        }else{
            echo "<script>alert('Senha antiga incorreta!'); history.back();</script>";
        }
    }else{
        echo "<script>alert('Senha e confirmação divergem!'); history.back();</script>";
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>