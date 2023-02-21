<?php

$lengthPassword = $_GET['length_password'] ?? 6;
// var_dump($lengthPassword);
// echo '<br>';
function generate_characters(){
    $numInt = '0123456789';
    $abcInt = 'abcdefghijklmnopqrstuvwxyz';
    $ABCInt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $specialInt = '!@#$%^&*()_+-={}[]|\:;"<>,.?/~`';
    $specialEasyInt = '!@#$%&*?';  
}

function generate_random_string($length = 16) {
    // Definizione della stringa di caratteri utilizzata per generare la stringa casuale
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-={}[]|\:;"<>,.?/~`';
    
    // Inizializzazione della stringa casuale
    $string = '';
    
    // Ciclo for per generare la stringa casuale
    for ($i = 0; $i < $length; $i++) {
        
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
//var_dump(generate_random_string($lengthPassword));

$password = generate_random_string($lengthPassword);