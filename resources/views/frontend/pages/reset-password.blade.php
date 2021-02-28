@extends('frontend.layouts.master')
@section('title','Reset password')
@section('content')

<main class="bg-grey pt-80 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-10">
                    <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                        <div class="padding_eight_all bg-white">
                            <div class="heading_s1 text-center">
                                <h3 class="mb-30 font-weight-900">Sign In</h3>
                            </div>
                             <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required="" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn-block">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
