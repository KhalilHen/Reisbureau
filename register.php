<?php
require 'conn.php';

if (isset($_POST['submit'])) {


    $naam = $_POST['first_name'];
    $achternaam = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $data = [
        'first_name' => $naam,
        'last_name' => $achternaam,
        'password' => $password,
        'email' => $email,
        'phonenumber' => $phonenumber,
    ];


    $sql = "INSERT INTO users (first_name, last_name, password, email, phonenumber) VALUES (:first_name, :last_name, :password, :email, :phonenumber)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    header('location:login.php');
} else {

    // header('location:index.html');    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register | Emirates Netherlands</title>
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
                    <a href="overons.html">Over ons</a>
                </li>
                <li id="header2">
                    <a href="informatie.html">Informatie</a>
                </li>
                <li id="header3">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="login-container">
            <div class="login"><a href="login.html">Inloggen</a></div>
        </div>
    </header>

    <div class="text">
        <h1>Word lid van Emirates Skywards</h1>
        <p>Ontdek elke keer bij elke reis een wereld vol rewards.<br>
            Geniet van reward vluchten, upgrades, exclusieve voordelen en meer</p>
    </div>


    <div class="register-box">
        <form name="register" action="register.php" method='POST'>
            <div class="input">
                <input name="first_name" type="text" placeholder="Voornaam" required>
                <input name="last_name" type="text" placeholder="Achternaam" required>
                <p>*Uw naam moet zoals vermeld in uw paspoort worden ingevoerd.</p>
                <input name="email" type="email" placeholder="E-mail" required>
                <input name="phonenumber" type="text" placeholder="Telefoonnummer" required>
                <input name="password" type="password" placeholder="Wachtwoord" required>
                <input type="password" placeholder="Herhaal wachtwoord" required>
            </div>
            <div class="check">
                <label class="checkbox-label">
                    <input type="checkbox">
                    Meld u aan voor Emirates-nieuwsbrieven en e-mails met speciale aanbiedingen. U kunt uw abonnement te
                    allen tijde beëindigen via de link in onze e-mails, of door de voorkeuren in uw Emirates
                    Skywards-account bij te werken of door contact met ons op te nemen. Bekijk ons privacybeleid voor
                    meer informatie over hoe we omgaan met uw persoonlijke gegevens.
                </label>
                <label class="checkbox-label">
                    <input type="checkbox">
                    Meld u aan voor flydubai -nieuwsbrieven en e-mails met speciale aanbiedingen. Uw naam en e-mailadres
                    zullen voor dit doeleinde met flydubai worden gedeeld. U kunt zich op elk moment uitschrijven via de
                    relevante link in flydubai e-mails, door uw Emirates Skywards-accountvoorkeuren bij te werken of
                    door contact op te nemen met Emirates of flydubai. Zie het privacybeleid van flydubai voor meer
                    informatie.
                </label>

                <p>Als u een account aanmaakt, gaat u akkoord met de regels van het Emirates Skywards programma en ons
                    <a href="#">Privacybeleid</a>
                </p>
            </div>
            <input type="submit" name='submit'>Een account aanmaken</input>
        </form>
    </div>


    <footer>
        <p>Volg ons op onze socials </p>
        <ul class="socials">
            <li><a id="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a id="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a id="facebook" href="#" target="blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
        <a id="privacybeleid" href="#">Privacybeleid & Algemene voorwaarden</a>
    </footer>
    <div class="footerbottom">
        <h1>copyright ©2023 Emirates | All Rights Reserved.</h1>
    </div>
</body>

</html>