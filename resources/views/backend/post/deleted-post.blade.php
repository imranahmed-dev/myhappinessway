        @extends('backend.layouts.master')
        @section('title','Deleted Post')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage deleted post</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Post List</li>
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
                                    <h5 class="m-0">Post List
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <table id="users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th>Reading Time</th>
                                                <th>Author</th>
                                                <th>Deleted By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><img width="80" src="{{url($row->image)}}" alt=""></td>
                                                <td>{{$row->title}}</td>
                                                <td>{{$row->category->name}}</td>
                                                <td>
                                                    @foreach($row->tags as $tags)
                                                    <span class="badge badge-primary">{{$tags->name}}</span>
                                                    @endforeach
                                                </td>
                                                <td>{{$row->reading_time}} @if(@$row->reading_time) minute read @endif</td>
                                                <td>@if(@$row->user->name){{$row->user->name}} ({{$row->user->usertype}}) @else <span class="text-danger">Deleted user</span> @endif</td>

                                                @php
                                                $deletedBy = App\User::where("id",$row->deleted_by)->first();
                                                @endphp

                                                <td><a href="{{route('deleted.post.user',$deletedBy->id)}}">{{$deletedBy->name}}</a></td>
                                                <td>

                                                    <a class="btn btn-success btn-sm" href="{{route('deleted.post.show',$row->id)}}"><i class="fa fa-eye"></i></a>


                                                    <a id="restore" class="btn btn-danger btn-sm" href="{{route('deleted.posts.restore',$row->id)}}"><i class="fa fa-trash-restore"></i> Restore</a>

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
