@extends('frontend.layouts.master')
@section('title','User Registration')
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
                <div id="regi1" class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1 text-center">
                            <h3 style="font-size:23px;" class="mb-30">Join myhappinessway</h3>
                            <p class="text-muted">Discover and share incredible photos, gain global exposure, and get paid for your work.</p>
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            @csrf

                            <ul class="btn-login list_none text-center mb-15">
                                <li>
                                    <a style="overflow: hidden;" href="{{ url('login/facebook') }}" class="btn btn-facebook col-xs-12"><svg class="float-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24 12.0733C24 5.40541 18.6274 3.46502e-06 12 3.46502e-06C5.37258 3.46502e-06 0 5.40541 0 12.0733C0 18.0995 4.38823 23.0943 10.125 24V15.5633H7.07813V12.0733H10.125V9.41343C10.125 6.38755 11.9165 4.71615 14.6576 4.71615C15.9705 4.71615 17.3438 4.95196 17.3438 4.95196V7.92313H15.8306C14.3399 7.92313 13.875 8.85379 13.875 9.80857V12.0733H17.2031L16.6711 15.5633H13.875V24C19.6118 23.0943 24 18.0995 24 12.0733Z" fill="white"></path>
                                        </svg><span style="display: block; margin-top: 2px;">Log in with Facebook</span></a>
                                </li>

                                <li>
                                    <a style="overflow: hidden; background: transparent; border: 2px solid rgb(215, 216, 219); color: rgb(109, 115, 120);" href="{{ url('login/google') }}" class="btn btn-google col-xs-12"><svg class="float-left" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 12.2724C24 11.4216 23.9216 10.6044 23.7771 9.81836H12.2449V14.46H18.8351C18.6987 15.1942 18.4118 15.8937 17.9917 16.5162C17.5716 17.1386 17.0271 17.6712 16.391 18.0816V21.0936H20.3486C22.6641 19.0032 24 15.9276 24 12.2736V12.2724Z" fill="#4285F4"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 23.9999C15.551 23.9999 18.3233 22.9259 20.3486 21.0923L16.391 18.0815C15.2951 18.8015 13.8931 19.2275 12.2449 19.2275C9.0551 19.2275 6.3551 17.1155 5.39388 14.2799H1.30286V17.3879C2.32164 19.376 3.88454 21.0473 5.81685 22.2149C7.74917 23.3826 9.97477 24.0006 12.2449 23.9999Z" fill="#34A853"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.39388 14.2801C5.14898 13.5601 5.00939 12.7921 5.00939 12.0001C5.00939 11.2081 5.14898 10.4401 5.39388 9.72006V6.61206H1.30286C0.445732 8.28391 -0.000440122 10.1291 3.25781e-07 12.0001C3.25781e-07 13.9369 0.472653 15.7681 1.30286 17.3881L5.39265 14.2801H5.39388Z" fill="#FBBC05"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2449 4.7724C14.0424 4.7724 15.6563 5.3784 16.9261 6.5676L20.438 3.126C18.3171 1.188 15.5449 0 12.2449 0C7.45714 0 3.31837 2.688 1.30286 6.612L5.39265 9.72C6.35755 6.8832 9.05632 4.7724 12.2449 4.7724Z" fill="#EA4335"></path>
                                        </svg><span style="display: block; margin-top: 2px;">Log in with Google</span></a>
                                </li>
                                <li>
                                    <a id="regicontrol" style="overflow: hidden;background-color: rgb(8, 112, 209);" href="javascript:;" class="btn btn-facebook col-xs-12"><svg style="float:left;fill:#fff;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24 2.9C24 2.8 24 2.8 24 2.9C24 2.8 24 2.7 23.9 2.6C23.9 2.5 23.8 2.4 23.8 2.4C23.8 2.4 23.8 2.4 23.7 2.3C23.6 2.3 23.6 2.2 23.5 2.2H23.4C23.4 2 23.3 2 23.2 2H0.8C0.7 2 0.6 2 0.5 2.1H0.4C0.3 2.1 0.3 2.2 0.2 2.2C0.2 2.2 0.2 2.2 0.1 2.3C0.2 2.3 0.1 2.4 0.1 2.5C0 2.6 0 2.7 0 2.8V21.1C0 21.2 0 21.3 0.1 21.4C0.2 21.6 0.3 21.8 0.6 21.9C0.6 22 0.7 22 0.8 22H23.1C23.2 22 23.3 22 23.4 21.9C23.6 21.8 23.8 21.6 23.9 21.4C23.9 21.3 24 21.2 24 21.1V2.9ZM9.8 13.2L11.4 14.9C11.6 15.1 11.8 15.2 12 15.2C12.2 15.2 12.4 15.1 12.6 14.9L14.2 13.2L21.1 20.3H2.9L9.8 13.2ZM1.7 19.1V4.9L8.6 12L1.7 19.1ZM15.4 12L22.3 4.9V19L15.4 12ZM21.1 3.7L13.6 11.4L12 13.1L10.4 11.4L2.9 3.7H21.1Z" fill="#fff"></path>
                                        </svg><span style="display: block; margin-top: 2px;">Continue with email</span></a>
                                </li>


                            </ul>

                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div style="font-size:16px" class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label style="font-size:16px" class="form-check-label" for="exampleCheckbox1"><span>I agree to the <a style="color: rgb(8, 112, 209) !important;" href="{{ route('terms-conditions') }}">Terms of Service</a> and <a style="color: rgb(8, 112, 209) !important;" href="{{ route('privacy-policy') }}">Privacy Policy</a>.</span></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div style="font-size:16px" class="text-muted text-center">Already have an account? <a href="{{ route('signin.view') }}"><span style="color: rgb(8, 112, 209) !important;">Log In</span></a></div>
                    </div>
                </div>

                <div id="regi2" class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1 text-center">
                            <p style="font-size:16px" class="">Sign up with <a style="color: rgb(8, 112, 209) !important;" href="{{ url('login/facebook') }}">Facebook</a> or <a style="color: rgb(8, 112, 209) !important;" href="{{ url('login/google') }}">Google</a></p>
                        </div>
                        <div class="divider-text-center mt-15 mb-15">
                            <span> or</span>
                        </div>

                        <form class="login-form" action="{{route('signup.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="text-muted">Email</label>
                                <input type="text" required="" class="form-control mb-4" name="email" value="{{ old('email') }}" placeholder="Enter your Valid Email address">
                                 <div class="text-danger">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="form-group">
                                <label class="text-muted d-block">Password</label>
                                <input placeholder="(minimum 8 characters)" class="form-control" required="" type="password" name="password">
                                 <div class="text-danger">{{ $errors->first('password') }}</div>
                            </div>
                            <div class="form-group">
                                <button style="background-color: rgb(41, 134, 247);border-color: rgb(8, 112, 209);" type="submit" class="button button-contactForm btn-block">Sign Up</button>
                            </div>
                        </form>

                        <div style="font-size:16px" class="text-muted text-center">Already have an account? <a href="http://localhost/myhappinessway/user/signin" class="google-drive-opener"><span style="color: rgb(8, 112, 209) !important;">Log In</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@section('customjs')
<script>
    $(document).ready(function() {
        $('#regi2').hide();

        $('#regicontrol').on('click', function() {
            $('#regi2').show();
            $('#regi1').hide();
        });


    });

</script>
@endsection
@endsection
