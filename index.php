<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first step</title>
</head>
<body>
    
    <?php 
        /**
         * 
         *  VARIABILI
         *  
         */

        $text_base = "Pippo mangia le mele dell' albero";
        $censored = $_GET['censored'];
        $censored_string = '***';
        $replace = str_replace($censored, $censored_string, $text_base);
    ?>

    <h1>Esercizio</h1>
    <p>Inserisci, censored="prola da censurare", per censurare la parola scelta </p>

    <hr>

    <p><strong>Frase originale: </strong><?php echo $text_base ?></p>
    <p><strong>Frase censurata: </strong><?php echo $replace ?></p>

    <hr>
</body>
</html>