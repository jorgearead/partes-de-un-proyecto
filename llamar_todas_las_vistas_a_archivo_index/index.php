<?php require_once "./generales.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TITLE?></title>
</head>
<body>
    <header>
        Este es el header
    </header>
    <?php require_once $INTERNA; ?>
    <a href="<?=$URLBASE?>home">home</a>
    <br>
    <a href="<?=$URLBASE?>nosotros">nosotros</a>

    <footer>
        Este es el footer
    </footer>
</body>
</html>