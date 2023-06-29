<?php
require 'conn.php';
session_start();

// Check if user_id and flight_id exist
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    if (isset($_GET['id'])) {
        $flight_id = $_GET['id'];


        var_dump($flight_id);
        var_dump($user_id);







        // Delete query with user ID and flight ID condition
        $deleteStmt = $conn->prepare("UPDATE reizen SET user_id = NULL WHERE user_id = :user_id AND id = :flight_id");
        $deleteStmt->bindParam(':user_id', $user_id);
        $deleteStmt->bindParam(':flight_id', $flight_id);
        $deleteStmt->execute();



        if ($deleteStmt->rowCount() > 0) {
            echo "Booking deleted successfully.";
        } else {
            echo "Failed to delete the booking.";
        }
    } else {
        echo "User ID or Flight ID not provided.";
    }
}