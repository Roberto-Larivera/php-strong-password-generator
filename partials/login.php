<?php
session_start();
//$returnIndex = $_GET('return_index') ?? null;
if (isset($_GET['return_index'])) {
    header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated Successfully</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col text-center">
                <h1>
                    Password Generated Successfully
                </h1>
            </div>
        </div>
        <div class="row row-cols-1 text-center mb-5">
            <div class="col mb-5">
                <h2>
                    Congratulations your generated password is:
                </h2>
            </div>
            <div class="col text-warning">
                <h3 class="text-break">
                    <?php echo $_SESSION['generatedPassword']['password'] ?>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <form action="" method="GET">
                    <button type="submit" class="btn btn-outline-danger" name="return_index">
                    Generate a new Password
                    </button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>