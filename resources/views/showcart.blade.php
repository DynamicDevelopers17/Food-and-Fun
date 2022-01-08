<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/redirects">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
   
<style>

.child{
      grid-auto-flow: column;
      justify-content: center;
       
      }
.parent{display: grid;
        grid-auto-flow: column;
        justify-content: center;
}
</style>
</head>

<body>
    
@include("preloader")

    <!-- ***** Search Form Area ***** -->


     <!-- ***** Header Area Start ***** -->
 @include("header")
    <!-- ***** Header Area End ***** -->  
   
      <!-- ****** Welcome Area Start ****** -->
  <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
  <!-- Welcome Slides -->
  <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
          
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-1.jpg);">
                <div class="container h-100">
                   <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Check Out Page</h2>   
                                <p>Hi There</p>
                                <a href="#" class="btn caviar-btn"><span></span>Checkout Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->
    
  


    
            <div class="column">
              <div class="col-lg-12  grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div class="section-heading text-center">
                        <h2>Check out now</h2><br>
                    
                       
                    <div class=" parent table  table-hover table-contextual table-responsive">
                   
                      <table class=" child table  table-bordered ">
                        <thead>
                          <tr>
                            <th> Food Image </th>
                            <th> Food Name </th>
                            <th> Food Price </th>
                            <th> Quantity </th>
                            <th> Total Price </th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach($data as $data)
                    <form action="{{url('orderconfirm')}}" method="POST" >@csrf
                          <tr>
                            <td class="py-1">
                              <img width="100" height="100" src="/foodimage/{{$data->image}}" alt="image">
                            </td>
                            <td>
                            <input type="text" name="foodname[]" value="{{$data->title}}" hidden=""> {{$data->title}}
                            </td>
                            <td>
                            <input type="text" name="price[]" value="{{$data->price}}" hidden="">{{$data->price}}.00 ₹
                            </td>
                            <td>
                            <input type="number" name="quantity[]" value="{{$data->quantity}}" hidden="" >{{$data->quantity}}
                            </td>
                            <td>
                                {{$data->price * $data->quantity}}.00 ₹
                            </td>
                            </tbody>
                          </tr>
                          @endforeach
                        </div> 
                        </tbody> 
                      </table>
                      <table class=" child table table-bordered ">
                          <thead>
                              <tr>
                                  <th> Remove Item </th>   
                                  
                              </tr>
                          </thead>
                          <tbody>  
                              @foreach($data2 as $data2)
                              <tr>
                              <td><a class="btn btn-warning" align-text-center href="{{url('/remove',$data2->id)}}" >Remove</a></td>
                              </tr>
                              @endforeach
                            
                             
                              
                      </table>
                         
                      
                            
                           
                        </div>
                    </div>
        




                    

<div align="center" style="padding: 10px;">



<a class="btn btn-warning btn-rounded"  id="order">Order Now</a>

</div>




<div id="appear" align="left" style="padding: 10px; display: none;">


<div style="padding: 10px;">
    <label>Name</label>
    <input type="text" class="form-control form-rounded" name="name" placeholder="Name">
</div>

<div style="padding: 10px;">
    <label>Phone</label>
    <input type="number"class="form-control"  name="phone" placeholder="Phone Number">
</div>

<div style="padding: 10px;">
    <label>Address</label>
    <input type="text" class="form-control"  name="address" placeholder="Address">
</div>


<div style="padding: 10px;">
   
    
 
    <input class="btn btn-success btn-rounded" type="submit" class="form-control" value="Order Confirm">

 
    <a class="btn btn-danger btn-rounded"  class="form-control" value="Cancel "  id="close">Cancel Now</a>
</div>


</div>

</form>
                  
</div>
</div>
</div>
</div>
<br>





<script type="text/javascript">
    
    $("#order").click(

        function()
        {
            $("#appear").show();

        }
        );




    $("#close").click(

        function()
        {
            $("#appear").hide();

        }
        );



</script>




          


 







 <!-- ****** Footer Area Start ****** -->
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
</body>