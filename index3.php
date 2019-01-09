<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 14:16
 */

include "index.php";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<h1>Associer un mug</h1>

<form action="Form.php" method="post">
    <label for = "ajoutMug">Id Mug a ajouter : </label>
    <select name="ajoutMug">
        <?= selectionM()?>
    </select>
    <label for = "assoc">Id utilisateur a associer</label>
    <select name="assoc">
        <?=selection() ?>
    </select>
    <input type="submit" value="Envoyez">
</form>



</body>
</html>