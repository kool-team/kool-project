<?php 
    include 'security.php';
    

    //employees
    if(isset($_GET['empid'])){
        $id = $_GET['empid'];
        $sql = "select * from employees where id = '$id'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $salaire = $_POST['salaire'];
            
            $sql = "update employees set 
            id = '$id',
            nom = '$nom',
            prenom = '$prenom',
            salaire = '$salaire'
            WHERE id = $id";
            $result = mysqli_query($con,$sql);
        
            if($result){
              header('location:employee.php');
            }else{
              die(mysqli_error($con));
            }
          }
        }




        include 'includes/header.php';
        include 'includes/sidebar.php';

?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                

                <div class="container my-5">
                <form  method="POST">
                    <div class="mb-3">
                        <label class="form-label">Id</label>
                        <input type="text" name="id" class="form-control"   
                        value="<?php echo $row['id']?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control"   
                        value="<?php echo $row['nom']?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control"   
                        value="<?php echo $row['prenom']?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Salaire</label>
                        <input type="text" name="salaire" class="form-control" 
                        value="<?php echo $row['salaire']?>" >
                    </div>                    
                    <div class="mb-3">
                        <label class="form-label">Nombre d'heures</label>
                        <input type="number" name="nbHeures" class="form-control"
                        value="<?php echo $row['nbHeures']?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
    </div>
            

            <?php
                include 'includes/scripts.php';
                include 'includes/footer.php';
            ?>
