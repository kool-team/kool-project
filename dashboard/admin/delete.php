<?php
    include 'security.php';

    if(isset($_GET['deleteid'])){
        $ref_produit = $_GET['deleteid'];
        $sql = "delete from stock where ref_produit = '$ref_produit'";
        $result = mysqli_query($con,$sql);

        if($result){
            header('location:tables.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>