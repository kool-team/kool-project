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
            header('Location:../../front_office/indexprofil.php');
        }
        else{
            $_SESSION['status'] = 'userName or Password is incorrect';
            header('location:../../front_office/src/pages/login_registration/login.php');
        }
    }

    if(isset($_POST['add_product_btn'])){
        $prod_name = $_POST['prod_name'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        $price = $_POST['price'];
        $image = $_FILES['product_image']['name'];

        if(file_exists("upload/".$_FILES['product_image']['name'])){
            $image = $_FILES['product_image']['name'];
            $_SESSION['status'] = "Image already exists".$image;
            header('location:stock.php');
        }else{
            $query = "INSERT INTO product (name,description,categorie,price,img) VALUES('$prod_name','$description','$categorie',$price,'$image')";
            $query_run = mysqli_query($con,$query);

            if($query_run){
                move_uploaded_file($_FILES['product_image']['tmp_name'],"upload/".$_FILES['product_image']['name']);
                $_SESSION['success'] = "Product added";
                header('location:stock.php');
            }else{
                die(mysqli_error($con));
            }
            
        }
    }

    if(isset($_POST['signUpBtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        
        if($password === $confirmPassword){
            $query = "INSERT INTO users (email,password,first_name) VALUES('$email','$password','$name')";
            $result = mysqli_query($con,$query);
            header('location:../../front_office/src/pages/login_registration/login.php');
        }
        
    }
   
      
?>