<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita4 - Ex2</title>
</head>
<body>
    <p>Coincidències</p>
    <a href="ex42pagina1.php">Tornar</a>
    
    <?php
        session_start();
        $_SESSION["frase2"] = $_POST["frase2"];
        
        $frase1 = explode(" ",$_SESSION["frase1"]);
        $frase2 = explode(" ",$_SESSION["frase2"]);
        
        $coincidencies = false;

        for ($i = 0; $i < count($frase1); $i++){
            for ($j = 0; $j < count($frase2); $j++){
                if ($frase1[$i] == $frase2[$j]){
                    $coincidencies = true;
                    echo "<p> La paraula -$frase1[$i]- està a les dues frases.</p>";
                    break;
                }
            }
        }

        if ($coincidencies==false){
            echo "<p> No hi ha cap coincidència. </p>";
        }
        
    ?>


</body>
</html>