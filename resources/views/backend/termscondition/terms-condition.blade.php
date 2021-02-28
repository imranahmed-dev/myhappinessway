@extends('backend.layouts.master')
@section('title','Terms & Conditions')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">Terms & Conditions</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Terms & Conditions</li>
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
                            <h5 class="m-0">Terms & Conditions
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                        <form action="{{route('terms.update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Contents</label>
                                                        <textarea placeholder="Terms & Conditions" name="terms_conditions" class="form-control textarea">{{$content->terms_conditions}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="Update" class="btn btn-primary">
                                        </form>
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
