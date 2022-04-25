<?php 
session_start();
$_SESSION['iscardempty']=true;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="Free Website Code, freewebsitecode.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOOL</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- header section starts      -->

    <header>
        <a style="text-decoration: none" href="index.html" class="logo"><i class="fas fa-hamburger"></i> K O O L</a>

        <nav class="navbar">
            <a style="text-decoration: none" class="active" href="#home">home</a>
            <a style="text-decoration: none" href="#dishes">dishes</a>

            <a style="text-decoration: none" href="javascript:showcat();" href="#head">categories</a>
            <a style="text-decoration: none" href="#about">about</a>
            <a style="text-decoration: none" href="#stat">our stat</a>
            <a style="text-decoration: none" href="pages/cart/index.php" target="_blank"
                class="fas fa-shopping-cart"></a>
            <!-- <a href="#order">order</a>  -->
        </nav>

        <div class="dropdown">
            <button class="btn btn-secondary " type="button" id="dropdownMenuButton" aria-haspopup="true"
                data-toggle="dropdown" aria-expanded="false">
                D
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="logout.php/?demo=true">logout</a>
            </div>
        </div>
        </div>
    </header>

    <!-- header section ends-->

    <div id="head" style="
        width: 90%;
        height: 300px;
        padding: 50px 0;
        text-align: center;
        margin: 85px;
        background-color: #ffd310;
        display: none;
      ">
        This is my DIV element.
        <span><button>
                <a>show me more</a>
            </button></span>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span style="color: var(--yellow)">our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                            natus dolor cumque?
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span style="color: var(--yellow)">our special dish</span>
                        <h3>fried chicken</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                            natus dolor cumque?
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span style="color: var(--yellow)">our special dish</span>
                        <h3>hot pizza</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
                            natus dolor cumque?
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" style="position: relative"></div>
        </div>
    </section>
    <!-- ends he -->

    <!-- dishes section starts  -->
    <span id="temp" class="value" style="display: none"></span>
    <script>
    function f(a) {
        document.getElementById('temp').innerHTML = a;
        console.log(a);
        return;
    }
    </script>
    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>

        <div class="box-container">
            <div class="box">
                <a style="text-decoration: none" href="" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-1.png" alt="" />
                <h3>PIZZA HUT</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button style="text-decoration: none" class="btn" onclick="javascript:f('PIZZA HUT SMALL')">add to
                    cart</button>
                <span style="position: relative; top: 10px">$15.99</span>
            </div>

            <div class="box">
                <a style="text-decoration: none" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-2.png" alt="" />
                <h3>burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button style="text-decoration: none" class="btn " onclick="javascript:f('burger')">add to cart</button>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>

            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-3.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <button style="text-decoration: none" class="btn" onclick="javascript:f('tacos')">add to cart</button>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>

            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-6.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a style="text-decoration: none" href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>
            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-4.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>

            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-2.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a style="text-decoration: none" href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>

            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-5.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a style="text-decoration: none" href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>
            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-3.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a style="text-decoration: none" href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>
            <div class="box">
                <a style="text-decoration: none" href="#" class="fas fa-heart"></a>
                <a style="text-decoration: none" href="#" class="fas fa-eye"></a>
                <img src="images/dish-6.png" alt="" />
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a style="text-decoration: none" href="#" class="btn">add to cart</a>
                <span style="position: relative; top: 6px">$15.99</span>
            </div>
        </div>
    </section>

    <!-- dishes section ends -->
    <!-- about section starts  -->

    <section class="about" id="about">
        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">
            <div class="image">
                <img src="images/about-img.png" alt="" />
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                    sequi corrupti corporis quaerat voluptatem ipsam neque labore modi
                    autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio
                    corporis nihil!
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                    nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>

    <!-- about section ends -->
    <!-- our stat (counter) -->
    <section class="stat" id="stat">
        <h3 class="sub-heading">our stat</h3>
        <h1 class="heading">what are our stat</h1>

        <div class="container">
            <div class="row">
                <div class="four col-md-3">
                    <div class="counter-box colored">
                        <i class="fa fa-user-circle"></i>
                        <span class="counter">4310</span>
                        <p>Happy Customers</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fa fa-check"></i> <span class="counter">5321</span>
                        <p>Registered Members</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="counter">165</span>
                        <p>Available Products</p>
                    </div>
                </div>
                <div class="four col-md-3">
                    <div class="counter-box">
                        <i class="fa fa-users"></i> <span class="counter">1563</span>
                        <p>something-else</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 2nd exemple -->
    <!-- </div>
  <div class="counter-up">
    <div class="content">
      <div class="box">
        <div class="icon"><i class="fas fa-history"></i></div>
        <div class="counter">724</div>
        <div class="text">Working Hours</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-gift"></i></div>
        <div class="counter">508</div>
        <div class="text">Completed Projects</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <div class="counter">436</div>
        <div class="text">Happy Clients</div>
      </div>
      <div class="box">
        <div class="icon"><i class="fas fa-award"></i></div>
        <div class="counter">120</div>
        <div class="text">Awards Received</div>
      </div>
    </div>
  </div> -->
    <!-- ends here -->
    <!-- footer section starts  -->

    <section class="footer" style="margin: 18px">
        <hr />
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">indonesia</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">france</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">stat</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">+111-222-3333</a>
                <a href="#">KOOL-TEAM@gmail.com</a>
                <a href="#">KOOL-TEAM@gmail.com</a>
                <a href="#">City - Country - 000000</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>
        </div>

        <div class="credit">
            Copyright @ 2021 by
            <span><a href="">KOOL TEAM</a></span>
        </div>
    </section>
    <br /><br />

    <!-- footer section ends -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    $(function() {
        $("button").on("click", function() {
            $.ajax({
                method: "POST",
                url: "fonction.php",
                data: {
                    prod_name: document.getElementById('temp').innerHTML
                },
                beforeSend: function(xhr) {

                },
                success: function(data, status, xhr) {
                    // $('#show').html(data);
                    console.log(data);
                },
                error: function(xhr, status, error) {

                },
                complete: function(xhr, status) {

                }
            })
        })
    })
    </script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       funtion sweetalertclick(){
   Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'added to your card',
    showConfirmButton: false,
    timer: 1500
  })
}
    </script> -->
</body>

</html>