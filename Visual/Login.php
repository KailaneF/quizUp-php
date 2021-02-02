<?php
session_start();

if(isset($_SESSION['IdUser'])){
	header("Location: Principal.php");
}
?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
	<title>Login</title>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>

	<!-- Bootstrap CSS -->
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<!-- CSS -->
	<link rel='stylesheet' type='text/css' href='css/style.css'>
</head>

<body>
	<div class="bg-container">
		<div class="container">
			
			<div class="inicio text-center">
				<h1 class="  inicio-2 ">quizUP</h1>
			</div>
			<div class="d-flex justify-content-center mt-4">
				<div class="card">
					<div class="card-body shadow">
						<form action='../Controle/Verificar.php' method='post' id='cadastro'>
							<div class="form-group">
								<div class=" c-1 col-sm-6 justify-text-center" >
									<label for="usuario">Usuario</label>
								</div>
								<div class="col-sm-6-d-flex">
									<input type="text" class="form-control" name='usuario' id="usuario" required>
								</div>
							</div>
							<div class="form-group">
								<div class=" c-1 col-sm-6 justify-text-center">
									<label for="senha">Senha</label>
								</div>
								<div class="col-sm-6-d-flex">
									<input type="password" class="form-control" name='senha' id="senha" required>
								</div>
							</div>
							<div class=" d-1 d-flex flex-column ">
								<input class="btn btn-primary btn-xl mb-2" type='submit' name='submit' value='Entrar' />
								<a class="btn btn-primary btn-xl mb-2" href="Cadastro.php">Cadastrar-me</a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>