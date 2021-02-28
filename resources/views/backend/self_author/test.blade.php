@extends('backend.layouts.master')
@section('title','Author')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Author</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Author</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!--Need Card-->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">Author
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            <div class="card card-body">
                                            <form action="{{route('self.author.update')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                                   <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$content->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Facebook link</label>
                                                            <input type="text" name="facebook" class="form-control" placeholder="Enter link" value="{{$content->facebook}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Twitter link</label>
                                                            <input type="text" name="twitter" class="form-control" placeholder="Enter link" value="{{$content->twitter}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Instatram link</label>
                                                            <input type="text" name="instagram" class="form-control" placeholder="Enter link" value="{{$content->instagram}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Linkedin link</label>
                                                            <input type="text" name="linkedin" class="form-control" placeholder="Enter link" value="{{$content->linkedin}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Pinterest link</label>
                                                            <input type="text" name="pinterest" class="form-control" placeholder="Enter link" value="{{$content->pinterest}}">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Image</label>
                                                        <input type="file" name="image" id="image" class="form-control" id="image">

                                                        <img width="200" class="mt-2" src="{{asset($content->image)}}" alt="image" id="showImage">
                                                        
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                   <div class="form-group">
                                                   <label for="">Description</label>
                                                        <textarea placeholder="Description" name="description" class="form-control">{{$content->description}}</textarea>
                                                   </div>
                                                   </div>
                                                </div>
                                                <input type="submit" value="Update" class="btn btn-primary">
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection