<?php



function test(){
        $username = "root";
        $password = "";
        $database = "avito_database";
        $mysqli = new mysqli("localhost", $username, $password, $database);
        $query = $mysqli->query("SELECT * FROM annonce");
        while ($s = $query->fetch_assoc()){
            echo("<h1>" . $s["date_poste"] . "</h1>");
            echo("<p>" . $s["titre"] . "<p>");
            echo("<p>" . $s["description"] . "<p>");
            echo("<p>" . $s["prix"] . "$ <p>");
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        test();
    ?>
    <h1>hhhhhhh</h1>
</body>
</html>