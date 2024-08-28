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
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet"type="text/css"href="product.css">
</head>
<body><div class="container">
    <p>The following are the products and servises that we offer in our company</p>
    <image src="1.jpg"><div class="lt">20L 1 Bottles</div><h3>Mineral Water Bottle</h3><h4>TZS 8000</h4></image>
   <image src="3.jpg"><h3>Mineral Water Bottle</h3><h4>TZS 4000</h4></image>
   <image src="4.jpg"><h3>Mineral Water Bottle</h3><h4>TZS 2500</h4></image>
    <image src="5.jpg"><h3>Mineral Water Bottle</h3><h4>3500</h4></image> </div>
    <a href="order.php"><button class="cart">add cart</button></a>
    <div class="btn">
   <a href ="index.php"><button class="btn">Back</a></button>
</div>
</div>
</body>
    </html>