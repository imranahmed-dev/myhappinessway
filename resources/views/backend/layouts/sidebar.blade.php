     @php
     $prefix = Request::route()->getPrefix();
     $route = Route::current()->getName();
     $url = url()->current();
     @endphp
     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <!-- Brand Logo -->
         <a href="{{ url('/home') }}" class="brand-link"><i class="nav-icon db-icon fa fa-home ml-2"></i>
             <span style="font-weight:500 !important" class="brand-text font-weight-light">Admin Panel</span>
         </a>


         <!-- Sidebar -->
         <div class="sidebar">
             <!-- Sidebar user panel (optional) -->
             <div class="user-panel py-2">
                 <div style="float: left;">
                     <img style="height:45px;width:45px;border-radius:50%;margin:5px" src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}">
                 </div>
                 <div class="info text-light">
                     <a style="color: #fff; margin-bottom: -5px;" href="{{route('profiles.view')}}" class="d-block">{{(!empty(Auth::user()->name))?(Auth::user()->name):"No name"}}</a>
                     <small>{{ Auth::user()->usertype }}</small>
                 </div>
             </div>

             <!-- Sidebar Menu -->
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item has-treeview menu-open">
                         <a href="{{route('home')}}" class="nav-link {{($route == 'home')?'active':''}}">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>
                     <li class="nav-header">General</li>
                     @if(Auth::user()->usertype == "Admin")
                     <li class="nav-item has-treeview {{($prefix == '/users')?'menu-open':''}}">
                         <a href="#" class="nav-link {{($prefix == '/users')?'active':''}}">
                             <i class="fas fa-users nav-icon"></i>
                             <p>
                                 User management
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{route('users.view')}}" class="nav-link {{($route == 'users.view')?'active':''}}  {{($route == 'users.edit')?'active':''}}  {{($route == 'users.add')?'active':''}}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>View user</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                     @endif
                     <li class="nav-item has-treeview {{($prefix == '/profiles')?'menu-open':''}}">
                         <a href="#" class="nav-link {{($prefix == '/profiles')?'active':''}}">
                             <i class="fas fa-user nav-icon"></i>
                             <p>
                                 Profile management
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{route('profiles.view')}}" class="nav-link {{($route == 'profiles.view')?'active':''}}  {{($route == 'profiles.edit')?'active':''}}  {{($route == 'profiles.add')?'active':''}}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Your Profile</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{route('profiles.edit.password')}}" class="nav-link {{($route == 'profiles.edit.password')?'active':''}}">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Change Password</p>
                                 </a>
                             </li>
                         </ul>
                     </li>

                     <li class="nav-item">
                         <a href="{{route('categories.view')}}" class="nav-link  {{($route == 'categories.view')?'active':''}} {{($route == 'categories.edit')?'active':''}} {{($route == 'categories.add')?'active':''}}">
                             <i class="nav-icon fa fa-tags"></i>
                             <p>Categories</p>
                         </a>
                     </li>

                     <li class="nav-item">
                         <a href="{{route('tags.view')}}" class="nav-link  {{($route == 'tags.view')?'active':''}} {{($route == 'tags.edit')?'active':''}} {{($route == 'tags.add')?'active':''}}">
                             <i class="nav-icon fa fa-tag"></i>
                             <p>Tags</p>
                         </a>
                     </li>

                     <li class="nav-item has-treeview {{($prefix == '/user/posts')?'menu-open':''}} {{($prefix == '/admin/posts')?'menu-open':''}}">
                         <a href="#" class="nav-link {{($prefix == '/user/posts')?'active':''}} {{($prefix == '/admin/posts')?'active':''}}">
                             <i class="fas fa-list nav-icon"></i>
                             <p>
                                 Posts management
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{route('posts.view')}}" class="nav-link ">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Admin Post</p>
                                 </a>
                             </li>

                             <li class="nav-item">
                                 <a href="{{route('user.posts.view')}}" class="nav-link ">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>User Post</p>
                                 </a>
                             </li>
                             @php
                             $requPostCount = App\Model\Post::where('user_type', 'User')->where('status',1)->count();
                             @endphp
                             <li class="nav-item">
                                 <a href="{{route('requ.posts.view')}}" class="nav-link ">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Requested Post @if($requPostCount>0)<span class="badge badge-danger">{{$requPostCount}}</span>@endif</p>
                                 </a>
                             </li>
                             @php
                             $delPostCount = App\Model\Post::where('status',0)->count();
                             @endphp

                             <li class="nav-item">
                                 <a href="{{route('deleted.post.view')}}" class="nav-link ">
                                     <i class="fa fa-trash nav-icon text-danger"></i>
                                     <p>Deleted Post @if($delPostCount>0)<span class="badge badge-danger">{{$delPostCount}}</span>@endif</p>
                                 </a>
                             </li>

                         </ul>
                     </li>
                     <li class="nav-item">
                         <a href="{{route('gallery.view')}}" class="nav-link google-drive-opener {{($route == 'gallery.view')?'active':''}} {{($route == 'gallery.edit')?'active':''}} {{($route == 'gallery.show')?'active':''}} {{($route == 'gallery.create')?'active':''}}">
                             <i class="nav-icon fa fa-file-image"></i>
                             <p>Gallery</p>
                         </a>
                     </li>
                     @php
                     $comments_count = App\Model\Comment::where('status',1)->count();
                     @endphp

                     <li class="nav-item">

                         <a href="{{route('comment.index')}}" class="nav-link  {{($route == 'comment.index')?'active':''}}">
                             <i class="nav-icon fa fa-comments"></i>
                             <p>Comments
                             @if($comments_count>0) 
                             <span class="badge badge-danger">{{$comments_count}}</span>
                             @endif
                             </p>
                         </a>

                     </li>

                     <li class="nav-item">

                         <a href="{{route('subscribe.index')}}" class="nav-link  {{($route == 'subscribe.index')?'active':''}}">
                             <i class="nav-icon fa fa-check"></i>
                             <p>Subscriber</p>
                         </a>

                     </li>
                     <li class="nav-item">

                         <a href="{{route('contact.index')}}" class="nav-link  {{($route == 'contact.index')?'active':''}}">
                             <i class="nav-icon fa fa-address-book"></i>
                             <p>Contact</p>
                         </a>

                     </li>

                     <li class="nav-item">

                         <a href="{{route('self.author.view')}}" class="nav-link  {{($route == 'self.author.view')?'active':''}}">
                             <i class="nav-icon fa fa-user"></i>
                             <p>Author</p>
                         </a>

                     </li>
                     
                     <li class="nav-item">

                         <a href="{{route('terms.view')}}" class="nav-link  {{($route == 'terms.view')?'active':''}}">
                             <i class="nav-icon fa fa-gavel"></i>
                             <p>Terms & Condition</p>
                         </a>

                     </li>
                     
                     <li class="nav-item">

                         <a href="{{route('privacy.view')}}" class="nav-link  {{($route == 'privacy.view')?'active':''}}">
                             <i class="nav-icon fa fa-lock"></i>
                             <p>Privacy Policy</p>
                         </a>

                     </li>

                     <li class="nav-item">

                         <a href="{{route('settings.index')}}" class="nav-link  {{($route == 'settings.index')?'active':''}}">
                             <i class="nav-icon fa fa-cog"></i>
                             <p>Web Settings</p>
                         </a>

                     </li>

                     {{--  <li class="nav-item">

                         <a href="{{route('social.index')}}" class="nav-link  {{($route == 'social.index')?'active':''}}">
                             <i class="nav-icon fa fa-list"></i>
                             <p>Social Media</p>
                         </a>

                     </li> --}}

                 </ul>
             </nav>
             <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
     </aside>
