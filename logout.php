
<?php
require 'connection.php';
$_session=[];
session_unset();
session_destroy();
header("location:login.php");
?>