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

$sql = "SELECT * FROM customer WHERE id = '$id'";
$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your order</title>
    <link rel="stylesheet" href="ordered.css">
</head>
<body>
    <div class="order">
<h1>Welcome, </h1>
<?php while($row = mysqli_fetch_assoc($result)) { ?> 
    <h3><?php echo $row['full_name']; ?></h3>
    <h4>Your Order</h4>
   
    <p>Amount: <?php echo $row['amount']; ?></p>
    <p>Price: <?php echo $row['price']; ?></p>
    <?php } ?>
    <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete your order?')">Cancel Order</a>
</div>
</body>
</html>