<?php
    include 'security.php';
    
    

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $query_run = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($query_run);
        if($row['permission'] === 'admin'){
            $_SESSION['username'] = $_POST['email'];
            header('Location:index.php');
        }
        else if($row['permission'] === 'user'){
            $_SESSION['email'] = $_POST['email'];
            $sql = "SELECT id FROM users WHERE email = '$email'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            //session[user id] a changer;
            $_SESSION['id'] = $row['id'];

            //add user_id to shopping_sessions
            $user_id = $row['id'];
            $sql = "INSERT INTO shopping_sessions (user_id) VALUES($user_id)";
            $rseult = mysqli_query($con,$sql);

            
            $sql = "SELECT id FROM shopping_sessions WHERE user_id = $user_id";
            $rseult = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($rseult);
            $_SESSION['session_id'] = $row['id'];
            header('Location:../../indexprofil.php');
        }
        else{
            $_SESSION['status'] = 'userName or Password is incorrect';
            header('location:../../pages/login/login.php');
        }
    }

    if(isset($_POST['registerbtn'])){
        $ref_produit = $_POST['ref_produit'];
        $description = $_POST['description'];
        $stock_initial = $_POST['stock_initial'];
        $somme_entres = $_POST['somme_entres'];
        $somme_sorties = $_POST['somme_sorties'];
        $stock_final = $stock_initial + $somme_entres - $somme_sorties;

        $query = "INSERT INTO stock VALUES('$ref_produit','$description',$stock_initial,$somme_entres,$somme_sorties,$stock_final)";
        $query_run = mysqli_query($con,$query);

        if($query_run ){
            header('location:tables.php');
          }else{
            die(mysqli_error($con));
          }
    }else{
        die(mysqli_error($con));
    }

   
      
?>