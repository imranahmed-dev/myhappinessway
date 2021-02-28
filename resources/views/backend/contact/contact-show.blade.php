        @extends('backend.layouts.master')
        @section('title','Contact Show')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Contact</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('contact.index')}}">Contact List</a></li>
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
                                    <h5 class="m-0">Show Contact
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('contact.index')}}"><i class="fa fa-list"></i> Go back to contact list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col">
                                           <table class="table table-bordered">
                                               <tr>
                                                   <th>Name</th>
                                                   <td>{{$contact->name}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Email</th>
                                                   <td>{{$contact->email}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Subject</th>
                                                   <td>{{$contact->subject}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Message</th>
                                                   <td>{{$contact->message}}</td>
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
