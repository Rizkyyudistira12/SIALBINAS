@extends('layout.admin')

@section('content')

@section('title','Dashboard')

@if (auth()->user()->role == 'admin')
<div class="col-lg-12">
  <div class="row">
  
    <!-- Earnings (Monthly) Card Example -->
    <div class=" col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Alumni</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ totalAlumni() }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Earnings (Monthly) Card Example -->
    <div class=" col-md-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Alumni Yang Bekerja</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">  {{ totalPekerja() }}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Earnings (Monthly) Card Example -->
    <div class=" col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Alumni Yang Berwirausah
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- Pending Requests Card Example -->
    <div class="col-md-3 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Alumni Yang Kuliah</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>
@endif

@endsection