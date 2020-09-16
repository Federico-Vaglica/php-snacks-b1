<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /**
     * PHP Snack 2:
     * Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * 1. name sia più lungo di 3 caratteri,
     * 2. che mail contenga un punto e una chiocciola,
     * 3. e che age sia un numero.
     * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
     */
    ?>

    <h2>PHP Snack 2 - Inserimento e validazione dati:</h2>
    <?php $data = $_GET;?>

    <?php 
    $name = $data['name'];
    $email = $data['email'];
    $age = $data['age'];


    
    if(empty($name) || empty($email)|| empty($age)):
        echo 'Accesso Negato: devi inserire il tuo Nome , la tua email e quanti anni hai';
        elseif ( strlen($name) < 3):
             echo "Il tuo nome e' troppo corto";
        elseif(strpos($email,'.') === false || strpos($email,'@')=== false):
            echo "Email non valida";
        elseif(is_numeric($age)=== false):
            echo "Il valore che hai inserito non e' un numero";
        else:
            echo "Benvenuto ".$name." La tua email e' ".$email." Ed hai: ".$age." anni";

        endif;    
      

    ?>
    
    
</body>
</html>