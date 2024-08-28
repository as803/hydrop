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
require_once './connection.php';
$sql = "UPDATE `customer` SET `amount` = '0', `price` = '0' WHERE `customer`.`id` = $id;";
if(mysqli_query($conn, $sql)){
    header("Location: ./ordered.php");
}

