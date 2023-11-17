<?php

include 'connect.php';
        $query = $conn->query("SELECT * FROM annonce");
        while ($s = $query->fetch_assoc()){
            echo("<h1>" . $s["date_poste"] . "</h1>");
            echo("<p>" . $s["titre"] . "<p>");
            echo("<p>" . $s["description"] . "<p>");
            echo("<p>" . $s["prix"] . "$ <p>");
        }


if (isset($_POST['submit'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $date_poste = $_POST['date_poste'];

    $stmt = $conn->prepare("INSERT INTO annonce (titre, description, prix, date_poste) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $titre, $description, $prix, $date_poste);

    if ($stmt->execute()) {
        echo "<script>alert('oui')</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('NON. " . $stmt->error . "')</script>";
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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="titre">Title:</label>
    <input type="text" name="titre" required><br>

    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br>

    <label for="prix">Price:</label>
    <input type="text" name="prix" required><br>

    <label for="date_poste">Date Posted:</label>
    <input type="date" name="date_poste" required><br>

    <input name="submit" type="submit" value="Add Annonce">
</form>
</body>
</html>