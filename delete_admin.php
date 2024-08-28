<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];
}



require_once './connection.php';

$sql = "UPDATE `customer` SET `amount` = '0', `price` = '0' WHERE `customer`.`id` = $id;";


if(mysqli_query($conn, $sql)){
    header("Location: ./administration.php");
}

