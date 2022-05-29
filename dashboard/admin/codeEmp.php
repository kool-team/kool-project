<?php
    include 'security.php';
    
    /*add user "admin" */

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

    /* add employee */

    if(isset($_POST['registerbtn'])){
        $id = $_POST['id'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $dateNaissance = $_POST['dateNaissance'];
        $salaire = $_POST['salaire'];
        $tel = $_POST['tel'];
        $dateEntree = $_POST['dateEntree'];
        $nbHeures = $_POST['nbHeures'];

        $query = "INSERT INTO employees VALUES('$id','$prenom','$nom','$dateNaissance','$salaire','$tel','$dateEntree','$nbHeures')";
        $query_run = mysqli_query($con,$query);

        if($query_run ){
            header('location:employee.php');
          }else{
            die(mysqli_error($con));
          }
    }else{
        die(mysqli_error($con));
    }
   
      
?>