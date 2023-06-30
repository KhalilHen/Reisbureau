<?php


require 'conn.php';
// require_once('conn.php');
$stmt = $conn->prepare("SELECT *  FROM reizen");
$stmt->execute();
$reizen = $stmt->fetchAll();






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bookedpage.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>booked-page</title>
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
                    <a href="index.php">Homepagina</a>
                </li>
                <li id="header2">
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li id="header3">
                    <!-- <a href="contact.html">Contact</a> -->
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <div class="login"><a href="home.html">Inloggen</a></div>
        </div>
    </header>

    <div class="table-container">
        <table>
            <tr class="row-title">
                <th class="adem-ruimte">Vertrek</th>
                <th class="adem-ruimte">Aankomst</th>

                <th class="adem-ruimte">Naam</th>
                <th class="adem-ruimte">Prijs</th>

            </tr>

            <?php
            foreach ($reizen as $row) {
                echo '<tr class="row-table">';


                echo '<td>' . $row['vertrek'] . '</td>';
                echo '<td>' . $row['aankomst'] . '</td>';

                echo '<td>' . $row['naam'] . '</td>';
                echo '<td>' . $row['prijs'] . '</td>';
                echo '<td class="text-styling">';
                echo "<a href='delete.php?id=" . $row['id'] . "'>Delete </a>";
                echo '</td>';

                echo '<td class="text-styling">';
                echo "<a href='update.php?id=" . $row['id'] . "'>Update </a>";
                echo '</td>';
            }
            ?>

            <tr class="row-table">

            </tr>
        </table>


</body>

</html>