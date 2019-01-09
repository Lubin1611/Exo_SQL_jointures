<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 12:00
 */

include "index.php";
if (!empty($_GET['id'])) {
    $recupId = $_GET['id'];
}

global $conn;

$sql = "SELECT eleves_mugs.id_eleve, Mugs.description FROM `eleves_mugs`, `Mugs` WHERE eleves_mugs.id_eleve = $recupId and eleves_mugs.id_mug = Mugs.id";

$result = $conn->query($sql);

foreach ($result as $item) {

    echo $item['description']."<br><br>";

}