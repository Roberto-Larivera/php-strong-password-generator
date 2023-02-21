<?php
session_start();

// Set for created password
$numInt = '0123456789';
$abcInt = 'abcdefghijklmnopqrstuvwxyz';
$ABCInt = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$specialInt = '!@#$%^&*()_+-={}[]|\:;"<>,.?/~`';
$specialEasyInt = '!@#$%&?';  
// \end Set for created password

$statusPassword = false;
$characters = '';

$lengthPassword = $_GET['length_password'] ?? null;
$paramEveryone = $_GET['parameter_everyone'] ?? null ;
$paramNumber = $_GET['parameter_number'] ?? null ;
$paramLetter = $_GET['parameter_letter'] ?? null ;
$paramUppercase = $_GET['parameter_uppercase'] ?? null ;
$paramSpecial = $_GET['parameter_special'] ?? null ;

$_SESSION['generatedPassword'] = [
    'password' => null,
    'statusPassword' => false,
];

function generate_characters(){
}

if($paramEveryone == null){
    if($paramNumber){
        $characters .= $numInt;
    }
    if($paramLetter){
        $characters .= $abcInt;
    }
    if($paramUppercase){
        $characters .= $ABCInt;
    }
    if($paramSpecial){
        $characters .= $specialEasyInt;
    }
}else{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%&?';
}

function generate_random_string ($characters, $length = 16) {
    // Definizione della stringa di caratteri utilizzata per generare la stringa casuale
    $length = ($length < 4 ) ? 4 : $length;
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






if($lengthPassword != null){
    //var_dump(generate_random_string($lengthPassword));
    $password = generate_random_string($characters, $lengthPassword);
    $statusPassword = true;
    $_SESSION['generatedPassword'] = [
        'password' => $password,
        'statusPassword' => $statusPassword,
    ];
    header('Location: ./partials/login.php');
}
