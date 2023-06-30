<?php


require 'conn.php';


?>

<?php
if (isset($_POST['submit'])) {


    $id = $_POST['id'];

    $vertrek = $_POST['vertrek'];
    $aankomst = $_POST['aankomst'];
    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $reizen = [
        'vertrek' => $vertrek,
        'aankomst' => $aankomst,
        'naam' => $naam,
        'prijs' => $prijs,
        'id' => $id,
    ];

    $sql = "UPDATE reizen SET vertrek=:vertrek, aankomst=:aankomst, naam=:naam, prijs=:prijs WHERE id=:id";
    $stmt = $conn->prepare($sql);
    $stmt->execute($reizen);

    header('location: bookedpage.php');
} else {

    echo 'Not succesfully updated';

}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT *  FROM reizen WHERE id=:id");
    $stmt->execute(['id' => $id]);
    $reizen = $stmt->fetch(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bookingpage.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Boeking add</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="home.html">
                <img src="img/emirates-logo-badge (1).svg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li id="header1">
                    <a href="overons.html">Homepagina</a>
                </li>
                <li id="header2">
                    <a href="informatie.html">Admin</a>
                </li>
                <li id="header3">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <div class="login"><a href="home.html">Inloggen</a></div>
        </div>
    </header>
    <div class="bestemmingen-container">
        <h1> Update bestemming </h1>
    </div>
    <div class="bestemmingen-form-container">


        <div class="row-container">


            <div class="colum-form">



                <form name="bestemmingen_update" action="update.php" method="POST">
                    <input type="hidden" name='id' value="<?= $id; ?>" />
                    <input class="input" name="vertrek" type="text" placeholder="vertrek"
                        value="<?= $reizen->vertrek; ?>" />
                    <input class="input" name="aankomst" type="text" placeholder="aankomst"
                        value="<?= $reizen->aankomst; ?>">
                    <input class="input" name="prijs" type="number" placeholder="prijs" value="<?= $reizen->prijs; ?>">
                    <input class="input" name="naam" type="text" placeholder="reisnaam" value="<?= $reizen->naam; ?>">
            </div>





            <div class="add-container">
                <div class="button-colum">
                    <input class="input" name="submit" type="submit" placeholder="toevoegen">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>




</body>