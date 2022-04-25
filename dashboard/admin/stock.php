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
                        <form action="code.php" method="POST">

                            <div class="modal-body">

                                <div class="form-group">
                                    <label> Référence de produit </label>
                                    <input type="text" name="ref_produit" class="form-control" placeholder="Entrer la Référence de produit">
                                </div>
                                <div class="form-group">
                                    <label> Description </label>
                                    <input type="text" name="description" class="form-control" placeholder="Description de produit">
                                </div>
                                <div class="form-group">
                                    <label> Stock initial </label>
                                    <input type="text" name="stock_initial" class="form-control" placeholder="Entrer le stock initail">
                                </div>
                                <div class="form-group">
                                    <label> Somme des entrés </label>
                                    <input type="text" name="somme_entres" class="form-control" placeholder="Entrer la somme des entrés">
                                </div>
                                <div class="form-group">
                                    <label> Somme des sorties </label>
                                    <input type="text" name="somme_sorties" class="form-control" placeholder="Entrer la somme des sorties">
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                        </div>
                    </div>
                    </div>

                   

                    <!-- End "Ajouter un produit" Moadl -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Référence de prodit</th>
                                            <th>Description</th>
                                            <th>Stock initial</th>
                                            <th>Somme des entrées</th>
                                            <th>Somme des sorties</th>
                                            <th>Stock Final</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $query = "select * from stock";
                                            $query_run = mysqli_query($con,$query );

                                            if($query_run){
                                                while($row = mysqli_fetch_assoc($query_run)){
                                                    $ref_produit = $row['ref_produit'];
                                                    $description = $row['description'];
                                                    $stock_initial = $row['stock_initial'];
                                                    $somme_entres = $row['somme_entres'];
                                                    $somme_sorties = $row['somme_sorties'];
                                                    $stock_final = $row['stock_final'];
                                                    echo '
                                                    <tr>
                                                    <td>'.$ref_produit.'</td>
                                                    <td>'.$description.'</td>
                                                    <td>'.$stock_initial.'</td>
                                                    <td>'.$somme_entres.'</td>
                                                    <td>'.$somme_sorties.'</td>
                                                    <td>'.$stock_final.'</td>
                                                    <td>
                                                        <button class="btn btn-primary"><a href="update.php?updateid='.$ref_produit.'" class="text-light">Update</a></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$ref_produit.'" class="text-light">Delete</a></button>  
                                                    </td>
                                                </tr>
                                                    ';
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
