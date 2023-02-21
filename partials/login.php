<?php
    session_start();
    //$returnIndex = $_GET('return_index') ?? null;
    if(isset($_GET['return_index'])) {
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        page login ok
    </h1>
    <h2>
        Complimenti la tua password generata è: <?php echo $_SESSION['generatedPassword']['password'] ?>
    </h2>
    <form action="" method="GET">
        <button name="return_index" >
            Genera una nuova Password
        </button>
    </form>
</body>
</html>