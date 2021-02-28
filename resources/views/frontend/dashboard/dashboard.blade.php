@extends('frontend.dashboard.dashboard-master')
@section('title','User Dashboard')
@section('dashboard')
 
<div class="col-md-9">
    <div class="cd-customer-name">
        <h4 class="text-custom">Welcome Back, {{ $user->name }}</h4>
    </div>
    <div class="customer-dashboard-body">
        <div class="row">
            <div class="col-md-3">
                <div class="card dashboard-box bg-primary mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $totalpost }}</span>
                        <p>All Post</p>
                    </div>
                    <a href="{{ route('post.list') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-success  mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $totalcomment }}</span>
                        <p>All Comments</p>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-info   mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $postview }}</span>
                        <p>All Views</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
@endsection
