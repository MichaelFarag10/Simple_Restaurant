  <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      <nav class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"" id="sidebar" >
        <div style="width: 17%;" class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">


          <a class="sidebar-brand brand-logo-mini" ><img  src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>

          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">FoodMenu</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewchef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Chefs</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/menuchef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View Chefs</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservetions</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>


          <form class="pl-2" action="{{route('logout')}}" method="post">
            @csrf
            <input type="submit"  class="btn btn-danger" value="Logout" />

          </form>
        </ul>


      </nav>
