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
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="img/core-img/preload-3.png" alt="">
        </div>
    </div>

    

    <!-- ***** Header Area Start ***** -->
  @include("header")
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/new.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Menu</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>Menu</h2>
                    </div>
                </div>
                <div class="col-10">
                    <div class="caviar-projects-menu">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".breakfast">breakfast</button>
                            <button data-filter=".lunch">lunch</button>
                            <button data-filter=".dinner">dinner</button>
                        </div>
                    </div>
                   
                    <div class="caviar-menu-slides owl-carousel clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                            @foreach($data as $data)
                            <form action="{{url('/addcart',$data->id)}}" enctype="multipart/form-data" method="post"> @csrf
                            <div class="single_menu_item breakfast wow fadeInUp">
                                <div class="d-sm-flex align-items-center">    
                                    <div class="dish-thumb" class="align-item-primary">
                                    <img width="200" height="200" src="/foodimage/{{$data->image}}"  alt="image">
                                    </div>
                                    <div class="dish-description">
                                    <h3 class="title">{{$data->title}}</h3>
                                    <p class=" description align-item-center">{{$data->description}}</p>    
                                    </div>
                                    <div class="dish-value align-item-end">
                                        <h3 class="price">{{$data->price}} ₹</h3>
                                      
                                        <input type="number" name="quantity" min="1" value="1" style="width:80px; border-radius: 6px;  border: 2px solid orange; margin: 9px 0;">
                                        <p><button class = "align-item-end" style="width:110px; border-radius: 6px;  border: 2px solid orange; margin: 9px 0;" type="submit" class="btn btn-warning btn-rounded btn-fw">Add to Cart</button></p>
                                    </div>
                                </div>   
                            </div>
                            </form>@endforeach 
                        </div>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->
    <section class="caviar-dish-menu clearfix" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
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
        </div>
    </section>
    <!-- ***** Special Menu Area End ***** -->

    @include("footer")

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>