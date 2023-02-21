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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col text-center">
                <h1>
                    PHP Strong Password Generator
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <form action="" method="GET">
                    <div class="row mb-5">
                        <div class="col-12 mb-3">
                            <label for="length-password" class="form-label">
                                Inserisci lunghezza Password
                            </label>
                        </div>
                        <div class="col-3">
                            <input type="number" name="length_password" min="4" id="length-password" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="checkbox" class="form-label">
                                Parameters
                            </label>
                        </div>
                    </div>

                    <div class="row row-cols-1 mb-5 gap-3">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" name="parameter_everyone" id="check-everyone" checked>
                            <label class="form-check-label" for="check-everyone">
                                Everyone
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" name="parameter_number" id="check-number">
                            <label class="form-check-label" for="check-number">
                                Numeri
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" name="parameter_letter" id="check-letter">
                            <label class="form-check-label" for="check-letter">
                                Lettere
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" name="parameter_uppercase" id="check-uppercase">
                            <label class="form-check-label" for="check-uppercase">
                                Uppercase
                            </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" name="parameter_special" id="check-special">
                            <label class="form-check-label" for="check-special">
                                Caratteri Speciali
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Generator Password
                    </button>
                </form>
            </div>
        </div>
    </div>


    <!-- <?php /*if ($_SESSION['generatedPassword']['statusPassword']) { ?>
        <h2>
            Password generata
        </h2>
        <span>
            <?php echo $_SESSION['generatedPassword']['password']; ?>
        </span>
    <?php } */ ?> -->
</body>

</html>