<?php

require 'conn.php';
session_start();


if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    if (isset($_GET['id'])) {
        $flight_id = $_GET['id'];


        var_dump($flight_id);
        var_dump($user_id);



        $stmt = $conn->prepare("UPDATE reizen SET user_id = :user_id WHERE id = :flight_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':flight_id', $flight_id);
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->rowCount() > 0) {
            // The user has been added to the flight successfully
            echo "User added to the flight.";
            header('location:  user_account.php');

        } else {
            // The update failed
            echo "Failed to add user to the flight.";
        }
    }
}



?>