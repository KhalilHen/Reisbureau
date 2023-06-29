<?php
session_start();



require 'conn.php';

if (isset($_SESSION['user_id'])) {

    $user_id = $_SESSION['user_id'];



} else {

    header('location: index.php');
}


// Select query to fetch the bookings for the user
$stmt = $conn->prepare("SELECT * FROM reizen WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$bookings = $stmt->fetchAll();

// Iterate over the bookings
foreach ($bookings as $booking) {
    $flight_id = $booking['id'];

    // Retrieve the flight details from the reizen table
    $flightStmt = $conn->prepare("SELECT * FROM reizen WHERE id = :flight_id");
    $flightStmt->bindParam(':flight_id', $flight_id);
    $flightStmt->execute();
    $flight = $flightStmt->fetch();
}

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
            <div class="login"><a href="login.php">Inloggen</a></div>
        </div>
    </header>
    <main>
        <h1>Boekingen</h1>
        <div class="container">
            <div id="column" class="destination">
                <h3>Naam</h3>
                <?php



                foreach ($bookings as $booking) {
                    $flight_id = $booking['id'];

                    // Retrieve the flight details from the reizen table
                    $flightStmt = $conn->prepare("SELECT * FROM reizen WHERE id = :flight_id");
                    $flightStmt->bindParam(':flight_id', $flight_id);
                    $flightStmt->execute();
                    $flight = $flightStmt->fetch();





                    echo '<ul>';


                    echo '<li>';

                    echo '<p>Flight Name: ' . $flight['naam'] . '</p>';
                    echo '</li>';



                    echo '</ul>';

                }
                ?>
            </div>
            <div id="column" class="destination">
                <h3> Delete </h3>
                <?php



                foreach ($bookings as $booking) {
                    $flight_id = $booking['id'];

                    // Retrieve the flight details from the reizen table
                    $flightStmt = $conn->prepare("SELECT * FROM reizen WHERE id = :flight_id");
                    $flightStmt->bindParam(':flight_id', $flight_id);
                    $flightStmt->execute();
                    $flight = $flightStmt->fetch();





                    echo '<ul>';


                    echo '<li>';
                    echo '<a href="user_reis_delete.php?id=' . $flight['id'] . '">';

                    echo '<button class="add-btn">Delete reis</button>';
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