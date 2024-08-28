<html>
    <head>
        <title>form</title>
        <link rel="stylesheet"type="text/css"href="style.css"> 
</head>
<body><div id="fm">
<h1>Customers Registration Form</h1>
    <form action ="" method="post">
        Full Name:<input type="text"name="fullname" required value=""/><br></br>
        Phone Number:<input type="text" name="phone_no"required value=""/><br></br>
        Email:<input type ="text" name="email"required value=""/><br></br>
        password:<input type ="password"name="password"required value=""/><br></br>
       
        <input type="submit"name="submit"value="register"required value=""/>
 <p>
    You have an account? <a href="login.php">login here</a>
 </p>
</form>
</div>
<?php
require 'connection.php';

if(isset($_POST['submit'])){
    $Full_Name=$_POST['fullname'];
    $phone_no = $_POST['phone_no'];
    $Email=$_POST['email'];
    $password=$_POST['password'];
}
    
$query="INSERT INTO customer(full_name, Phone_no, email, password, amount, price) VALUES('$Full_Name','$phone_no','$Email','$password','0','0')";
if(!mysqli_query($conn, $query)){
    echo "Registering Failed " .mysqli_error($conn);
}else
{
echo "
<script>alert('Data inserted successfully');
</script>";
}
    
?>
</body>
</html>
