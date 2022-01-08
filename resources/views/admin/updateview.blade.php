<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <span>
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
                        <h4 class="mb-1 mb-sm-0">Welcome to Food & Fun Admin Panel</h4>
                        
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
         
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Food details</h4>
                    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data"> @csrf
                      <div class="form-group">
                        <label> Change Food Name</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Food Name" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> Change Food Price</label>
                        <input type="num" class="form-control" name="price" value="{{$data->price}}"  placeholder="Food Price" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputImage1">Old Food Image</label>
                        <img height="200" width="200" src="/foodimage/{{$data->image}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputImage1">New Food Image</label>
                        <input type="file"  class="form-control" name="image" required>
                      </div>
                     <div class="form-group">
                        <label for="exampleInputCity1">Change Food Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}" placeholder="Food info" required>
                      </div>
                      <input type="submit" value="Save" class="btn btn-primary mr-2"></input>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
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
  @include("admin.adminscript")
  </body>
</html>