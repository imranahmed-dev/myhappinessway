@extends('frontend.layouts.master')
@section('title','About Us')
@section('content')

 <main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center pb-50">
            <div class="container">
                <h3 class="font-weight-800 d-lg-inline ">About Us</h3>
                 
                <hr>
            </div>
        </div>

        <div class="container">
            <!--Loop Masonry-->
         <div class="loop-list loop-list-style-1">
                 
                <div class="row mb-20">
 
                                <div class="col-md-6 order-md-2 ">
                                    <img src="{{asset($settings->about_us_image)}}" alt="Image" class="img-responsive p-40">
                                </div>
                                <div class="col-md-5 mr-auto order-md-1">
                                    <h3 class="post-title mb-20 font-weight-900">Description</h3>
                                    <p class="font-small">{{$settings->about_us_text}}</p>
                                </div>
                            
                    </div>


                   
            </div>
            
        </div>
    </main>

@endsection
