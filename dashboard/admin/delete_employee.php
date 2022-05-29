<?php
    include 'security.php';

    //employee
    if(isset($_GET['empid'])){
        $id = $_GET['empid'];
        $sql = "delete from employees where id = '$id'";
        $result = mysqli_query($con,$sql);

        if($result){
            header('location:employee.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>