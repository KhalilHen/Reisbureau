<?php



require 'conn.php';


if (isset($_GET['id']))
    ; {


    $id = $_GET['id'];



}
$sql = 'DELETE FROM reizen WHERE id = :id';
$stmt = $conn->prepare($sql);



$stmt->execute(['id' => $id]);

header('location: bookedpage.php');