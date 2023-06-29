<?php
require 'conn.php';
session_start();

if (isset($_POST['submit'])) {
    var_dump($_POST);


    $naam = $_POST['first_name'];
    $achternaam = $_POST['last_name'];


    $stmt = $conn->prepare("SELECT * FROM users WHERE first_name=:first_name AND last_name=:last_name");
    $stmt->execute(['first_name' => $naam, 'last_name' => $achternaam]);
    $users = $stmt->fetch(PDO::FETCH_OBJ);


    $_SESSION['forget'] = $users['password'];

    header('location: user_update.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/register.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Password reset | Emirates Netherlands</title>
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
        <h1>Reset hier je password</h1>

    </div>


    <div class="register-box">
        <form name="password_reset" action="users_password_forget.php" method='POST'>
            <div class="input">
                <input name="first_name" type="text" placeholder="Voornaam" required>
                <input name="last_name" type="text" placeholder="Achternaam" required>

            </div>
            <div class="check">



                </p>
            </div>
            <input type="submit" name='submit'>password resetten</input>
        </form>
    </div>