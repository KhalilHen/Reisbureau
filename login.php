<?php

require 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login | Emirates Netherlands</title>
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

    <div class="text">
        <h1>Log in bij Emirates</h1>
        <p>Verdien miles als u met ons of onze partners vliegt <br>
            En geef uw Skyrewards Miles uit aan een wereld vol rewards.</p>
    </div>

    <div class="login-box">
        <div class="boxshadow">
            <div class="login-tab">
                <h2>Inloggen</h2>
                <form action="login_query.php" method="POST">
                    <input class="form-input" name="email" type="text"
                        placeholder="E-mailadres of Emirates Skywards-nummer" required>
                    <a href="#">E-mailadres of accountnummer vergeten?</a> <br>
                    <input class="form-input" name="password" type="password" placeholder="Wachtwoord" required>
                    <a href="#">Wachtwoord vergeten/ aanpassen?</a> <br>
                    <p><input class="form-input" type="checkbox">Onthoud mij op dit apparaat.</p>
                    <button type="submit">Inloggen</button>
                </form>
            </div>
        </div>
        <div class="register-tab">
            <div class="textbox">
                <h2>Nog geen lid van Emirates Skywards?</h2>
                <p>Registreer nu en haal het maximale uit elke mijl met <a href="#">Emirates Skywards</a></p>
            </div>
            <form action="register.php">
                <input type="submit" name="submit">Meld u nu aan</inout>
            </form>
        </div>
    </div>

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