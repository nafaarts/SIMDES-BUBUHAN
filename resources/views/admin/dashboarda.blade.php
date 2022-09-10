@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <a class="text-decoration-none" href="/dusunkinali">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Dusun Kinali</div></a>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kinali }}</div>                                    
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/dusuntulus">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Dusun Tulus</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tulus }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/dusunikhlas">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Dusun Ikhlas</div></a> 
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ikhlas }}</div>                                    
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="dusunsuangking">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Dusun Suangking</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $suangking }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/masyarakat">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total Masyarakat Desa</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalmasyarakat }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/sudahmenikah">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Sudah Menikah</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sudahmenikah }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/belummenikah">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Belum Menikah</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $belummenikah }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/pekerjaan">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Pelajar</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pekerjaan }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class="text-decoration-none" href="/masyarakat">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Pelajar</div></a>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalmasyarakat }}</div>                                
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection