        @extends('backend.layouts.master')
        @section('title','Comment Show')
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
                                <li class="breadcrumb-item"><a href="{{route('comment.index')}}">Comment List</a></li>
                                <li class="breadcrumb-item active">Show Contact</li>
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
                                    <h5 class="m-0">Show Comment
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('comment.index')}}"><i class="fa fa-list"></i> Go back to comment list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col">
                                           <table class="table table-bordered">
                                               <tr>
                                                   <th>Post Name</th>
                                                   <td>{{$comment->post->title}}</td>
                                               </tr>
                                               <tr>
                                                   <th>User</th>
                                                   <td>{{$comment->user->name}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Comments</th>
                                                   <td>{{$comment->comments}}</td>
                                               </tr>
                                           </table>
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
