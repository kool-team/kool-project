<?php
    session_start();
    include '../../../../dashboard/admin/database/connect.php';
    $session_id=$_SESSION['session_id'];
    if(isset($_GET['product'])){
        if($_GET['product'] === "all"){
            $query = "DELETE FROM cart_item WHERE session_id= $session_id";
            $result = mysqli_query($con,$query);
            $_SESSION['iscardempty'] = true;
        }
        else{
            $product_id = $_GET['product'];
            $query = "DELETE FROM cart_item WHERE session_id= $session_id and product_id = $product_id";
            $result = mysqli_query($con,$query);
            
            $query = "SELECT count(*) as nbr FROM cart_item WHERE session_id= $session_id";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_array($result);
            if($row['nbr'] ==  0){
                $_SESSION['iscardempty'] = true;
            }
        }
    }
    header('location:index.php');
?>