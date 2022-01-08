<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Food & Fun</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    

</head>

<body>
    <!-- Preloader -->
   @include("preloader")

    <!-- ***** Search Form Area ***** -->
    

 
@include("header")
   
      <!-- ****** Welcome Area Start ****** -->
@include("welcome1")
    <!-- ****** Welcome Area End ****** -->
    
    <!-- ****** About Us Area Start ****** -->
@include("aboutus")

    <!-- ****** About Us Area End ****** -->
   

 <!-- ***** Special Menu Area Start ***** -->
 <section class="caviar-dish-menu clearfix section-padding-100" id="menu">
     
        <div class="container">
        <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                    <!-- btn -->
                    <a href="food" class="btn caviar-btn"><span></span> View The Menu</a>
                </div>
            </div>
            <div class="row">
             
            <div class="col-12 d-sm-flex col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow  " data-wow-delay="1.5s">
                        <img src="img/menu-img/dish-1.png" alt="">
                        <div class='item'>
                           <b><h1  class="title">Pizza</h1></b> 
                            <b class="price">₹45</b><br>
                           <b><i class='description'>Tasty pizza</i></b> 
                            <div><input type="number" name="quantity" min="1" value="1" style="width:80px; border-radius: 6px;  border: 2px solid orange; margin: 8px 0;"></div>
                            <p><button style="width:110px; border-radius: 6px;  border: 2px solid orange; margin: 9px 0;" type="submit" class="btn btn-warning btn-rounded btn-fw">Add to Cart</button></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow " data-wow-delay="1.5s">
                        <img src="img/menu-img/dish-2.png" alt="">
                        <div class='item'>
                           <b><h1  class="title">Pizza</h1></b> 
                            <b class="price">₹45</b><br>
                           <b><i class='description'>Tasty pizza</i></b> 
                            <div><input type="number" name="quantity" min="1" value="1" style="width:80px; border-radius: 6px;  border: 2px solid orange; margin: 8px 0;"></div>
                            <p><button style="width:110px; border-radius: 6px;  border: 2px solid orange; margin: 9px 0;" type="submit" class="btn btn-warning btn-rounded btn-fw">Add to Cart</button></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow " data-wow-delay="1.5s">
                        <img src="img/menu-img/dish-3.png" alt="">
                        <div class='item'>
                           <b><h1  class="title">Pizza</h1></b> 
                            <b class="price">₹45</b><br>
                           <b><i class='description'>Tasty pizza</i></b> 
                            <div><input type="number" name="quantity" min="1" value="1" style="width:80px; border-radius: 6px;  border: 2px solid orange; margin: 8px 0;"></div>
                            <p><button style="width:110px; border-radius: 6px;  border: 2px solid orange; margin: 9px 0;" type="submit" class="btn btn-warning btn-rounded btn-fw">Add to Cart</button></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    
    <!-- ****** team Area Start ****** -->
   <!-- <section class="caviar-dish-menu section-padding-100" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/menu-img/11.jpg" border-radius="50%" alt="avatar">
                        <div class="dish-info">
                            <h6 class="name">Aditya Burman</h6>
                           
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/menu-img/dish-2.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Alauddin Mallik</h6>
                          
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/menu-img/dish-3.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Amit Kumar</h6>
                            
                        </div>
                    </div>
                </div>
</div> <br> <br>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/menu-img/14.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Anshu Jangid</h6>
                          
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="img/menu-img/15.png" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Durga Teli</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="img/menu-img/16.jpg" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Krishna Pada Mondal</h6> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ****** Awards Area End ****** -->
    <!-- ****** Team Area Start ****** -->
  
    <!-- ****** Team Area End ****** -->
    
    
    <!-- ****** Testimonials Area Start ****** -->
@include("foodchef")
    
    <!-- ****** Testimonials Area End ****** -->

    <!-- ****** Reservation Area Start ****** -->
@include("reservation")
    

    
    
  
@include("footer")
    
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="js/google-map/map-active.js"></script>
</body>