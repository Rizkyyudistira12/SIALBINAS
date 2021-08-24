@extends('layout.admin')

@section('content')

@section('title','Dashboard')

@if (auth()->user()->role == 'admin')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jumlah Alumni</h4>
          </div>
          <div class="card-body">
            {{ totalAlumni() }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Alumni Yang Bekerja</h4>
          </div>
          <div class="card-body">
            {{ totalPekerja() }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Alumni Yang Berwirausaha</h4>
          </div>
          <div class="card-body">
           0
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-user-graduate"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Alumni Yang Kuliah</h4>
          </div>
          <div class="card-body">
            0
          </div>
        </div>
      </div>
    </div>
</div>
@endif

@endsection