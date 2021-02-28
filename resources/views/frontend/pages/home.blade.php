@extends('frontend.layouts.master')
@section('title','Home')
@section('content')
 

    
    <main>


        <div class="featured-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h3>{{ $settings->slider_head }}</h3>
                        <p>{{ $settings->slider_about }}</p>
                         
                    </div>
                    <div class="col-lg-6 text-right d-none d-lg-block">
                        <img src="{{ asset($settings->slider_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div>
                        <div class="col-md-8 text-md-right font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                            <ul class="list-inline d-inline-block tags">
                                @foreach($hottags as $hottag)
                                <li class="list-inline-item"><a href="{{ route('tag',$hottag->slug) }}"># {{ $hottag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">

                                @foreach($sliders as $slider)
                                    <div class="position-relative post-thumb">
                                        <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url({{ $slider->image }})">
                                            <a class="img-link" href="{{ route('single.post',['slug' =>$slider->slug]) }}"></a>
                                            <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                            <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                                <div class="entry-meta meta-0 font-small mb-20">

                                                    <a href="{{ $slider->category->slug }}"><span class="post-cat text-info text-uppercase">{{ $slider->category->name }}</span></a>
                                                
                                                </div>
                                                <h3 class="post-title font-weight-900 mb-20">
                                                    <a class="text-white" href="{{ route('single.post',$slider->slug) }}">{{ $slider->title }}</a>
                                                </h3>
                                                <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                                    @php
                                                        $changedate = Date('d M Y',strtotime($slider->created_at));
                                                    @endphp

                                                    @if($changedate ==  Date('d M Y'))
                                                    <span class="post-on">{{ Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}</span>
                                                    @else
                                                    <span class="post-on">{{ $changedate }}</span>
                                                    @endif

                                                    <span class="hit-count has-dot">{{ $slider->post_view }} Views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                               
                            </div>
                        </div>
                    </div>

                    @foreach($featureposts as $featurepost)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ $featurepost->image }})">
                                <a class="img-link" href="{{ route('single.post',['slug' =>$featurepost->slug]) }}"></a>
                                
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="{{ route('category',$featurepost->category->slug) }}"><span class="post-cat text-info">{{ $featurepost->category->name }}</span></a>
                                
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="{{ route('single.post',['slug' =>$featurepost->slug]) }}">{{ $featurepost->title }}</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">

                                        @php
                                            $changedateid = Date('d M Y',strtotime($featurepost->created_at));
                                        @endphp

                                        @if($changedateid ==  Date('d M Y'))
                                        <span class="post-on">{{ Carbon\Carbon::parse($featurepost->created_at)->diffForHumans() }}</span>
                                        @else
                                        <span class="post-on">{{ $changedateid }}</span>
                                        @endif

                                        @if($featurepost->reading_time == "" || $featurepost->reading_time == null)
                                        @else
                                        <span class="time-reading has-dot">{{ $featurepost->reading_time }} mins read</span>
                                        @endif
                                        <span class="post-by has-dot">{{ $featurepost->post_view }} views</span>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    @endforeach



                  
                </div>
            </div>

{{--             category here --}}
            <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Categories</h5>
                </div>
                 
                 
                    <div class="row mb-20">
                     @foreach($categoryshow as $category)
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
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">Others Post</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">


                                @foreach($randomposts as $randompost)
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{ asset($randompost->image) }})">
                                                <a class="img-link" href="{{ route('single.post',['slug' =>$randompost->slug]) }}"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="{{ route('category',$randompost->category->slug) }}"><span class="post-cat text-info">{{ $randompost->category->name }}</span></a>
                                                    
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="{{ route('single.post',['slug' =>$randompost->slug]) }}">{{ $randompost->title }}</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">

                                                        @php
                                                            $changedateran = Date('d M Y',strtotime($randompost->created_at));
                                                        @endphp

                                                        @if($changedateran ==  Date('d M Y'))
                                                        <span class="post-on">{{ Carbon\Carbon::parse($randompost->created_at)->diffForHumans() }}</span>
                                                        @else
                                                        <span class="post-on">{{ $changedateran }}</span>
                                                        @endif

                                                        @if($randompost->reading_time == "" || $randompost->reading_time == null)
                                                        @else
                                                        <span class="time-reading has-dot">{{ $randompost->reading_time }} mins read</span>
                                                        @endif
                                                        <span class="post-by has-dot">{{ $randompost->post_view }} views</span>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach

 



                                </div>
                            </div>
                        </div>
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                               
                                @foreach($latestposts as $latestpost)
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ $latestpost->image }})">
                                                    <a class="img-link" href="{{ route('single.post',['slug' =>$latestpost->slug]) }}"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="{{ route('category',$latestpost->category->slug) }}"><span class="post-cat text-primary">{{ $latestpost->category->name }}</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="{{ route('single.post',$latestpost->slug) }}">{{ $latestpost->title }}</a>
                                                    
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">


                                                    @php
                                                        $changedatela = Date('d M Y',strtotime($slider->created_at));
                                                    @endphp

                                                    @if($changedatela ==  Date('d M Y'))
                                                    <span class="post-on">{{ Carbon\Carbon::parse($latestpost->created_at)->diffForHumans() }}</span>
                                                    @else
                                                    <span class="post-on">{{ $changedatela }}</span>
                                                    @endif

                                                    @if($latestpost->reading_time == "" || $latestpost->reading_time == null)
                                                    @else
                                                    <span class="time-reading has-dot">{{ $latestpost->reading_time }} mins read</span>
                                                    @endif
                                                    <span class="post-by has-dot">{{ $latestpost->post_view }} views</span>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach

                               


                            </div>
                        </div>
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                 {{ $latestposts->links() }}
                             </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="@if(@$authorinfo->image) {{asset($authorinfo->image)}} @else http://via.placeholder.com/300x300 @endif" alt="">
                                <h5 class="mb-20">Hello, I'm {{$authorinfo->name}}</h5>
                                <p class="font-medium text-muted">{{$authorinfo->description}}</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="{{$authorinfo->facebook}}" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>

                                    <li class="list-inline-item"><a class="tw" href="{{$authorinfo->twitter}}" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>

                                    <li class="list-inline-item"><a class="pt" href="{{$authorinfo->pinterest}}" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Most popular</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">


                                        @foreach($popularposts as $popularpost)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="{{ route('single.post',['slug' =>$popularpost->slug]) }}">{{ $popularpost->title }}</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">


                                                     @php
                                                        $changedatepop = Date('d M Y',strtotime($popularpost->created_at));
                                                    @endphp

                                                    @if($changedatepop ==  Date('d M Y'))
                                                    <span class="post-on">{{ Carbon\Carbon::parse($popularpost->created_at)->diffForHumans() }}</span>
                                                    @else
                                                    <span class="post-on">{{ $changedatepop }}</span>
                                                    @endif

                                                    <span class="post-by has-dot">{{ $popularpost->post_view }} views</span>



                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{ route('single.post',['slug' =>$popularpost->slug]) }}">
                                                        <img src="{{ asset($popularpost->image) }}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Last comments</h5>
                                </div>
                                <div class="post-block-list post-module-2">
                                    <ul class="list-post">


                                        @foreach($postcommets as $comment)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset($comment->user->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="{{ url('user/profile',$comment->user->id) }}"><strong>{{ $comment->user->name }}</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">{{ Date('D m Y',strtotime($comment->created_at)) }}</span>
                                                    </p>
                                                    <p class="text-muted font-small">{{ $comment->comments }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach


                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Gallery</h5>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed gallery">
                                       @foreach($galleries as $gallery)
                                        <li>
                                            <a href="{{$gallery->image}}"><img class="border-radius-5" src="{{$gallery->image}}" alt=""></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->
    <!--site-bottom-->
    <div class="site-bottom pt-50 pb-50">
        <div class="container">
            <div class="row">

            @foreach($footcatposts as $footpost)
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp animated">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">{{ $footpost->name }}</h5>
                        </div>
                        <div class="post-block-list post-module-1">
                            <ul class="list-post">

                            @php
                                $catposts = App\Model\Post::where('category_id',$footpost->id)->limit(5)->get(); 

                            @endphp

                            @foreach($catposts as $catpost) 
                                <li class="mb-30">
                                    <div class="d-flex hover-up-2 transition-normal">
                                        <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                            <a class="color-white" href="{{ route('single.post',['slug' =>$catpost->slug]) }}">
                                                <img src="{{ asset($catpost->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="{{ route('single.post',['slug' =>$catpost->slug]) }}"> {{ $catpost->title }}</a></h6>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">

                                                    @php
                                                        $changedatcat = Date('d M Y',strtotime($catpost->created_at));
                                                    @endphp

                                                    @if($changedatcat ==  Date('d M Y'))
                                                    <span class="post-on">{{ Carbon\Carbon::parse($catpost->created_at)->diffForHumans() }}</span>
                                                    @else
                                                    <span class="post-on">{{ $changedatcat }}</span>
                                                    @endif

                                                    @if($catpost->reading_time == "" || $catpost->reading_time == null)
                                                    @else
                                                    <span class="time-reading has-dot">{{ $catpost->reading_time }} mins read</span>
                                                    @endif
                                                    <span class="post-by has-dot">{{ $catpost->post_view }} views</span>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                             


                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
            
        </div>
        <!--container-->
    </div>
    <!--end site-bottom-->








@endsection
