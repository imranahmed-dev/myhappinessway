         @extends('backend.layouts.master')
         @section('title','Add New Social Media')
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
                                <li class="breadcrumb-item"><a href="{{route('social.index')}}">Social Media List</a></li>
                                <li class="breadcrumb-item active">Add Social Media</li>
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
                                    <h5 class="m-0">Add Social Media
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('social.index')}}"><i class="fa fa-list"></i> Go back to social Media list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
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

                                         
                                              <form action="{{ url('admin/media/store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                  <div class="row">
                                                     <div class="col-sm-12">
                                                       <div class="form-group">
                                                          <label class="col-sm-12 col-form-label"> Name :  </label>
                                                          <div class="col-sm-12">
                                                              <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Social Media Name" required> 
                                                              <br>
                                                              <div class="text-danger">{{ $errors->first('name') }}</div>
                                                          </div>
                                                        </div>
                                                     </div> 

                                                     <div class="col-sm-12">
                                                       <div class="form-group">
                                                          <label class="col-sm-12 col-form-label"> Icon :  </label>
                                                          <div class="col-sm-12">
                                                              <input type="text" name="icon" value="{{ old('icon') }}" class="form-control" placeholder="Enter social Icon"> 
                                                              <br>
                                                              <div class="text-danger">{{ $errors->first('icon') }}</div>
                                                          </div>
                                                        </div>
                                                     </div>

                                                     <div class="col-sm-12">
                                                       <div class="form-group">
                                                          <label class="col-sm-12 col-form-label"> Link :  </label>
                                                          <div class="col-sm-12">
                                                              <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="Enter social link"> 
                                                              <br>
                                                              <div class="text-danger">{{ $errors->first('link') }}</div>
                                                          </div>
                                                        </div>
                                                     </div>   
                                                                                     
                                                      <div class="col-sm-12">
                                                           <div class="form-group">
                                                             <div class="col-sm-9">
                                                                   <br>
                                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                              </div>
                                                          </div>
                                                    </div>
                                                 </div>

                                                  </form>
                                      </div>



                                        </div>
                                        <div class="col-md-6">
                                              <div class="table-responsive">
                                                  <table class="table table-bordered">
                                                      <tr>
                                                        <th>Serial</th>
                                                        <th>Name</th>
                                                         
                                                        <th>Icon style</th>
                                                     
                                                      </tr>
                                                      <tr>
                                                        <td>01</td>
                                                        <td>Facebook</td>
                                                        <td>fa fa-facebook</td>
                                                     </tr>
                                                     <tr>
                                                        <td>02</td>
                                                        <td>twitter</td>
                                                        <td>fa fa-twitter</td>
                                                     </tr>  
                                                     <tr>
                                                        <td>03</td>
                                                        <td>Linkedin</td>
                                                        <td>fa fa-linkedin</td>
                                                     </tr>  
                                                      <tr>
                                                        <td>04</td>
                                                        <td>Google</td>
                                                        <td>fa fa-google</td>
                                                     </tr> 

                                                     <tr>
                                                        <td>05</td>
                                                        <td>youtube</td>
                                                        <td>fa fa-youtube</td>
                                                     </tr>
                                                     <tr>
                                                        <td>06</td>
                                                        <td>whatsapp</td>
                                                        <td>fa fa-whatsapp</td>
                                                     </tr>
                                                  </table>
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