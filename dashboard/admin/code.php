<?php
    include 'security.php';
    
    

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $query_run = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($query_run);
        if($row['permission'] === 'admin'){
            $_SESSION['username'] = $_POST['email'];
            header('Location:index.php');
        }
        else if($row['permission'] === 'user'){
            $_SESSION['username_user'] = $_POST['email'];
            header('Location:home.php');
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