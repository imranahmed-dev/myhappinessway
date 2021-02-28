<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use Auth;
use Carbon\Carbon;
use App\Model\Post;
use App\Model\Comment;
use App\Model\Tag;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data['adminpost'] = Post::where('user_type','Admin')->count();
        $data['totalpost'] = Post::where('user_type','user')->count();
        $data['pendingpost'] = Post::where('user_type','user')->where('status',1)->count();
        $data['activepost'] = Post::where('user_type','user')->where('status',2)->count();
        $data['totalcomments'] = Comment::count();
        $data['pendingcomments'] = Comment::where('status',1)->count();
        $data['activecomments'] = Comment::where('status',2)->count();
        $data['totalcategory'] = Category::count();
        $data['totaluser'] = User::count();

        return view('backend.layouts.home',$data);
    }
}
