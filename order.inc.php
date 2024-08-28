<?php
session_start();
if(!isset($_SESSION['id'])){
header("Location: ./login.php");
}else{
    $id = $_SESSION['id'];
}

if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $price = $_POST['price'];

}


require 'connection.php';
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $price = $_POST['price'];
}

$sql = "UPDATE `customer` SET `amount` = '$amount', `price` = '$price' WHERE `customer`.`id` = $id";

if(!mysqli_query($conn, $sql)){
    echo "Update Failed ". mysqli_error($conn);
}
else{
    header("Location: ./ordered.php");
}