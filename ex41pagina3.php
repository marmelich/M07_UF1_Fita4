<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita4 - Pagina3</title>
</head>
<body>

    <?php
        session_start();
        
        if (isset($_POST["endevina"])) {
            $_SESSION["endevina"] = $_POST["endevina"];

            if ($_SESSION["endevina"] == $_SESSION["ocult"]) {
                echo "<p>FELICITATS</p>";
                echo "<a href='ex41pagina1.php'>Tornar</a>";
                

            }
            
            else{
                if ($_SESSION["endevina"] > $_SESSION["ocult"]){
                    echo "<p>És massa gran</p>";
                    
                }

                else if ($_SESSION["endevina"] < $_SESSION["ocult"]){
                    echo "<p>És massa petit</p>";
                    
                }

                echo "<p>Endevina el nombre: </p>";
                echo "<form method='post' action='ex41pagina3.php'>";
                echo "<input type='number' name='endevina'/>";
                echo "<input type='submit' value='Enregistra'/>";
                echo "</form>";
            }
            
        }

        else {
            echo "<p>Endevina el nombre: </p>";
            echo "<form method='post' action='ex41pagina3.php'>";
            echo "<input type='number' name='endevina'/>";
            echo "<input type='submit' value='Enregistra'/>";
            echo "</form>";
            
        }

        
    ?>



    
</body>
</html>