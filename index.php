<?php
$lengthPassword = $_GET['length_password'] ?? 6;
var_dump($lengthPassword);
echo '<br>';

function generate_random_string($length = 16) {
    // Definizione della stringa di caratteri utilizzata per generare la stringa casuale
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-={}[]|\:;"<>,.?/~`';
    
    // Inizializzazione della stringa casuale
    $string = '';
    
    // Ciclo for per generare la stringa casuale
    for ($i = 0; $i < $length; $i++) {
        // Generazione di un byte casuale utilizzando la funzione random_bytes
        $byte = random_bytes(1);
        
        // Calcolo di un indice casuale nella stringa di caratteri utilizzando la funzione random_int
        $index = random_int(0, strlen($characters) - 1);
        
        // Selezione del carattere casuale dalla stringa di caratteri utilizzando la funzione substr
        $char = substr($characters, $index, 1);
        
        // Aggiunta del carattere casuale alla stringa casuale
        $string .= $char;
    }
    
    // Restituzione della stringa casuale generata
    return $string;
}
var_dump(generate_random_string($lengthPassword));
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
        <input type="number" name="length_password" min="6" value="6" id="length-password">
        <button>
            Generator Password
        </button>
    </form>
</body>

</html>