<?php
session_start();

if(isset($_SESSION['IdUser'])){
	header("Location: Principal.php");
}
?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
	<title>Cadastro</title>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
	<script href="js/bootstrap.min.js"></script>
	<script href="js/jquery-3.4.1.min.js"></script>
	<script href="js/popper.min.js"></script>
</head>

<body>
	<div class=" bg-container">
		<div class="container">
			
		<div class="inicio text-center">
			<h1 class="  inicio-2 ">quizUP</h1>
		</div>
		<div class="d-flex justify-content-center mt-4">
			<div class=" cc-1 card">
				<div class="card-body shadow">
					<form action='../Controle/Inserir.php' method='post' id='cadastro'>
						<div class="form-group row">
							<div class=" c-1 col-sm-5 text-center-flex">
								<label for="usuario">Usuário:</label>
							</div>
							<div class="col-sm-7">
								<input type="text" class="form-control" name='usuario' id="usuario" required>
							</div>
						</div>
						<div class="form-group row">
							<div class=" c-1 col-sm-5 text-center-flex">
								<label for="email">Email:</label>
							</div>
							<div class="col-sm-7">
								<input type="email" class="form-control" name='email' id="email">
							</div>
						</div>
						<div class="form-group row">
							<div class=" c-1 col-sm-5 text-center-flex">
								<label for="senha">Senha:</label>
							</div>
							<div class="col-sm-7">
								<input type="password" class="form-control" name='senha' id="senha" required>
							</div>
						</div>
						<div class="form-group row">
							<div class=" c-1 col-sm-5 text-center-flex">
								<label for="confirm">Confirmar Senha:</label>
							</div>
							<div class="col-sm-7">
								<input type="password" class="form-control" name='confirm' id="confirm" required>
							</div>
						</div>
						<div class="d-flex justify-content-end " style="padding:2rem;">
							<input class="btn btn-primary btn-xl js-scroll-trigger" type='submit' name='submit' value='Cadastrar' />
							<a class="btn btn-primary btn-xl js-scroll-trigger" href="Login.php">Já tenho conta</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>