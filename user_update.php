<?php


echo 'Nog in onderhoud!';

?>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Passwor Update</title>

</head>

<body>



    <?php
    // Hier word Database connect gevraagd
    require 'conn.php';

    session_start();
    if (isset($_SESSION['password'])) {

        var_dump($users);








        $sql = "UPDATE users SET password=:password, Where password :=password";
        $stmt = $conn->prepare($sql);
        $stmt->execute($users);

    }

    // $stmt = $conn->prepare("SELECT * FROM users WHERE first_name=:first_name AND last_name=:last_name  AND id=:id");
    // $stmt->execute(['first_name' => $naam, 'last_name' => $achternaam, 'id' => $id]);
    
    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    
    //     $stmt = $conn->prepare("SELECT :first_name,  :last_name,  :password  FROM users WHERE id=:id");
    //     $stmt->execute(['id' => $id]);
    //     $products = $stmt->fetch(PDO::FETCH_OBJ);
    



    // }
    








    ?>
    <div class="register-box">
        <form name="password_update" action="users_update.php" method='POST'>
            <div class="input">
                <input type="hidden" name='id' value="<?= $id; ?>" />
                <input name="password" class="form-input" value="<? $password->password; ?>" type="password"
                    placeholder="Wachtwoord" required> <br>

            </div>
            <div class="check">



                </p>
            </div>
            <input type="submit" name='submit'>updaten</input>
        </form>
    </div>
</body>

</html> -->