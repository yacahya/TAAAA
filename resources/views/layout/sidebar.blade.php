<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('AdminLTE3') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pengajuan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
            <div class="image mt-2">
                <img src="{{ asset('AdminLTE3') }}/dist/img/yang.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="d-block text-light"> {{ Auth::user()->name }}</span>
                <span class="badge badge-primary"></i>
                    {{Auth()->user()->desa->nama_desa ??"Desa belum di set"}} ( @include('badges.level',['item'=> Auth()->user()->level ?? 3]) )
                </span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MENU UTAMA</li>

                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if( Auth()->user()->level == 1)
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('') ? '' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                          Master 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                        <li class="nav-item">
                            <a href="{{ url('desa') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Desa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dataform')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jenis Isian Layanan</p>
                            </a>
                        </li>
                       

                    </ul>
                </li>
                @endif
                <li class="nav-item  menu-is-opening menu-open">
                    <a href="/" class="nav-link {{ request()->is('') ? '' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                           Data Pengajuan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach(App\Models\Layanan::all() as $item)
                        <li class="nav-item">
                            <a href="{{ url('pengajuan').'/'.$item->id }}/0" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$item->jenis_layanan}}</p>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-item  menu-is-opening menu-open">
                    <a href="/" class="nav-link {{ request()->is('') ? '' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Riwayat Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach(App\Models\Layanan::all() as $item)
                        <li class="nav-item">
                            <a href="{{ url('riwayat').'/'.$item->id }}/0" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$item->jenis_layanan}}</p>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </li>
                @if( Auth()->user()->level ==  1)
                <li class="nav-item ">
                    <a href="/user" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User Management
                        </p>
                    </a>
                </li>
                @endif
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>