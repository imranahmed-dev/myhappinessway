<!DOCTYPE html>
<html class="no-js" lang="en">
@php
$route = Route::current()->getName();
$url = url()->current();
@endphp

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - {{ $settings->website_name }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/frontend')}}/images/faicon.jpg">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ asset('public/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/frontend')}}/css/widgets.css">
    <link rel="stylesheet" href="{{ asset('public/frontend')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/toastr_js/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

    @yield('meta_tags')
    <style>
        .sticky-bar {
            background-color: #000;
        }

        .sticky-bar ul li a {
            color: white;
        }

        .sticky-bar .menu-item-has-children a {
            color: #000;
        }

        /********************** **************************
                customer dashboard styles
*********************** *************************/
        .customer-dashboard-breadcrumb {
            background: #fcfcfc;
        }

        .customer-dashboard {
            background: #fcfcfc;
            padding-bottom: 100px;
        }

        .dashboard-box {
            color: #fff;
        }

        .cd-customer-name {
            margin-bottom: 20px;
            border-bottom: 1.5px solid #ddd;
        }

        .cd-customer-name h3 {
            font-size: 33px;
        }

        .cd-customer-name span {
            color: gray;
            font-size: 19px;
        }

        .customer-menu-header {
            border-bottom: 3px solid #f1f1f1;
        }

        .customer-menu-header h4 {
            font-size: 18px;
        }

        .customer-dashboard-menu ul {
            margin: 0;
            padding: 0;
            list-style: none;

        }

        .customer-menu-active {
            background: #ddd !important;
            font-weight: 600 !important;
            color: #333 !important;
        }

        .customer-dashboard-menu ul li a {
            text-decoration: none;
            padding: 8px 20px;
            display: block;
            color: #222;
            font-weight: 500;
            transition: .2s;
            border-radius: 2px;
        }

        .customer-dashboard-menu ul li a:hover {
            background: #ddd;
        }

        .customer-dashboard-menu ul li {

            border-bottom: 1px solid #ddd;


        }

        .customer-dashboard-menu ul li:last-child {
            border-bottom: 0;
        }

        .dashbox-txt span {
            font-size: 27px;
            font-weight: 500;
            margin-bottom: 7px;
            display: block;
        }

        .dashbox-txt {
            padding: 10px 15px;
        }

        .dashbox-txt p {
            font-weight: 500;
            margin-bottom: 0;
            font-size: 17px;
        }

        .dashboard-box a {
            color: #fff;
            text-decoration: none;
            text-align: center;
            background: #0000001f;
            padding: 2px;
        }

        .hedding-title h1 {
            margin: 0px;
            padding: 0px 0px 10px 0px;
            font-size: 25px;
        }

        .average-rating {
            float: left;
            text-align: center;
            width: 30%;
        }

        .average-rating h2 {
            margin: 0px;
            font-size: 80px;
        }

        .average-rating p {
            margin: 0px;
            font-size: 20px;
        }

        .fa-star,
        .fa-star-o,
        .fa-star-half-o {
            color: #FDC91B;
            font-size: 25px !important;
        }

        .progress,
        .progress-2,
        .progress-3,
        .progress-4,
        .progress-5 {
            background: #F5F5F5;
            border-radius: 13px;
            height: 18px;
            width: 97%;
            padding: 3px;
            margin: 5px 0px 3px 0px;
        }

        .progress:after,
        .progress-2:after,
        .progress-3:after,
        .progress-4:after,
        .progress-5:after {
            content: '';
            display: block;
            background: #337AB7;
            width: 80%;
            height: 100%;
            border-radius: 9px;
        }

        .progress-2:after {
            width: 60%;
        }

        .progress-3:after {
            width: 40%;
        }

        .progress-4:after {
            width: 20%;
        }

        .progress-5:after {
            width: 10%;
        }

        .loder-ratimg {
            display: inline-block;
            width: 40%;
        }

        .start-part {
            float: right;
            width: 30%;
            text-align: center;
        }

        .start-part span {
            color: #337AB7;
            font-size: 23px;
        }

        .reviews h1 {
            margin: 10px 0px 20px 30px;
        }

        .user-img img {
            height: 80px;
            width: 80px;
            border: 1px solid blue;
            border-radius: 50%;
        }

        .user-img-part {
            width: 30%;
            float: left;
        }

        .user-img {
            width: 48%;
            float: left;
            text-align: center;
        }

        .user-text {
            float: left;
        }

        .user-text h4,
        .user-text p {
            margin: 0px 0px 5px 0px;
        }

        .user-text p {
            font-size: 20px;
            font-weight: bold;
        }

        .user-text h4,
        .user-text span {
            color: #B3B5B4;
        }

        .main {
            margin-left: 10px;
            /* margin-top: 15%; */
        }

        .rating-star {
            direction: rtl;
            font-size: 44px;
            unicode-bidi: bidi-override;
            display: inline-block;
        }

        .rating-star input {
            opacity: 0;
            position: relative;
            left: -22px;
            z-index: 2;
            cursor: pointer;
        }

        .rating-star span.star:before {
            color: #777777;
        }

        .rating-star span.star {
            display: inline-block;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            position: relative;
            z-index: 1;
            margin: 0;
        }

        .rating-star span {
            margin-left: -30px;
        }

        .rating-star span.star:before {
            color: #777777;
            content: "\f006";
        }

        .rating-star input:hover+span.star:before,
        .rating-star input:hover+span.star~span.star:before,
        .rating-star input:checked+span.star:before,
        .rating-star input:checked+span.star~span.star:before {
            color: #ffd100;
            content: "\f005";
        }

        .selected-rating {
            color: #ffd100;
            font-weight: bold;
            font-size: 42px;
        }

    </style>
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--    <div class="preloader text-center">
        <div class="circle"></div>
    </div>-->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->


        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-6">
                        <a href="{{ url('/') }}"><img class="logo" src="{{ asset($settings->website_logo) }}" alt="" width="{{ $settings->logo_width }}"></a>
                    </div>
                    <div class="col-6 text-right header-top-right ">

                        <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>

                        @if(@Auth::user()->usertype == "User")
                        @if(@Auth::user()->id != Null)
                        <ul class="list-inline nav-topbar d-md-inline">
                            <li class="list-inline-item menu-item-has-children"><a href="#">{{Auth::user()->name}}</a>
                                <ul class="sub-menu font-small">
                                    <li class=""> <a href="{{route('dashboard.view')}}"> Dashboard</a> </li>
                                    <li class=""> <a href="{{route('profile.view')}}"></a> </li>
                                    <li class=""> <a href="{{route('write.post')}}"> Write Post</a> </li>
                                    <li class=""> <a href="{{route('post.list')}}"> Post List</a> </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class=""> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        @endif
                        @else
                        <a href="{{ route('signin.view') }}" class="btn btn-radius bg-primary text-white ml-15 font-small box-shadow">Sign In</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li class="@if($route == 'frontend')  current-item @endif"> <a href="{{ url('/') }}">Home</a> </li>
                            <li class="@if($route == 'about')  current-item @endif"> <a href="{{ route('about') }}">About us</a> </li>

                            @foreach($categoriesmenu as $category)
                            <li class="@if($url == route('category',$category->slug) )  current-item @endif"><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach

                            <li><a href="{{ route('all.category') }}">More</a></li>

                        </ul>
                        <!--Mobile menu-->
                        <ul id="mobile-menu" class="d-block d-lg-none text-muted">

                            <li class="menu-item-has-children @if($route == 'frontend')  current-item @endif"> <a href="">Home</a></li>

                            @foreach($categoriesmenu as $category)
                            <li class="menu-item-has-children @if($url == route('category',$category->slug) )  current-item @endif"><a href="{{ route('category',$category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach

                            <li class="menu-item-has-children"><a href="{{ route('all.category') }}">More</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="{{$settings->facebook_link}}"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="{{$settings->twitter_link}}"><i class="elegant-icon social_twitter "></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="{{$settings->instagram_link}}"><i class="elegant-icon social_instagram "></i></a></li>
                    </ul>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="search-text-bg">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search stories, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="elegant-icon icon_search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-muted"> <strong>Suggested keywords:</strong></h5>
                        <ul class="list-inline d-inline-block">
                            @foreach($tags as $tag)
                            <li class="list-inline-item"><a href="{{ $tag->slug }}">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Main content -->

    @yield('content')


    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About Us</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Debitis, facere nihil aliquam. Explicabo officiis recusandae adipisci, mollitia tenetur. Aperiam incidunt repellendus enim eos beatae quibusdam suscipit exercitationem veniam adipisci et.
                            </p>
                            <p><strong class="color-black">Address</strong><br>
                                {!! $settings->address !!}
                            </p>
                            <p>
                                <strong class="color-black">Follow Us</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="{{$settings->facebook_link}}" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="{{$settings->twitter_link}}" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="{{$settings->instagram_link}}"><i class="elegant-icon social_instagram "></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="{{ route('about') }}" class="text-white">About Us</a></li>
                            <li class="cat-item cat-item-5"><a href="{{ route('terms-conditions') }}" class="text-white">Terms and Coditions</a></li>
                            <li class="cat-item cat-item-6"><a href="{{ route('privacy-policy') }}" class="text-white">Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="{{ route('contact') }}" class="text-white">Contact</a></li>
                            <li class="cat-item cat-item-7"><a href="{{ route('signin.view') }}" class="text-white">Sign In</a></li>
                            <li class="cat-item cat-item-7"><a href="{{ route('signup.view') }}" class="text-white">Sign Up</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tags cloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            @foreach($tags as $tag)
                            <a class="tag-cloud-link" href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form method="post" action="{{ route('subscribe.store') }}" class="input-group form-subcriber mt-30 d-flex">
                                @csrf
                                <input type="email" name="email" class="form-control bg-white font-small" placeholder="Enter your email">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required=""> I agree to the <a href="#" target="_blank" class="text-white">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted text-white"> Copyright © 2020 MyHappinessWay. All Rights Reserved</p>
                <p class="float-md-right font-small text-white">
                    Design by <a href="http://www.softech.com.bd" target="_blank" class="text-white">SOFTECH BD</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>


    <!-- Vendor JS-->
    <script src="{{ asset('public/frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.slicknav.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/wow.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.ticker.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.sticky.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/waypoints.min.js"></script>
    <script src="{{ asset('public/frontend')}}/js/vendor/jquery.theia.sticky.js"></script>

    <!-- Summernote -->
    <script src="{{asset('public/backend')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{ asset('public/frontend')}}/js/main.js"></script>

    <script src="{{asset('public/frontend')}}/toastr_js/toastr.min.js"></script>
    <script src="{{asset('public/backend/sweetalert/sweetalert2@9.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous"></script>

    <script>
        $('.datepicker').datepicker();

    </script>
    @yield('customjs')


    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

    </script>

    <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });

    </script>

    <script>
        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });

    </script>



</body>

</html>
