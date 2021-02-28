@extends('backend.layouts.master')
@section('title','Social Media')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Social Media</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Social Media List</li>
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
                                    <h5 class="m-0">Social Media List
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('social.add')}}"><i class="fa fa-plus-circle"></i> Add Social Media</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <table id="users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>icon</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($socialmedias as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->icon}}</td>
                                                <td>{{$row->link}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{route('social.edit',$row->id)}}"><i class="fa fa-edit"></i></a>

                                                    <a id="delete" class="btn btn-danger btn-sm" href="{{route('social.delete',$row->id)}}"><i class="fa fa-trash"></i></a>
                                                   
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
