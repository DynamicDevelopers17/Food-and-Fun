


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Food & Fun</title>
      
      <!-- Favicon   <link rel="shortcut icon" href="../../assets/images/favicon.ico" />-->
     
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="../../customAuth/css/core/libs.min.css">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="../../customAuth/css/aprycot.min.css?v=1.0.0">  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          
      </div>  
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="container-fluid bg-circle" id="auth-login">
         <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 col-xl-4">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="d-flex justify-content-center mb-0">
                        <div class="card-body text-center">
                           <a href="../../dashboard/">
                              <h2 class="mb-2 text-center">Welcome to</h2>
                              <h1 class="mb-2 text-center">Food & Fun</h1>
                              <h5 class="mb-2 text-center">Digital Restaurant</h5>
                           </a>
                           <h2 class="mb-2 text-center">Reset Password</h2>
                           <p class=" text-center">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                           @if (session('status'))
                              <div class="mb-4 font-medium text-sm text-green-600">
                                 {{ session('status') }}
                              </div>
                           @endif
                           <x-jet-validation-errors class="mb-4" />
                           <form method="POST" action="{{ route('password.email') }}">@csrf
                         
                           <div class="row text-start">
                              <div class="col-lg-12">
                                 <div class="floating-label form-group">
                                    <x-jet-label for="email"  class="form-label" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" aria-describedby="email"  name="email" :value="old('email')" required autofocus />
                                 </div>
                              </div>
                           </div>
                                 <x-jet-button type="submit"  class="btn btn-primary">{{ __('Email Password Reset Link') }}  </x-jet-button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
             <div class="col-md-12 col-lg-5 col-xl-8 d-lg-block d-none vh-100 overflow-hidden">
               <div>
                  <img src="../../customAuth/images/auth/01.png" class="rounded-circle first-img" alt="images">
                  <img src="../../customAuth/images/auth/02.png" class="rounded-circle second-img" alt="images">
                  <img src="../../customAuth/images/auth/03.png" class="rounded-circle third-img" alt="images">
                  <img src="../../customAuth/images/auth/04.png" class="rounded-circle fourth-img" alt="images">
                  <img src="../../customAuth/images/auth/05.png" class="rounded-circle fifth-img" alt="images">
                  <img src="../../customAuth/images/auth/06.png" class="rounded-circle six-img" alt="images">
                  <img src="../../customAuth/images/auth/01.png" class="rounded-circle seventh-img" alt="images">
                  <img src="../../customAuth/images/auth/02.png" class="rounded-circle eight-img" alt="images">
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Required Library Bundle Script -->
    <script src="../../customAuth/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="../../customAuth/js/core/external.min.js"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="../../customAuth/js/charts/dashboard.js"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="../../customAuth/js/fslightbox.js"></script>
    
    <!-- app JavaScript -->
    <script src="../../customAuth/js/app.js"></script>
    
    <!-- moment JavaScript -->
    <script src="../../customAuth/vendor/moment.min.js"></script>  </body>
</html>