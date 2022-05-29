<?php 
session_start();
$con = new mysqli('localhost','root','');
$dbconfig = mysqli_select_db($con,'kool_db');
$user_id=$_SESSION['id'];
$total=$_SESSION['total'];
$session_id=$_SESSION['session_id'];
if(isset($_POST['checkout'])){
    $query="INSERT INTO order_details(user_id,total,created_at) values ($user_id,$total,date(Y-m-d)";    $result=mysqli_query($con,$query);
    $query="SELECT id FROM order_details ORDER BY id DESC LIMIT 1";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    $query="SELECT * from cart_item where session_id=$session_id" ;
    $result=mysqli_query($con,$query);
    while( $row=mysqli_fetch_assoc($result)){ 
    $product_id=$row['product_id'];  
    $query="INSERT INTO order_items(order_id,product_id) values ($id,$product_id)";
    $result1=mysqli_query($con,$query);
    }

    header('location:../../../indexprofil.php');    
}
?>