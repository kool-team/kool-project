<?php session_start();
if(isset($_SESSION['session_id'])){
$session_id=$_SESSION['session_id'];
$isempty=$_SESSION['iscardempty'];}
?>
<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- ===== CSS ===== -->

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" type="text/css" href="./style.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Shopping Card</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><i class="fas fa-hamburger"></i> K O O L</a>

        <nav class="navbar">
            <a class="" href="../../index.html">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <!-- <i class="fas fa-search" id="search-icon"></i> -->

            <a href="#" class="fas fa-heart" title="favories"></a>
            <a href="#" class="fas fa-shopping-cart" title="panier" style="color: #fff; background-color: #ffd310;"></a>
            <a href=""><i class="fas fa-user" title="utilisateur"></i></a>
        </div>
    </header>

    
        <div class="CartContainer" style="margin-top:85px ; margin-top: 85px;
  overflow-y: auto;
  padding-bottom: 20px;">
            <div class="Header">
                <h3 class="Heading">Shopping Cart</h3>
                <h5 class="Action">Remove all</h5>
            </div>


            <?php 
            
			$con = new mysqli('localhost','root','');
			$dbconfig = mysqli_select_db($con,'kool_db');
            $items=0;
            $somme=0;
                    if(empty($session_id)) {
                        echo '<div class="Cart-Items">
                        <div class="image-box">		 
                        </div>
                        <div class="about">
                            <span class="test">YOUR CARD IS EMPTY GET CONNECTED <a href="../login_registration/login.php">here</a></span>



                        </div>
                    </div>';
                    }else{       
                    if($isempty){
                        echo '<div class="Cart-Items">
                        <div class="image-box">
                            
                        </div>
                        <div class="about">
                            <span class="test">YOUR CARD IS EMPTY GET IT FULL <a href="../../../../front_office/indexprofil.php">here</a></span>



                        </div>
                    </div>';
                    }
                    else{
                        $query = "SELECT * FROM cart_item where session_id= $session_id";
                        $result = mysqli_query($con,$query); 
                    while($row = mysqli_fetch_assoc($result)){
                        $product_id =  $row['product_id'];
                        $quantity = $row['quantity'];
                        $query = "SELECT img,name,price FROM product WHERE id = $product_id ";
                        $result2 = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result2);
                        $img="../../../../dashboard/admin/upload/".$row['img'];
                        $somme+=$quantity*$row['price'];
                        echo '<div class="Cart-Items">
                                <div class="image-box">
                                    <img src="'.$img.'" style={{ height="120px" }} />
                                </div>
                                <div class="about">
                                    <span class="test">'.$row['name'].'</span>
                                </div>
                                <div class="counter">
                                    
                                    <div class="count">'.$quantity.'</div>
                                    
                                </div>
                                <div class="prices">
                                    <div class="amount">'.$quantity*$row['price'].'$</div>
                                    
                                    <div class="remove"><u>Remove</u></div>
                                </div>
                            </div>';
                    $items++;}
                    
                    $_SESSION['total']=$somme;
                echo '<hr>

                        <div class="checkout">
                            <div class="total">
                                <div>
                                    <div class="Subtotal">Sub-Total</div>
                                    <div class="items">'. $items .' Items</div> 
                                </div>
                                <div class="total-amount">'.$somme .'$</div>
                            </div>
                        
                            <form action="check.php" method="POST">
                                <button class="button" type="submit" name="checkout">Checkout</button>
                            </form>
                        </div>'
                        ;}}?>
        </div>
                        
        
            <!-- <div class="Cart-Items pad">
   	   	  <div class="image-box">
   	   	  	<img src="images/grapes.png" style={{ height="120px" }} />
   	   	  </div>
   	   	  <div class="about">
   	   	  	<h1 class="title"  style="line-height :25px">Grapes Juice</h1>
   	   	  	
   	   	  </div>
   	   	  <div class="counter">
   	   	  	<div class="btn">+</div>
   	   	  	<div class="count">1</div>
   	   	  	<div class="btn">-</div>
   	   	  </div>
   	   	  <div class="prices">
   	   	  	<div class="amount">$3.19</div>
   	   	  	<div class="save"><u>Save for later</u></div>
   	   	  	<div class="remove"><u>Remove</u></div>
   	   	  </div>
   	   </div> -->

    </body>

</html>