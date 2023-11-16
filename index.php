<?php

    $username = "root";
    $password = "";
    $database = "avito_database";

    $mysqli = new mysqli("localhost", $username, $password, $database);


    $query = $mysqli->query("SELECT * FROM annonce");
    while ($s = $query->fetch_assoc()) {
        print_r($s["date_poste"]);
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
    <h1>hhhhhhh</h1>
</body>
</html>