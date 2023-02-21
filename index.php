<?php
include __DIR__ . '/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <form action="" method="GET">
        <label for="length-password">
            Inserisci lunghezza Password
        </label>
        <input type="number" name="length_password" min="4"  id="length-password" required>
        <button>
            Generator Password
        </button>
    </form>
    
    <?php if($_SESSION['generatedPassword']['statusPassword']){?>
    <h2>
        Password generata
    </h2>
    <span>
        <?php echo $_SESSION['generatedPassword']['password']; ?>
    </span>
    <?php }?>
</body>

</html>