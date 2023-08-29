@extends('layout.template')
@section('title', 'Dashboard')
@section('subtitle', 'Dashboard')
@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-primary text-uppercase mb-2">
                                User</div>
                            <div class="h5 mb-0 font-weight-bold text-primary"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-success text-uppercase mb-2">
                                Pengajuan Kelahiran</div>
                            <div class="h5 mb-0 font-weight-bold text-success"></div>
                        </div>
                        <div class="col-auto">
                        <i class=" fas fa-solid fa-child fa-3x text-gray-500"></i>
                            <!-- <i class="fas fa-user-graduate  fa-3x text-gray-500"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text font-weight-bold text-info text-uppercase mb-2">Pengajuan Kematian
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection