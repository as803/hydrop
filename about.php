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



<!DOCTYPE html>
<html>
    <head>
        <title>about</title>
        <link rel="stylesheet"type="text/css"href="about.css">
    </head>
    <body><h1>HYDROP Always produce<br> Safe and Healthy Water <br>that improve the fitness of the body   </h1>
   <p> At HYDROP Water,our mission is to make our<br> customers with the absolute highest quality bottled 
    water and related products.<br> Our goal is to provide unparalleld customer service that exceeds <br>expactations
every time, make customers better and fill the difference...<br></br>
We strive to provide that level of service to all of our <br>customers, where by the the company seek the customers expactations<br> to make them interested with the products 
through <br>convice them friendly and interact with their opinions and advice about the services that we offer
</p></br><div class="btn">
<button>Read More</button></div><div class="container">
<div class="h0">Protect Your Family with Best Water Filtering System <br>Services</div>
    <div class="paragraph"><h3>Residential Waters</h3><br>Water is crusial for many bodily functions,such as lubricating the joins,delivering oxygen throughout the body,preventing kidney damage,and more..</div>
    <div class="fill"><h3>Filtration Plants</h3><br>Filtration is very important for many commercial/industrial process water &waste water reuse applicationa..</p></div>
    <div class="commercial"><h3>Commercial Waters</h3><br>Office buildings,schools,hotels,hospitals</br>,restaurents,</br>and other commercial..  and </br>institutional facilities use a significant amount of water..</p></div>
    <div class="soften"><h3>water softening</h3>it is icons in hard water that make it difficult for products with other positively charged icons to dissolve in the water. By doing this,the water softening removes the offending minerals from the water.<p></p></div>
</div>
<h2> sample of services that we offer in our company are like...</h2>
   <image src="2.jpg">
   </image>
   <div class="container"><h2>please call us to take an action and <br>to deliver the extranatory service</h2>
<button>+255 655 330 855<br>OR 0614030169</button>
</div><div class="backi"><button><a href="index.php">Back</a></div></button>
</body>
</html>