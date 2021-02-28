@extends('frontend.layouts.master')
@section('title','Contact')
@section('content')



 <main>
        <!--archive header-->
        <div class="archive-header pt-50 text-center pb-50">
            <div class="container">
                <h3 class="font-weight-800 d-lg-inline ">Contact Us</h3>
                 
                <hr>
            </div>
        </div>

        <div class="container">
            <!--Loop Masonry-->
         <div class="loop-list loop-list-style-1">
              


            <div class="row">
                <div class="col-xs-12 col-md-7 mb-5 ">

                        @if ($errors->any())
                                 <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif

                        <form action="{{route('contact.store')}}" class="bg-white" method="post">

                            @csrf
                            <div class="form-group">
                                <label class="text-black">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter email" required>
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black">Subject</label>
                                    <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." required></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-md-5">

                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">{{$settings->address}}</p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">{{$settings->mobile}}</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">{{$settings->email}}</a></p>

                        </div>

                    </div>
                </div>




                   
            </div>
            
        </div>
    </main>

@endsection
