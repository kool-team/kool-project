<?php 
    include 'security.php';
    include 'includes/header.php';
    include 'includes/sidebar.php'; 
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Etat des stocks a jour au : 09/04/2022</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                Ajouter Un Produit
                            </button>
                    </div>

                    <!-- "Ajouter un produit" Moadl -->
                    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Nom de produit </label>
                                    <input type="text" name="prod_name" class="form-control" placeholder="Entrer Le nom de produit" required>
                                </div>
                                <div class="form-group">
                                    <label>Description </label>
                                    <input type="text" name="description" class="form-control" placeholder="Description de produit" required>
                                </div>
                                <div class="form-group">
                                    <label>Categorie </label>
                                    <input type="text" name="categorie" class="form-control" placeholder="Entrer de produit" required>
                                </div>
                                <div class="form-group">
                                    <label>Prix </label>
                                    <input type="text" name="price" class="form-control" placeholder="Entrer prix de produit" required>
                                </div>
                                <div class="form-group">
                                    <label>Ajouter l'image de produit </label>
                                    <input type="file" name="product_image" id="product_image" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="add_product_btn" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                        </div>
                    </div>
                    </div>                   

                    <!-- End "Ajouter un produit" Moadl -->

                        <div class="card-body">
                            <?php
                               if(isset($_SESSION['status']) && $_SESSION['status'] != ""){
                                    echo '<h2 class="bg-danger text_white">'.$_SESSION['status'].'</h2>';
                                    unset($_SESSION['status']);
                                }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom de produit</th>
                                            <th>Description</th>
                                            <th>Categorie</th>
                                            <th>Prix</th>  
                                            <th>Image</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                             $query = "select * from product";
                                             $query_run = mysqli_query($con,$query);
 
                                             if($query_run){
                                                 while($row = mysqli_fetch_assoc($query_run)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['categorie'];?></td>
                                            <td><?php echo $row['price'];?></td>
                                            <td><img src="<?php echo "upload/".$row['img'];?>" width="100px" height="100px" alt=""></td>
                                            <td>
                                                <button class="btn btn-primary"><a href="update_product.php?updateid=<?php echo $row['id']?>" class="text-light">Update</a></button>
                                            </td>
                                            <td>
                                                 <button class="btn btn-danger"><a href="delete_product.php?deleteid=<?php echo $row['id']?>" class="text-light">Delete</a></button>  
                                            </td>
                                        </tr>
                                        <?php
                                                 }
                                                }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            

            <?php
                include 'includes/scripts.php';
                include 'includes/footer.php';
            ?>
