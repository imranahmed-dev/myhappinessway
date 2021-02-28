        @extends('backend.layouts.master')
        @section('title','Gallery')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Gallery management</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Photo list</li>
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
                                    <h5 class="m-0">Photo list
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('gallery.create')}}"><i class="fa fa-plus-circle"></i> Add photo</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <table id="users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->title}}</td>
                                                <td><img width="100" src="{{url($row->image)}}" alt="image"></td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{route('gallery.edit', $row->id )}}"><i class="fa fa-edit"> Edit</i></a>

                                                    <a id="delete" class="btn btn-danger btn-sm" href="{{route('gallery.delete', $row->id ) }}"><i class="fa fa-trash"> Delete</i></a>
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
