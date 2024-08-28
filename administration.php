<?php
require_once 'connection.php';

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Form</title>
    <link rel="stylesheet" href="administration.css">
</head>
<body>
    <table border>
        <thead>
        <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            <th>Price</th>
        </thead>
        <?php while($row = mysqli_fetch_assoc($result)) {;?>
        <tbody>
            <tr>
            <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['full_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['amount']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><a href="edit_form.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a></td>
                <td><a href="delete_admin.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are sure do you want to delete the order of the customer <?php echo $row['full_name']; ?>')" class="delete">Delete</a><?php ?></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>