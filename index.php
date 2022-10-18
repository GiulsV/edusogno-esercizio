<?php include('./assets/php/database.php') ?>
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
		<h1>Crea il tuo account</h1>
        <form method="post" action="index.php" id="formRegistration">
            <?php include('errors.php'); ?>
            <label class="label" for="nome">Inserisci il nome*</label>
            <input class="input" type="text" name="nome" id="nome" placeholder="Nome" required
                value="<?php echo $nome; ?>">
            <hr>
            <label class="label" for="cognome">Inserisci il cognome*</label>
            <input class="input" type="text" name="cognome" id="cognome" placeholder="Cognome" required
                value="<?php echo $cognome; ?>">
            <hr>
            <label class="label" for="email">Inserisci l'email*</label>
            <input class="input" type="email" name="email" id="email" placeholder="name@example.com" required
                value="<?php echo $email; ?>">
            <hr>
            <label class="label" for="password">Inserisci la password*</label>
            <input class="input" type="password" name="password" id="password" placeholder="Scrivila qua" required >
            <span class="occhio"><img src="./assets/img/occhio.svg" alt="mostra password"></span>
            <hr>
            <button type="submit" class="button" name="reg_user" id="buttonRegistration">REGISTRATI</button>
            <p>
                Hai già un account? <a href="login.php">Accedi</a>
            </p>
        </form>
	</section>
</main>
    <script src="./assets/js/script.js"></script>
</body>

</html>