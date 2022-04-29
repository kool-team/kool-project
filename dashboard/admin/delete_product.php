<?php
    include 'security.php';

    if(isset($_GET['deleteid'])){
        $prod_id = $_GET['deleteid'];

        $sql = "SELECT * FROM product where id = $prod_id";
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);
        unlink("upload/".$row['img']);

        $sql = "delete from product where id = $prod_id";
        $result = mysqli_query($con,$sql);

        if($result){
            header('location:stock.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>