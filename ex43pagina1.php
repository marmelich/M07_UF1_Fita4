<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita4 - Ex3</title>
</head>
<body>

    <?php
    session_start();
        $_SESSION["frase"] .= $_GET["tecla"];
        $frase .=  $_SESSION["frase"];
        echo "<p> $frase </p>";
    ?>

    <form method="GET" action="ex43pagina1.php">
        <input type="submit" name="tecla" value="A" />
        <input type="submit" name="tecla" value="B" />
        <input type="submit" name="tecla" value="C" />
        <input type="submit" name="tecla" value="D" />
        <input type="submit" name="tecla" value="E" />
        <input type="submit" name="tecla" value="F" />
        <input type="submit" name="tecla" value="G" />
        <input type="submit" name="tecla" value="H" />
        <input type="submit" name="tecla" value="I" />
        <input type="submit" name="tecla" value="J" />
        <input type="submit" name="tecla" value="K" />
        <input type="submit" name="tecla" value="L" />
    </form>


    
</body>
</html>