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
        <div>
            <label for="length-password">
                Inserisci lunghezza Password
            </label>
            <input type="number" name="length_password" min="4" id="length-password" required>
        </div>

        <div>
            <label for="checkbox">
                Parameters
            </label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parameter_everyone" id="check-everyone" checked>
                <label class="form-check-label" for="check-everyone">
                    Everyone
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parameter_number" id="check-number">
                <label class="form-check-label" for="check-number">
                    Numeri
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parameter_letter" id="check-letter">
                <label class="form-check-label" for="check-letter">
                    Lettere
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parameter_uppercase" id="check-uppercase">
                <label class="form-check-label" for="check-uppercase">
                    Uppercase
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parameter_special" id="check-special">
                <label class="form-check-label" for="check-special">
                    Caratteri Speciali
                </label>
            </div>
        </div>

        <button type="submit">
            Generator Password
        </button>
    </form>

    <?php if ($_SESSION['generatedPassword']['statusPassword']) { ?>
        <h2>
            Password generata
        </h2>
        <span>
            <?php echo $_SESSION['generatedPassword']['password']; ?>
        </span>
    <?php } ?>
</body>

</html>