<?php session_start();



if (isset($_POST['submit'])) {
    require 'conn.php';

    $luchthaven_vertrek = $_POST['vertrek'];
    $luchthaven_aankomst = $_POST['aankomst'];
    $prijs = $_POST['prijs'];
    $naam_reis = $_POST['naam'];

    $data = [
        'vertrek' => $luchthaven_vertrek,
        'aankomst' => $luchthaven_aankomst,
        'prijs' => $prijs,
        'naam' => $naam_reis

    ];

    $sql = "INSERT INTO reizen (vertrek, aankomst, prijs, naam) VALUES (:vertrek, :aankomst, :prijs, :naam)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    header('location: bookedpage.php');
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
        <h1> Bestemmingen toevoegen </h1>
    </div>
    <div class="bestemmingen-form-container">


        <div class="row-container">


            <div class="colum-form">



                <form name="bestemmingen_add" action="bookingpage.php" method="Post">

                    <input class="input" name="vertrek" type="text" placeholder="vertrek">

                    <input class="input" name="aankomst" type="text" placeholder="aankomst">

                    <input class="input" name="prijs" type="number" placeholder="prijs">
                    <input class="input" name="naam" type="text" placeholder="reisnaam">
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

</html>