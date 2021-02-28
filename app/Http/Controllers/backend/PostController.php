<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use Auth;
use Carbon\Carbon;
use App\Model\Post;
use App\Model\Tag;
use App\User;

class PostController extends Controller
{
    public function view(){
        $data = Post::orderBy('id', 'DESC')->where('user_type', 'Admin')->whereIn('status',[1,2])->get();
        return view('backend.post.view-post', compact('data'));
    }
    
    public function add(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.add-post', compact('categories','tags'));
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts,title',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'description' => 'required',
            'tags' => 'required',
            
        ]);
        
        $data = new Post;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->category_id = $request->category;
        $data->user_id = Auth::user()->id;
        $data->user_type = "Admin";
        $data->post_view = 1;
        $data->reading_time = $request->reading_time;
        $data->status = 2;
        $data->published_at = Carbon::now();
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/posts_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        $data->tags()->attach($request->tags);
        
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function edit($id){
        $post = Post::find($id);
        $tags = Tag::all();
        $categories = Category::all();
        return view('backend.post.edit-post', compact('post','categories','tags'));
    }
    
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'title' => 'required|unique:posts,title,'.$id,
            'category' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'description' => 'required',
            'tags' => 'required'
            
        ]);
        $data = Post::find($id);
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->category_id = $request->category;
        $data->reading_time = $request->reading_time;
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/posts_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        
        $data->save();
        $data->tags()->sync($request->tags);
        $notification = array(
            'message' => 'Post updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('posts.view')->with($notification);
        
    }
    
    public function delete($id){

        $data = Post::find($id);
        $data->status=0;
        $data->deleted_by = Auth::user()->id;
        $data->save();
    
        
        $notification = array(
            'message' => 'Post deleted successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
        
    }
    
    
    public function show($id){
        $post = Post::find($id);
        return view('backend.post.show-post', compact('post'));
    }
    
    public function userPost_view(){
        
        $data = Post::orderBy('id', 'DESC')->where('user_type', 'User')->whereIn('status',[1,2])->get();
        return view('backend.post.user-post-view', compact('data'));
    }
    
    public function userPostshow($id){
        $post = Post::find($id);
        return view('backend.post.user-post-show', compact('post'));
    }
    
    public function postApproved($id){
        $post = Post::find($id);
        $post->status = 2;
        $post->save();
        $notification = array(
            'message' => 'Post Approved!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function postRegected($id){
        $post = Post::find($id);
        $post->status = 1;
        $post->save();
         $notification = array(
            'message' => 'Post Regected!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function userPost_delete($id){
        $post = Post::find($id);
        $post->status = 0;
        $post->deleted_by = Auth::user()->id;
        $post->save();
         $notification = array(
            'message' => 'Post deleted!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function requested_post(){
        $data = Post::orderBy('id', 'DESC')->where('user_type', 'User')->where('status',1)->get();
        return view('backend.post.requested-post-view', compact('data'));
    }
    
    public function requ_post_show($id){
        $post = Post::find($id);
        return view('backend.post.requested-post-show', compact('post'));
    }
    
    public function requ_post_delete($id){
        $post = Post::find($id);
        $post->status = 0;
        $post->deleted_by = Auth::user()->id;
        $post->save();
         $notification = array(
            'message' => 'Post deleted!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function deleted_post(){
        $data = Post::orderBy('id', 'DESC')->where('status',0)->get();
        return view('backend.post.deleted-post', compact('data'));
    }
    
    public function deleted_post_show($id){
        $post = Post::find($id);
        return view('backend.post.deleted-post-show', compact('post'));
    }
    
    public function deleted_post_user($id){
        $user = User::find($id);
        return view('backend.post.deleted-post-user',compact('user'));
    }
    
    public function deleted_post_restore($id){
        $restorePost = Post::find($id);
        $restorePost->status = 2;
        $restorePost->save();
        
        $notification = array(
            'message' => 'Successfully post restored!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    
    
}
