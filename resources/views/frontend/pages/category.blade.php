@extends('frontend.layouts.master')
@section('title',$category->name)
@section('content')

<main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center pb-50">
            <div class="container">
                <h2 class="font-weight-900">{{ $category->name }}</h2>
                <div class="breadcrumb">
                    <a href="{{ route('frontend') }}" rel="nofollow">Home</a>
                    <span></span>  {{ $category->name }} 
                </div>
                <hr>
            </div>
        </div>
        <div class="container">
            <!--Loop Masonry-->
         <div class="loop-list loop-list-style-1">
                <div class="grid-sizer"></div>
                <div class="row">
                @foreach($posts as $post)
                <article class="col-md-4 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ asset($post->image) }})">
                                                <a class="img-link" href="{{ route('single.post',['slug' =>$post->slug]) }}"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="{{ route('category',$post->category->slug) }}"><span class="post-cat text-info">{{ $post->category->name }}</span></a>
                                                    
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="{{ route('single.post',['slug' =>$post->slug]) }}">{{ $post->title }}</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">

                                                        @php
                                                            $changedateran = Date('d M Y',strtotime($post->created_at));
                                                        @endphp

                                                        @if($changedateran ==  Date('d M Y'))
                                                        <span class="post-on">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                                        @else
                                                        <span class="post-on">{{ $changedateran }}</span>
                                                        @endif

                                                        @if($post->reading_time == "" || $post->reading_time == null)
                                                        @else
                                                        <span class="time-reading has-dot">{{ $post->reading_time }} mins read</span>
                                                        @endif
                                                        <span class="post-by has-dot">{{ $post->post_view }} views</span>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                @endforeach
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination-area mb-30 wow fadeInUp  animated" style="visibility: visible; animation-name: fadeInUp;">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                {{ $posts->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
