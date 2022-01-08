<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <span >
        <h2 alt="logo">Food & Fun</h2>
           
      </span>
        </div>
        
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{'/redirects'}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-face"></i>
              </span>
              <span class="menu-title">Customer's Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-food-variant"></i>
              </span>
              <span class="menu-title">Food Details</span>
            </a>


           

                

            
          </li><li class="nav-item menu-items">
            <a class="nav-link" href="{{('/viewchef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chef-hat"></i>
              </span>
              <span class="menu-title">Chef Details</span>
            </a>
          </li><li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table"></i>
              </span>
              <span class="menu-title">View Reserve Desk</span>
            </a>
          </li><li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Customer Order</span>
            </a>
          </li>
          </li><li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/messageadmin')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Customer Message</span>
            </a>
          </li>


        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center fixed-top">
            <span>
               <h2 alt="logo">Food & Fun</h2>
            </span>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown border-left">
                
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <h6>
                      Full Stack Developer Team 17
                    </h6> 
                  </div>
                </a>
              </li>
              <li><x-app-layout> </x-app-layout></li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="admin/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h1 class="mb-1 mb-sm-0">Welcome to Food & Fun Admin Dashboard</h1>   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              
              <div class="col-sm-4 grid-margin">
                <div class="card ">
                  
                  <div class="card-body">
                    <h3>Customer Details</h3>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <span>
                        <a href="{{('/users')}}"  class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Customer Details</a>
                        </span>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-face text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
               
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Food Details</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <span>
                        <a href="{{('/foodmenu')}}" class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Food Details</a>
                        </span>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-food-variant text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Chef Details</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <span>
                        <a href="{{('/viewchef')}}"  class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Chef Details</a>
                        </span>
                        </div>
                        
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-chef-hat text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin ">
                <div class="card">
                  <div class="card-body">
                    <h5>  View Reservation Table  </h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <span>
                        <a href="{{('/viewreservation')}}"  class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Table Reservation</a>
                        </span>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-table text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Customers Order</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <span>
                        <a href="{{('/orders')}}" class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Customer Orders</a>
                        </span>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-cart text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Cutomer Message</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <span>
                        <a href="{{('/messageadmin')}}" class="btn btn-outline-dark btn-rounded get-started-btn text-white">View Customer message</a>
                        </span>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-message text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Food & Fun Admin Panel</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>