<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login query</title>
</head>

<body>
    <?php
    require 'conn.php';


    $email = $_POST['email'];
    $password = $_POST['password'];


    $user = [

        'email' => $email,
        'password' => $password,

    ];



    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $stmt->execute(['email' => $email, 'password' => $password]);
    $user = $stmt->fetch();


    if ($user) {


        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['roll'] = $user['roll'];
        if ($_SESSION['roll'] == 12) {

            header('location: dashboard.php');
            exit();

        } else if ($_SESSION['roll'] < 12) {

            header('location: boekingen.php');
            exit();
        } else {
            header('location: register.php');
            exit();
        }
    }

    ?>
</body>

</html>