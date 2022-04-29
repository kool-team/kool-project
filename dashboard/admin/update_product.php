<?php 
    include 'security.php';
    
    if(isset($_GET['updateid'])){
        $prod_id = $_GET['updateid'];
        $sql = "select * from product where id = $prod_id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $image_data = $row['img'];

        if(isset($_POST['update'])){
            $edited_prod_name = $_POST['prod_name'];
            $edited_description = $_POST['description'];
            $edited_categorie = $_POST['categorie'];
            $edited_price = $_POST['prod_price'];
            $edited_image = $_FILES['edit_product_image']['name'];

            if($edited_image != NULL){
                unlink("upload/".$row['img']);
                $image_data = $edited_image;
                move_uploaded_file($_FILES['edit_product_image']['tmp_name'],"upload/".$_FILES['edit_product_image']['name']);
            }


             $sql = "update product set 
            name = '$edited_prod_name', 
            description = '$edited_description',   
            categorie = '$edited_categorie',
            price = $edited_price,
            img = '$image_data'
            WHERE id = $prod_id";
            $result = mysqli_query($con,$sql);
            
            if($result){
            header('location:stock.php');
            }else{
            die(mysqli_error($con));
            }
            }
        }
        

        include 'includes/header.php';
        include 'includes/sidebar.php';

?>



                <div class="container my-5">
                <form  method="POST" enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label class="form-label">Nom de produit</label>
                        <input type="text" name="prod_name" class="form-control"   
                        value="<?php echo $row['name']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control"   
                        value="<?php echo $row['description']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categorie</label>
                        <input type="text" name="categorie" class="form-control"   
                        value="<?php echo $row['categorie']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="text" name="prod_price" class="form-control" 
                        value="<?php echo $row['price']?>" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ajouter l'image de produit</label>
                        <input type="file" name="edit_product_image" id="edit_product_image" class="form-control" >
                    </div>
                    
            
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
    </div>
            

            <?php
                include 'includes/scripts.php';
                include 'includes/footer.php';
            ?>
