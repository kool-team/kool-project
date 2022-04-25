<?php
session_start();
$id=$_SESSION['id'];
$con = new mysqli('localhost','root','');
$dbconfig = mysqli_select_db($con,'kool_db');

$session=$_SESSION['session_id'];
if($_GET['demo']==true){
    
    $query = "DELETE  FROM shopping_sessions where user_id=$id ";
    $result = mysqli_query($con,$query);
    $query = "DELETE  FROM cart_item where session_id=$session  ";
    $result = mysqli_query($con,$query);
session_unset();
header('location:../index.php');
}


?>