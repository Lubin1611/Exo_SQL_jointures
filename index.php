<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

$servername = "localhost";
$username = "id7331055_lubin";
$password = "exobase";
$dbname = "id7331055_nibul";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {
// Selectionner la base à utiliser
    $conn->select_db($dbname);
    echo "Connecté";
}

function dayday($table, $column2, $column3, $column4)
{

    global $conn;

    $ajoutEl = "INSERT INTO $table VALUES ('', '$column2', '$column3', '$column4')";

    $conn->query($ajoutEl);
}

//dayday('eleves', 'Stevens', 'Dorchies', '78');

function majMug($table, $column1)
{

    global $conn;

    $ajoutM = "INSERT INTO $table VALUES ('', '$column1')";

    $conn->query($ajoutM);
}


function maj_Eleve_Mug ($id1, $id2) {

    global $conn;

    $ajoutE = "INSERT INTO  eleves_mugs(id_eleve, id_mug) VALUE ('$id1', '$id2')";

    $conn->query($ajoutE);

}

function afficher()
{

    global $conn;

    $tout = "SELECT * from eleves";

    $result = $conn->query($tout);
    echo '<table>';
    echo '<tr><th>ID</th><th>Prenom</th><th>Nom</th><th>Age</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td><a href=\"affichermug.php?id=" . $row['id'] . "\">" . $row['id'] . "</a></td><td>" . $row['prenom'] . "</td><td>" . $row['nom'] . "</td><td>" . $row['age'] . "</td></tr>";
    }
    echo '</table>';
}

//afficher();

function afficherMugs()
{
    global $conn;

    $tout = "SELECT * from Mugs";

    $result = $conn->query($tout);
    echo '<table>';
    echo '<tr><th>ID</th><th>Description</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['description'] . "</td></tr>";
    }
    echo '</table>';

}

function selection()
{
    global $conn;

    $el = "SELECT * from eleves";

    $result = $conn->query($el);

    foreach ($result as $eleves) {
        echo '<option>' . $eleves['id'] . '</option>';
    }

}

function selectionM()
{
    global $conn;

    $el = "SELECT * from Mugs";

    $result = $conn->query($el);

    foreach ($result as $Mugs) {
        echo '<option>' . $Mugs['id'] . '</option>';
    }

}


function modif($prenom, $nom, $age, $idEleve)
{

    global $conn;

    $lqs = "UPDATE eleves set prenom = '$prenom', nom = '$nom', age = '$age' where id = $idEleve";

    $conn->query($lqs);

}


function suppr($idEleve)
{

    global $conn;

    $sql = "DELETE from eleves where id = '$idEleve'";

     $conn->query($sql);

}

//suppr('3');


?>

<style>

    th {

        background-color: cornflowerblue;
        color: white;

    }

    td {

        border: 1px black solid;
        width: 100px;
        text-align: center;
    }

    table {

        border: 1px black solid;
        box-shadow: 5px 5px 5px gray;

    }

</style>

