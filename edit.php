<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];

}

require_once './connection.php';

$sql = "UPDATE `customer` SET `amount` = '$amount', `price` = '$price' WHERE `customer`.`id` = $id;";


if(mysqli_query($conn, $sql)){
    header("Location: ./administration.php");
}