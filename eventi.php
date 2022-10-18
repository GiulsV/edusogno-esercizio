<?php include('./assets/php/database.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edusogno</title>
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="assets/img/logo.svg" alt="logo Edusogno"></a>
    </header>
    <main>
        <section class="container">
            <?php if (isset($_SESSION['success'])): ?>       
                <div class="containerEventi">
                    <h2>Ciao <?= $name[0]['nome']; ?> <?= $name[0]['cognome']; ?> ecco i tuoi eventi</h2>
                        <div id="eventi">
                            <?php if (count($eventiUser) > 0): ?>
                            <?php foreach ($eventiUser as $evento): ?>
                                <div class="evento">
                                    <h3><?= $evento['nome_evento'] ?></h3>
                                    <div><?= $evento['data_evento'] ?></div>
                                    <button name="join" class="button">JOIN</button>
                                </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <h3>Non hai eventi</h3>
                            <?php endif; ?>
                        </div>
                </div>
            <?php endif ?>
        </section>        
    </main>
</body>
</html>