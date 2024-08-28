<html>
    <head>
        <title>login</title>
        <link rel="stylesheet"type="text/css"href="login.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
    <form action="" method="post">
        Email:<input type="text"name="email"required value=""/><br></br>
        Password:<input type="password"name="password" required value=""/><br></br>
<input type="submit" value="login" name="login">
 <a href="form.php">forgot password</a>

    </form>
</div>
<?php
session_start();
require 'connection.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"select * from customer where email='$email' OR password='$password'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password==$row['password']){
            $_SESSION["login"]= true;
           $_SESSION['id']=$row["id"];
           $_SESSION['full name']=$row["full_name"];
           header("location:index.php");
        }else{
             echo"invalid password or email";
        }
    }
    mysqli_close($conn);
}
?>
</body>
</html>
