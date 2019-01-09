<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 07/01/2019
 * Time: 16:02
 */

include "index.php";

if (isset($_POST["ajoutNom"]) and isset($_POST["ajoutPrenom"]) and isset($_POST["ajoutAge"])) {

    $recupNom = $_POST["ajoutNom"];
    $recupPrenom = $_POST["ajoutPrenom"];
    $recupAge = $_POST["ajoutAge"];

    dayday('eleves', $recupPrenom, $recupNom, $recupAge);
}

    $recupId = (isset($_POST['supprId']) ? $_POST['supprId']: null);

        suppr($recupId);

        $editId = (isset($_POST['editId']) ? $_POST['editId']: null);
        $editNom = (isset($_POST['editNom']) ? $_POST['editNom']: null);
        $editPrenom = (isset($_POST['editPrenom']) ? $_POST['editPrenom']: null);
        $editAge = (isset($_POST['editAge']) ? $_POST['editAge']: null);

modif($editPrenom, $editNom, $editAge, $editId);


if (isset($_POST['ajoutMug']) and isset($_POST['assoc'])) {

    $recupMug = (isset($_POST['ajoutMug']) ? $_POST['ajoutMug'] : null);
    $recupMid = (isset($_POST['assoc']) ? $_POST['assoc'] : null);


    maj_Eleve_Mug($recupMid, $recupMug);

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id = "tables">
<div id = tab1><?php afficher()?></div>
<div id = tab2><?php afficherMugs()?></div>
</div>

<h1>Ajouter un elève</h1>

<form action="Form.php" method="post">

    <label for = "ajoutNom">Nom : </label><input type="text" id="ajoutNom" name="ajoutNom">
    <label for = "ajoutPrenom">Prenom : </label><input type="text" id="ajoutPrenom" name="ajoutPrenom">
    <label for = "ajoutAge">Age : </label><input type="number" id="ajoutAge" name="ajoutAge">
    <input type="submit" value="Envoyez">
</form>


Pour éditer, ou supprimer un élève, cliquez sur ce lien <a href="index2.php">Cliquez ici</a>

<br><br>

Pour associer un mug a un élève, <a href = "index3.php">Cliquez sur le lien </a>


</body>
</html>
