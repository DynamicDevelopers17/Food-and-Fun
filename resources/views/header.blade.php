    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="">Food & Fun</a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Food Menu</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#reservation">Reserve a table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#getintouch">Contact us</a>
                                </li>
                                
                                @if (Route::has('login'))
                
                    @auth
                   <li><x-app-layout></x-app-layout></li>
                    @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                         <li>  <a href="{{ route('register') }}" class="nav-link">Register</a></li> 
                        @endif
                    @endauth
                
            @endif
                                </li>
                                <li button class="btn btn-light bg-linear-gradient btn-rounded btn-icon">
                                    @auth  
                                                                                                                <a class="nav-item" button class="btn btn-transparent btn-rounded btn-icon" href="{{url('/showcart',Auth::user()->id)}}">
                                                                                                                        Cart{{$count}} 
                                                                                                                </a>
                                                                                                                @endauth 
                                                                                                                @guest 
                                                                                                                        Cart[0] 
                                                                                                                @endguest           </a>
                                </li>     
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->  