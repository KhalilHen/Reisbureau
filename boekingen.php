<?php
session_start();



require 'conn.php';

if (isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $roll = $_SESSION['roll'];



} else {

    header('location: index.php');
}



$stmt = $conn->prepare("SELECT *  FROM reizen");
$stmt->execute();
$reizen = $stmt->fetchAll();


// $stmt = $conn->prepare("SELECT * FROM reizen  INNER JOIN users ON reizen.id = users.id ");
// $stmt->execute();
// $bookings = $stmt->fetchAll();

// $stmt = $conn->prepare("SELECT reizen.id, reizen.vertrek, reizen.aankomst, reizen.prijs, reizen.naam, users.first_name, users.last_name
//                        FROM reizen
//                        INNER JOIN users ON reizen.user_id = users.id");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boekingen.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Boekingen | Emirates Netherlands</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="img/emirates-logo-badge (1).svg" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li id="header1">
                    <a href="overons.php">Over ons</a>
                </li>
                <li id="header2">
                    <a href="informatie.php">Informatie</a>
                </li>
                <li id="header3">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <div class="login"><a href="user_account.php">Mijn account</a></div>
        </div>
    </header>
    <main>
        <h1>Boekingen</h1>
        <div class="container">
            <div id="column" class="destination">
                <h3>Vertrek</h3>
                <?php

                foreach ($reizen as $row) {

                    echo '<ul>';


                    echo '<li>';
                    echo '<p>' . $row['vertrek'] . '</p>';
                    echo '</li>';



                    echo '</ul>';

                }
                ?>
            </div>
            <div id="column" class="email">
                <h3>Aankomst</h3>
                <?php

                foreach ($reizen as $row) {

                    echo '<ul>';


                    echo '<li>';
                    echo '<p>' . $row['aankomst'] . '</p>';
                    echo '</li>';



                    echo '</ul>';

                }
                ?>
            </div>
            <div id="column" class="price">

                <h3>Prijs</h3>
                <?php

                foreach ($reizen as $row) {

                    echo '<ul>';


                    echo '<li>';
                    echo '<p>' . '€' . $row['prijs'] . '</p>';
                    echo '</li>';



                    echo '</ul>';

                }
                ?>

            </div>


            <div id="column" class="name">
                <h3>Naam</h3>
                <?php

                foreach ($reizen as $row) {

                    echo '<ul>';


                    echo '<li>';
                    echo '<p>' . $row['naam'] . '</p>';
                    echo '</li>';



                    echo '</ul>';

                }
                ?>

            </div>
            <div id="column" class="add-button">
                <h3>Add</h3>
                <?php foreach ($reizen as $row) {

                    echo '<ul>';
                    echo '<li>';
                    echo '<a href="boekingen_query.php?id=' . $row['id'] . '">';

                    echo '<button class="add-btn">Add</button>';
                    echo '</a>';
                    echo '</li>';
                    echo '</ul>';
                }
                ?>
            </div>
    </main>
    <footer>
        <p>Volg ons op onze socials </p>
        <ul class="socials">
            <li><a id="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a id="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a id="facebook" href="#" target="blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        <a id="privacybeleid" href="privacy.php">Privacybeleid & Algemene voorwaarden</a>
    </footer>
    <div class="footerbottom">
        <h1>copyright ©2023 Emirates | All Rights Reserved.</h1>
    </div>
</body>

</html>