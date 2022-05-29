<?php 
    include 'security.php';
    include 'includes/header.php';
    include 'includes/sidebar.php'; 
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Employées</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Etat des stocks a jour au : 09/04/2022</h6>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                Ajouter Un Employee
                            </button>
                    </div>

                    <!-- "Ajouter un produit" Modal -->
                    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un employee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="codeEmp.php" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label> Id* </label>
                                            <input type="text" name="id" class="form-control" placeholder="Entrer l'Id">
                                        </div>
                                        <div class="form-group">
                                            <label> Prenom* </label>
                                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                                        </div>
                                        <div class="form-group">
                                            <label> Nom* </label>
                                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                                        </div>
                                        <div class="form-group">
                                            <label> Date de naissance* </label>
                                            <input type="date" name="dateNaissance" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> Salaire* </label>
                                            <input type="text" name="salaire" class="form-control" placeholder="Salaire">
                                        </div>
                                        <div class="form-group">
                                            <label> Tel* </label>
                                            <input type="text" name="tel" class="form-control" placeholder="06...." pattern="06[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
                                        </div>
                                        <div class="form-group">
                                            <label> Date d'entrée* </label>
                                            <input type="date" name="dateEntree" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label> Nombre d'heures* </label>
                                            <input type="number" name="nbHeures" class="form-control">
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
                    


                    <!-- End "Ajouter un produit" Modal -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Prenom</th>
                                            <th>Nom</th>
                                            <th>Date de naissance</th>
                                            <th>Salaire</th>
                                            <th>Tel</th>
                                            <th>Date d'entrée</th>
                                            <th>nbHeures</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $con = new mysqli('localhost','root','','kool_db');
                                            $query = "select * from employees";
                                            $query_run = mysqli_query($con,$query );

                                            if($query_run){
                                                while($row = mysqli_fetch_assoc($query_run)){
                                                    $id = $row['id'];
                                                    $prenom = $row['prenom'];
                                                    $nom = $row['nom'];
                                                    $dateNaissance = $row['date_de_naissance'];
                                                    $salaire = $row['salaire'];
                                                    $tel = $row['tel'];
                                                    $dateEntree = $row['date_d_entree'];
                                                    $nbHeures = $row['nbHeures'];
                                                    echo '
                                                    <tr>
                                                    <td>'.$id.'</td>
                                                    <td>'.$prenom.'</td>
                                                    <td>'.$nom.'</td>
                                                    <td>'.$dateNaissance.'</td>
                                                    <td>'.$salaire.'</td>
                                                    <td>'.$tel.'</td>
                                                    <td>'.$dateEntree.'</td>
                                                    <td>'.$nbHeures.'</td>
                                                    <td>
                                                        <button class="btn btn-primary"><a href="update_employee.php?empid='.$id.'" class="text-light">Update</a></button>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger"><a href="delete_employee.php?empid='.$id.'" class="text-light">Delete</a></button>  
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