<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 09:54
 */

include "index.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Supprimer une entrée</h1>

<form action="Form.php" method="post">
    <label for = "supprId">Id a supprimer : </label><input type="number" id="supprId" name="supprId">
    <input type="submit" value="Envoyez">
</form>

<br><br>

<h1>Editer une entrée</h1>

<form action="Form.php" method="post">
    <label for = "editId">Id a modifier : </label><input type="number" id="editId" name="editId">
    <label for = "editNom">Nom : </label><input type="text" id="editNom" name="editNom">
    <label for = "editPrenom">Prenom : </label><input type="text" id="editPrenom" name="editPrenom">
    <label for = "editAge">Age : </label><input type="number" id="editAge" name="editAge">
    <input type="submit" value="Envoyez">
</form>

</body>
</html>
