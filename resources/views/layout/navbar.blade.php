<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="#" class="nav-link text-dark">Aplikasi Pencatatan Akta Kelahiran dan Kematian di Kabupaten Garut</a>
         </li>
         
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li>

         <li class="nav-item dropdown">
             <a class="nav-link text-dark" data-toggle="dropdown" href="#">
                 <!-- <span> {{ Auth::user()->name }}</span> -->
                 <i class="far fa-user-circle ml-2"></i>

             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <div class="dropdown-divider"></div>
                 <a href="/profile" class="dropdown-item">
                     <i class="fas fa-user mr-2"></i> Profile
                 </a>
                 <div class="dropdown-divider"></div>

                 <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button type="submit" action="{{ route('logout') }}" class="dropdown-item">
                         <i class="fas fa-sign-out-alt mr-1 "></i> Logout
                     </button>
                 </form>
                 <div class="dropdown-divider"></div>
             </div>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->