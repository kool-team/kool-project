<?php
    session_start();
    include 'database/connect.php';

    if($dbconfig){
            //DataBase connected
    }
    else{
       header('location:database/connect.php');
    }

    if(!$_SESSION['username']){
        header('location:../../index.php');
    }
?>

