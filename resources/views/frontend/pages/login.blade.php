@extends('frontend.layouts.master')
@section('title','User Sign In')
@section('content')

<style>
    .list_none li {
        display: block;
        margin-bottom: 15px;
        border-radius: 30px;
    }

    .list_none li a {
        border-radius: 30px;
        padding: 12px 25px;
    }

    .login-form input {
        border-radius: 5px;
    }

</style>

<main class="bg-grey pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-md-10">
                <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1 text-center">
                            <h3 class="mb-30 " style="font-size:22px">Log in to myhappinessway</h3>
                        </div>
                        <form class="login-form" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="text-muted">Email or Username*</label>
                                <input type="text" required="" class="form-control mb-4" name="email" value="{{ old('email') }}" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="text-muted d-block">Password* <a style="color: rgb(8, 112, 209) !important;" class="float-right" href="{{ route('password.request') }}">Forgot password?</a></label>
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button style="background-color: rgb(41, 134, 247);border-color: rgb(8, 112, 209);" type="submit" class="button button-contactForm btn-block">Log in</button>
                            </div>
                        </form>
                        <div class="divider-text-center mt-15 mb-15">
                            <span> or</span>
                        </div>
                        <ul class="btn-login list_none text-center mb-15">
                            <li><a style="overflow: hidden;" href="{{ url('login/facebook') }}" class="btn btn-facebook col-xs-12"><svg class="float-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 12.0733C24 5.40541 18.6274 3.46502e-06 12 3.46502e-06C5.37258 3.46502e-06 0 5.40541 0 12.0733C0 18.0995 4.38823 23.0943 10.125 24V15.5633H7.07813V12.0733H10.125V9.41343C10.125 6.38755 11.9165 4.71615 14.6576 4.71615C15.9705 4.71615 17.3438 4.95196 17.3438 4.95196V7.92313H15.8306C14.3399 7.92313 13.875 8.85379 13.875 9.80857V12.0733H17.2031L16.6711 15.5633H13.875V24C19.6118 23.0943 24 18.0995 24 12.0733Z" fill="white"></path>
                                    </svg><span style="    display: block; margin-top: 2px;">Log in with Facebook</span></a></li>
                            <li><a style="overflow: hidden; background: transparent; border: 2px solid rgb(215, 216, 219); color: rgb(109, 115, 120);" href="{{ url('login/google') }}" class="btn btn-google col-xs-12"><svg class="float-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12.2724C24 11.4216 23.9216 10.6044 23.7771 9.81836H12.2449V14.46H18.8351C18.6987 15.1942 18.4118 15.8937 17.9917 16.5162C17.5716 17.1386 17.0271 17.6712 16.391 18.0816V21.0936H20.3486C22.6641 19.0032 24 15.9276 24 12.2736V12.2724Z" fill="#4285F4"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 23.9999C15.551 23.9999 18.3233 22.9259 20.3486 21.0923L16.391 18.0815C15.2951 18.8015 13.8931 19.2275 12.2449 19.2275C9.0551 19.2275 6.3551 17.1155 5.39388 14.2799H1.30286V17.3879C2.32164 19.376 3.88454 21.0473 5.81685 22.2149C7.74917 23.3826 9.97477 24.0006 12.2449 23.9999Z" fill="#34A853"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.39388 14.2801C5.14898 13.5601 5.00939 12.7921 5.00939 12.0001C5.00939 11.2081 5.14898 10.4401 5.39388 9.72006V6.61206H1.30286C0.445732 8.28391 -0.000440122 10.1291 3.25781e-07 12.0001C3.25781e-07 13.9369 0.472653 15.7681 1.30286 17.3881L5.39265 14.2801H5.39388Z" fill="#FBBC05"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 4.7724C14.0424 4.7724 15.6563 5.3784 16.9261 6.5676L20.438 3.126C18.3171 1.188 15.5449 0 12.2449 0C7.45714 0 3.31837 2.688 1.30286 6.612L5.39265 9.72C6.35755 6.8832 9.05632 4.7724 12.2449 4.7724Z" fill="#EA4335"></path>
                                    </svg><span style="    display: block; margin-top: 2px;">Log in with Google</span></a></li>


                        </ul>
                        <div style="font-size:16px" class="text-muted text-center">Don't Have an Account? <a style="color: rgb(8, 112, 209) !important;" href="{{ route('signup.view') }}">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
