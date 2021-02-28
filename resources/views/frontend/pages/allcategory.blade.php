@extends('frontend.layouts.master')
@section('title','Category List')
@section('content')

<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center pb-50">
            <div class="container">
                <h3 class="font-weight-900">Category List</h3>
                 
                <hr>
            </div>
        </div>

        <div class="container">
            <!--Loop Masonry-->
         <div class="loop-list loop-list-style-1">
                 
                <div class="row mb-20">
                 @foreach($categories as $category)
                     <article class="col-md-3 mb-40 wow fadeInUp  animated">
                                <div class="post-card-1 border-radius-10 hover-up">
                                    <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ asset($category->image) }})">
                                        <a class="img-link" href="{{ route('category',['slug' =>$category->slug]) }}"></a>
                                     </div>
                                    <div class="post-content">
                                        <div class="d-flex p-20">
                                            <h5 class="post-title font-weight-900">
                                                <a href="{{ route('category',['slug' =>$category->slug]) }}">{{ $category->name }}</a>
                                            </h5>
                                        </div>
                            </div>
                        </div>
                      </article>
                    @endforeach
                </div>
                
            </div>
            
        </div>
    </main>


@endsection
