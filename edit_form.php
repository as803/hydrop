<?php
require_once 'connection.php';

if(isset($_GET["id"])){
$id = $_GET["id"];
}
 $sql = "SELECT * FROM customer WHERE id = '$id'";
 $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="form">
    <h2>Edit the order of <?php echo $row['full_name']; ?></h2>
    <form action="edit.php" method="POST">
    <p><input type="hidden" value="<?php echo $row['id']; ?>" name="id"></p>
    <p class="amount">Amount: <input type="text" value="<?php echo $row['amount']; ?>" name="amount"></p>
    <p>Price: <input type="text" value="<?php echo $row['price']; ?>" name="price"></p>
    <p id="cassian"><input type="submit" name="submit"></p>
</div>
</form>
</body>
</html>