@extends('frontend.layouts.master')
@section('title','Dashboard')
@section('content')
@php
$route = Route::current()->getName();
@endphp 
<!--start profile section -->


  <main>
     <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card customer-dashboard-menu mb-3 mb-md-0">
                    <div class="card-header bg-dark text-light customer-menu-header">
                        <h4 class="m-0 text-light">My account</h4>
                    </div>
                    <ul>
                        <li><a class="@if($route == 'dashboard.view') customer-menu-active @endif" href="{{route('dashboard.view')}}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                        <li><a class="@if($route == 'write.post') customer-menu-active @endif" href="{{route('write.post')}}" href="{{route('write.post')}}"><i class=" fa fa-pencil"></i> Write Post</a></li>
                        <li><a class="@if($route == 'post.list') customer-menu-active @endif" href="{{route('post.list')}}" href="{{route('post.list')}}"><i class="fa fa-list"></i> Post List</a></li>
                        <li><a class="@if($route == 'profile.view') customer-menu-active @endif" href="{{route('profile.view')}}" href="{{route('profile.view')}}"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('dashboard')

         </div>
     </main>
</section>
<!--end profile section -->

@endsection
