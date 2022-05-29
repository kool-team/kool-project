
<?php 
    include 'security.php';
    include 'includes/header.php';
    include 'includes/sidebar.php'; 

    
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <?php
                                // employees data from database
                                $query = "SELECT * FROM employees";
                                $result = mysqli_query($con,$query);

                                // put data in php arrays
                                $nom = array();
                                $nbH = array();
                                while($row = mysqli_fetch_assoc($result)){
                                    $nom[] = $row['prenom'].' '.$row['nom'];
                                    $nbH[] = $row['nbHeures'];
                                    
                                }
                    ?>
                    <?php
                                // order details data from db
                                $query2 = "SELECT total,created_at as date,dayname(created_at) as days FROM `order_details` ORDER BY id DESC LIMIT 7";
                                $result2 = mysqli_query($con,$query2);
                                
                                // put data in php arrays
                                $date = array();
                                $days = array();
                                $total = array();
                                while($row = mysqli_fetch_assoc($result2)){
                                    $days[] = $row['days'];
                                    $total[] = $row['total'];
                                    $date[] = $row['date'];
                                }
                    ?>
                    <!-- charts -->
                    <div class="container">
                        <h2>Charts : </h2>
                        <ul>
                        <div class="employee">
                            <li>
                            <h3>Employees :</h3>
                            </li>
                            <div class="col">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <br><br>
                        <div class="order">
                            <li>
                            <h3>Earnings :</h3>
                            </li>
                            <div class="col">
                                    <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                        </ul>
                        <!--
                            <div class="container">
                                <h2>Charts : </h2>
                                <div class="row">
                                    <div class="col-6">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <div class="col-6">
                                            <canvas id="myChart2"></canvas>
                                    </div>
                                </div>
                            </div>

                        -->
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            // EMPLOYEE
                            const nom = <?php echo json_encode($nom); ?> ;
                            const nbH = <?php echo json_encode($nbH); ?> ;
                            const labels = nom ;
                            const ctx = document.getElementById("myChart").getContext("2d") ;
                            let delayed; //for delay animation
                            //background color gradient
                            let gradient = ctx.createLinearGradient(0,0,0,400);
                            gradient.addColorStop(0,"rgba(100,20,255,1)");
                            gradient.addColorStop(1,"rgba(50,10,127,0.5)")
                            //background color gradient1
                            let gradient1 = ctx.createLinearGradient(0,0,0,400);
                            gradient.addColorStop(0,"rgba(255,20,100,1)");
                            gradient.addColorStop(1,"rgba(127,10,50,0.5)")
                            
                            const data = {labels: labels,datasets: [{backgroundColor: gradient,data: nbH,}]};
                                
                            const config = {
                                type: 'bar',
                                data: data ,
                                options: {
                                plugins :{
                                    title: {display: true,text: "Work hours per employee"},
                                    legend : {display : false,},
                                },
                                scales : {
                                    y : {beginAtZero : true,},
                                },
                                responsive : true,
                                animation : {
                                    onComplete : () =>{
                                    delayed = true;
                                    },
                                    delay : (context) =>{
                                    let delay = 0;
                                    if(context.type === "data" && context.mode === "default" && !delayed){
                                        delay = context.dataIndex * 300 + context.datasetIndex * 100;
                                    }
                                    return delay; },
                                },
                                },
                            };


                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                            
                            // ORDER DETAILS
                            const days = <?php echo json_encode($days); ?>;
                            const total = <?php echo json_encode($total); ?>;
                            const date = <?php echo json_encode($date); ?>;
                            const labels1 = days;
                            const data1 = {
                                labels : labels1,
                                datasets : [{
                                backgroundColor: gradient,
                                data : total,
                                }],
                            } ;
                            const config2 = {
                                type : 'line',
                                data : data1,
                                options : {
                                plugins : {
                                    title : {display : true, text : "Earnings of the last 7 days"},
                                    legend : {display : false},
                                    tooltip: {
                                        callbacks : {
                                            afterTitle : function(context) {
                                                console.log(context);
                                                return date[context[0].dataIndex];
                                            },
                                        },
                                    },
                                },
                                scales : {
                                    y : {beginAtZero : true,},
                                },
                                responsive : true,
                                animation : {
                                    onComplete : () =>{
                                    delayed = true;
                                    },
                                    delay : (context) =>{
                                    let delay = 0;
                                    if(context.type === "data" && context.mode === "default" && !delayed){
                                        delay = context.dataIndex * 300 + context.datasetIndex * 100;
                                    }
                                    return delay; },
                                },
                                }
                            };

                            const myChart2 = new Chart(
                                document.getElementById('myChart2'),
                                config2
                            );
                        </script>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
    include 'includes/scripts.php';
    include 'includes/footer.php';
?>

    

    
