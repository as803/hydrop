<?php
require_once 'connection.php';
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <h3>Put your order Here</h3>
    <form action="order.inc.php" method="POST">
        <label>Amount: </label>
        <input type="text" name="amount" placeholder="eg... 12L 1 Bottle">
        <br>
        <label>Price: </label>
        <input type="text" name="price" placeholder="eg... 4000">
        <br>
        <input type="submit" name="submit" class="button" value="Order">
        <a href="ordered.php">See your order</a>
</form>
</body>
</html>