<?php
    session_start();

    if(isset($_POST['logout_btn'])){
        unset($_SESSION['username']);
        session_destroy(); 
        header('location:../../index.php');
    }
?>