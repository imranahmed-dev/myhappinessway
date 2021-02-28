        @extends('backend.layouts.master')
        @section('title','Deleted User post')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!--Need Card-->
                    <div class="row">
                        <section class="col-md-8 offset-md-2">
                            <div class="card card-primary card-outline mt-4">
                                <div class="card-header">
                                    <h4>Post Deleted User Profile</h4>
                                </div>
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-img img-fluid img-circle" src="{{(!empty($user->image))?url($user->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{$user->name}}</h3>

                                    <p class="text-muted text-center">{{$user->usertype}}</p>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{$user->phone}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{$user->address}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
