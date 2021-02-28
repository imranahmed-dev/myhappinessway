        @extends('backend.layouts.master')
        @section('title','Comment View')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Comments</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Comment list</li>
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
                                    <h5 class="m-0">Comment List
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <table id="users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Post Name</th>
                                                <th>User</th>
                                                <th>Comments</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->post->title}}</td>
                                                <td>{{$row->user->name}}</td>
                                                <td>{{ Str::words($row->comments, 10) }}</td>
                                                <td>
                                                    @if($row->status == 1)
                                                    <a href="{{route('comment.approved', $row->id)}}" id="comment-approve" class="btn btn-danger btn-xs">Pending</a>
                                                    @elseif($row->status == 2)
                                                    <a href="{{route('comment.regected', $row->id)}}" id="comment-regect" class="btn btn-success btn-xs">Aproved</a>
                                                    @endif
                                                </td>
                                                <td width="10%">
                                                    <a class="btn btn-info btn-xs" href="{{route('comment.show',$row->id)}}"><i class="fa fa-eye"> View</i></a>
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
