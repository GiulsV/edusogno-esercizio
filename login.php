<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Edusogno</title>
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
<header>
	<img src="./assets/img/logo.svg" alt="logo" id="img_logo">
</header>
<main>
	<section class="container">
		<h1>Hai già un account?</h1>
		<form method="post" action="login.php" id="formLogin">
			<?php include('errors.php'); ?>
				<label class="label">Inserisci l'e-mail</label>
				<input class="input" type="text" name="email" placeholder="name@example.com" required>
				<hr>
				<label class="label" >Inserisci la password</label>
				<input class="input" type="password" name="password" id="password" placeholder="Inserisci la password" required>
				<span class="occhio"><img src="./assets/img/occhio.svg" alt="mostra password"></span>
				<hr>
				<button type="submit" class="button" name="login_user" id="buttonLogin">ACCEDI</button>
			<p>
				Non hai ancora un profilo? <a href="index.php">Registrati</a>
			</p>
		</form>
	</section>
</main>
<script src="./assets/js/script.js"></script>
</body>

</html>