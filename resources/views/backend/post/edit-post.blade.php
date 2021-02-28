        @extends('backend.layouts.master')
        @section('title','Edit Post')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Post</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('posts.view')}}">Post List</a></li>
                                <li class="breadcrumb-item active">Edit Post</li>
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
                                    <h5 class="m-0">Edit Post
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('posts.view')}}"><i class="fa fa-list"></i> Go back to post list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                      
                                        <div class="col-md-12">
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
                                                <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Post Title</label>
                                                    <input class="form-control mb-3" type="text" name="title" placeholder="Enter title" value="{{($post->title)}}">

                                                    <label>Select Category</label>
                                                    <select name="category" class="custom-select mb-3">

                                                        <option selected style="display:none;" value="">Select Category</option>

                                                        @foreach($categories as $category)

                                                        <option value="{{$category->id}}" @if( $post->category_id == $category->id) selected @endif >{{$category->name}}</option>

                                                        @endforeach


                                                    </select>

                                                    <label>Image</label>
                                                    <input id="image" class="form-control mb-3" type="file" name="image">
                                                    <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid" src="{{url($post->image)}}" alt="Image"><br><br>

                                                    <label>Choose Post Tags</label>
                                                    <div class="d-flex flex-wrap">
                                                        @foreach($tags as $tag)
                                                    <div class="form-group mb-3 mr-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}" name="tags[]"
                                                            @foreach($post->tags as $tt)
                                                            @if($tag->id == $tt->id) checked @endif
                                                            @endforeach
                                                            >
                                                            <label for="tag{{$tag->id}}" class="custom-control-label">{{$tag->name}}</label>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    </div>
                                                    <label>Reading Time (minutes)</label>
                                                    <input type="number" name="reading_time" min="0" value="{{$post->reading_time}}" placeholder="Enter minutes" class="form-control mb-3">
                                                    

                                                    <label>Description</label>
                                                    <textarea class="textarea mb-3" placeholder="Enter description" name="description">{{($post->description)}}</textarea>

                                                    <input class="btn btn-primary" type="submit" value="Update">
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
