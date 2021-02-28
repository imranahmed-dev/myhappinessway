@extends('frontend.layouts.master')
@section('title',$post->title)
@section('meta_tags')
    @if($post)
        <title>{{$post->title}}</title>
        <meta name='description' itemprop='description' content='{{ $post->title}}' />
        <meta name='keywords' content='{{ $post->title }}' />

        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:description" content="{{strip_tags($post->description)}}" />
        <meta property="og:image" content="{{ asset('public/uploads/news/'.$post->image) }}" />


        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$post->title}}" />
        <meta name="twitter:site" content="The Happiness Way" />
    @endif
@endsection

@section('content')


<main class="bg-grey pb-30">
    <div class="container single-content">
        <div class="entry-header entry-header-style-1 mb-50 pt-50">
            <h1 class="entry-title mb-50 font-weight-900">
                {{ $post->title }}
            </h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="entry-meta align-items-center meta-2 font-small color-muted">
                        <p class="mb-5">
                            <a class="author-avatar" href="{{ route('user.profile',$post->user->id) }}">
                                <img class="img-circle" src="{{ asset($post->user->image) }}" alt="">
                            </a>
                            By <a href="{{ route('user.profile',$post->user->id) }}"><span class="author-name font-weight-bold">{{ $post->user->name }}</span></a>
                        </p>

                        @php
                        $changedateid = Date('d M Y',strtotime($post->created_at));
                        @endphp

                        @if($changedateid == Date('d M Y'))
                        <span class="post-on">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                        @else
                        <span class="post-on">{{ $changedateid }}</span>
                        @endif

                        @if($post->reading_time == "" || $post->reading_time == null)
                        @else
                        <span class="time-reading has-dot">{{ $post->reading_time }} mins read</span>
                        @endif
                        <span class="post-by has-dot">{{ $post->post_view }} views</span>


                    </div>
                </div>

                <div class="col-md-6 text-right d-none d-md-inline">

                    {{-- share button  --}}
                    <div class="pt-0">
                        <div class="addthis_inline_share_toolbox"></div>

                    </div>

                </div>
            </div>
        </div>
        <!--end single header-->
        <figure class="image mb-30 m-auto text-center border-radius-10">
            <img class="border-radius-10" src="{{ asset($post->image) }}" alt="post-title">
        </figure>
        <!--figure-->
        <article class="entry-wraper mb-50">
            <div class="entry-main-content dropcap wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                <p>
                    {!! $post->description !!}
                </p>
            </div>
            <div class="entry-bottom mt-50 mb-30 wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="tags">
                    <span>Tags: </span>

                    @foreach($post->tags as $tagss)

                    <a href="{{route('tag', ['slug' => $tagss->slug])}}">{{$tagss->name}}</a>

                    @endforeach


                </div>
            </div>
            <div class="single-social-share clearfix wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                    <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i> {{ $commentcount }} comments</span>
                    <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: {{floor($ratingavarage)}}/5</span>
                </div>
                <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                    <li class="list-inline-item text-muted"><span>Share this: </span></li>
                    <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                    <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                    <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                </ul>
            </div>
            <!--author box-->
            <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="author-image mb-30">
                    <a href="{{ route('user.profile',$post->user->id) }}"><img src="{{ asset($post->user->image) }}" alt="" class="avatar"></a>
                </div>
                <div class="author-info">
                    <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn">
                                <a href="{{ route('user.profile',$post->user->id) }}" title="Posted by Barbara Cartland" rel="author">{{ $post->user->name }}</a></span></span>
                    </h4>
                    <h5 class="text-muted">About author</h5>
                    <div class="author-description text-muted"> {{ $post->user->aboutu }} </div>
                    <a href="{{ route('user.profile',$post->user->id) }}" class="author-bio-link mb-md-0 mb-3">View all posts ({{ $userpostcount }})</a>
                    <div class="author-social">
                        <ul class="author-social-icons">
                            <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                            <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                            <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                            <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--related posts-->
            <div class="related-posts">
                <div class="post-module-3">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Related posts</h5>
                    </div>
                    <div class="loop-list loop-list-style-1">

                        @foreach($authorrecentpost as $userpost)

                        <article class="hover-up-2 transition-normal wow fadeInUp   animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="row mb-40 list-style-2">
                                <div class="col-md-4">
                                    <div class="post-thumb position-relative border-radius-5">
                                        <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{ asset($userpost->image) }})">
                                            <a class="img-link" href="{{ route('single.post',$userpost->slug) }}"></a>
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
                                            <a href="{{ route('category',$userpost->category->slug) }}"><span class="post-cat text-primary">{{ $userpost->category->name }}</span></a>
                                        </div>
                                        <h5 class="post-title font-weight-900 mb-20">
                                            <a href="{{ route('single.post',$userpost->slug) }}">{{ $userpost->title }}</a>
                                            <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">

                                            @php
                                            $changedateuser = Date('d M Y',strtotime($userpost->created_at));
                                            @endphp

                                            @if($changedateuser == Date('d M Y'))
                                            <span class="post-on">{{ Carbon\Carbon::parse($userpost->created_at)->diffForHumans() }}</span>
                                            @else
                                            <span class="post-on">{{ $changedateuser }}</span>
                                            @endif

                                            @if($userpost->reading_time == "" || $userpost->reading_time == null)
                                            @else
                                            <span class="time-reading has-dot">{{ $userpost->reading_time }} mins read</span>
                                            @endif
                                            <span class="post-by has-dot">{{ $userpost->post_view }} views</span>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        @endforeach




                    </div>
                </div>
            </div>

            <!--Comments-->
            <div class="comments-area">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Rating</h5>
                </div>


                <div class="rating-part">
                    <div class="average-rating">
                        <h2>{{$ratingavarage}}</h2>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <p>Average Rating</p>
                    </div>
                    <div class="loder-ratimg">
                        <div class="progress"></div>
                        <div class="progress-2"></div>
                        <div class="progress-3"></div>
                        <div class="progress-4"></div>
                        <div class="progress-5"></div>
                    </div>
                    <div class="start-part">
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <span>{{$ratingavarage5}}%</span><br>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <span>{{$ratingavarage4}}%</span><br>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <span>{{$ratingavarage3}}%</span><br>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <span>{{$ratingavarage2}}%</span><br>
                        <i aria-hidden="true" class="fa fa-star"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <i aria-hidden="true" class="fa fa-star-o"></i>
                        <span>{{$ratingavarage1}}%</span>
                    </div>
                    <div style="clear: both;"></div>
                </div>









            </div>

            <div class="comments-area">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Comments</h5>
                </div>

                @foreach($comments as $comment)

                <div class="comment-list wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset($comment->user->image) }}" alt="{{ $comment->user->name }}">
                            </div>
                            <div class="desc">
                               <style>
                                   .start-parts .fa{
                                       font-size: 15px !important;
                                   }
                                </style>
                                <p class="comment">
                                    {{ $comment->comments }}
                                </p>
                                
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">

                                        <h5>
                                            <a href="{{ route('user.profile',$comment->user->id) }}">{{ $comment->user->name }}</a>
                                        </h5>
                                        <p class="date"> {{ Date('M d Y H:i A',strtotime($comment->created_at)) }} </p>
                                    </div>

                                </div>
                                <div class="start-parts">
                                  <span><small class="text-muted">Rating : </small></span>
                                   @if($comment->rating == 5)
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    @endif
                                    
                                    @if($comment->rating == 4)
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    @endif
                                    
                                    @if($comment->rating == 3)
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    @endif
                                    
                                    @if($comment->rating == 2)
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    @endif
                                    
                                    @if($comment->rating == 1)
                                    <i aria-hidden="true" class="fa fa-star"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    @endif
                                    
                                    @if($comment->rating == Null)
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    <i aria-hidden="true" class="fa fa-star-o"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @endforeach





            </div>
            <!--comment form-->
            <div class="comment-form wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Leave a Reply</h5>
                </div>
                <form action="{{ route('comment.store') }}" class="form-contact comment_form" id="commentForm" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="row">
                        <div class="col-12">
                            <div class="main">

                                <span class="rating-star">
                                    <input type="radio" name="rating" value="5"><span class="star"></span>
                                    <input type="radio" name="rating" value="4"><span class="star"></span>
                                    <input type="radio" name="rating" value="3"><span class="star"></span>
                                    <input type="radio" name="rating" value="2"><span class="star"></span>
                                    <input type="radio" name="rating" value="1"><span class="star"></span>
                                </span>


                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comments" id="comment" cols="30" rows="9" placeholder="Write Comment">{{ old('comments') }}</textarea>
                            </div>
                        </div>
                        @if(Auth::check())
                        
                            <input class="form-control" name="name" id="name" type="hidden" value="{{ Auth::user()->name }}" placeholder="Name">
                            <input class="form-control" name="email" id="email" type="hidden" value="{{ Auth::user()->email }}" placeholder="Email">
                        @else
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" value="{{ old('email') }}" placeholder="Email">
                            </div>
                        </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn button button-contactForm">Post Comment</button>
                    </div>
                </form>
            </div>
        </article>
    </div>
    <!--container-->
</main>



<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f5cf1b44ba04a55"></script>

@endsection
