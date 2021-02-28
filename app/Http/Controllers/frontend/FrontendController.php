<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Post;
use App\Model\Category;
use App\User;
use App\Model\Comment;
use App\Model\Setting;
use App\Model\Tag;
use App\Model\Gallery;
use App\Model\AuthorInfo;
use Auth;
use DB;
use App\Model\TermsCondition;
use App\Model\PrivacyPolicy;

class FrontendController extends Controller
{
    public function index(){
        //Top post
        $data['sliders'] = Post::with('category','user','tags')->where('status',2)->latest()->limit(2)->get();

        $data['featureposts'] = Post::skip(2)->take(4)->latest()->get();
         
        $data['categories'] = Category::limit(8)->get();

        $data['hottags'] = DB::Table('post_tag')
                                    ->leftjoin('tags','post_tag.tag_id','=','tags.id')
                                    ->groupBy('tag_id')
                                    ->orderByRaw('count(tag_id) DESC')
                                    ->limit(4)
                                    ->get();

        $data['latestposts'] = Post::with('category','user','tags')->paginate(5);

        $data['footcatposts'] = Category::limit(3)->get();


        $data['categoryshow'] = Category::get();

        $data['randomposts'] = Post::inRandomOrder()->limit(6)->get();

        $data['popularposts'] = Post::orderBy('post_view','DESC')->limit(4)->get();

        $data['postcommets'] = Comment::latest()->limit(4)->get();
        
        $data['galleries'] = Gallery::latest()->take(6)->get();
        $data['authorinfo']  = AuthorInfo::where('id',1)->first();




        return view('frontend.pages.home', $data);
    }
    
    public function about(){

        return view('frontend.pages.about');
    }
    
    public function category($slug){
        
        $category = Category::where('slug',$slug)->first();

        if($category){
            $posts = Post::where('category_id',$category->id)->where('status',2)->paginate(12);
             
            return view('frontend.pages.category',compact('category','posts'));
        }else{
            return redirect()->route('frontend');
        }
        
    }
    
    public function tag($slug){

        $tag = Tag::where('slug', $slug)->first();
        if($tag){
            $posts = $tag->posts()->orderBy('created_at', 'desc')->paginate(3);

            return view('frontend.pages.tag', compact(['tag', 'posts']));
        }else {
            return redirect()->route('frontend');
        }
    }
    
    public function contact(){

        return view('frontend.pages.contact');
    }
    
    public function post($slug){

        $data['postincrease'] = Post::where('slug',$slug)->increment('post_view');

        $data['post'] = Post::with('category', 'user')->where('slug', $slug)->where('status',2)->first();
        $data['userpostcount'] = Post::where('user_id',$data['post']->user_id)->count();
        $data['authorrecentpost'] = Post::where('user_id',$data['post']->user_id)->limit(2)->whereNotIn('id',[$data['post']->id])->latest()->get();
        
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        
        $relatedpost = Post::where('category_id',$data['post']->category_id)->where('status',2)->inRandomOrder()->limit(4)->get();
        
        $data['relatedpostFirstPosts1'] = $relatedpost->splice(0,1);
        $data['relatedpostFirstPosts2'] = $relatedpost->splice(0,2);
        $data['relatedpostLastPosts'] = $relatedpost->splice(0);
        
        $data['comments'] = Comment::where('post_id',$data['post']->id)->where('status',2)->get();
        $data['commentcount'] = Comment::where('post_id',$data['post']->id)->where('status',2)->count();

        $ratingperson = Comment::where('status',2)->where('post_id', $data['post']->id )->count();
        $allrating = Comment::where('status',2)->where('post_id', $data['post']->id )->sum('rating');

        if($ratingperson == 0)
        {
            $ratingperson = 1;
        }
        if($allrating ==0)
        {
            $allrating = 5;
        }

        $ratingavaragecal = $allrating / $ratingperson;

        $data['ratingavarage'] = number_format(($ratingavaragecal),1);
        
        
        $rating1 = Comment::where('status',2)->where('post_id',$data['post']->id)->where('rating',1)->count();
        
        $data['ratingavarage1'] = number_format((100 * $rating1) / $allrating);
        
        $rating2 = Comment::where('status',2)->where('post_id',$data['post']->id)->where('rating',2)->count();
        
        $data['ratingavarage2'] = number_format((100 * $rating2) / $allrating);
        
        $rating3 = Comment::where('status',2)->where('post_id',$data['post']->id)->where('rating',3)->count();
        
        $data['ratingavarage3'] = number_format((100 * $rating3) / $allrating);
        
        $rating4 = Comment::where('status',2)->where('post_id',$data['post']->id)->where('rating',4)->count();
        
        $data['ratingavarage4'] = number_format((100 * $rating4) / $allrating);
        
        $rating5 = Comment::where('status',2)->where('post_id',$data['post']->id)->where('rating',5)->count();
        
        $data['ratingavarage5'] = number_format((100 * $rating5) / $allrating);
        
        




        return view('frontend.pages.single',$data);
    }
    
    public function allcategory(){

        $categories = Category::all();
        return view('frontend.pages.allcategory', compact('categories'));
        
    }
    public function login_view(){
        return view('frontend.pages.login');
    }
    public function registration_view(){
        
        return view('frontend.pages.registration');
    }
    
    public function user_profile($id){

        $data['user_info'] = User::where('id',$id)->first();
        $data['posts'] = Post::where('user_id',$id)->where('status',2)->paginate(20);
        return view('frontend.pages.user-profile',$data);
    }

    

    public function termconditions()
    {
        $data['termscondition'] = TermsCondition::where('id',1)->first();
        return view('frontend.pages.termconditions',$data);
    }

    public function privacy()
    {
        $data['privacypolicy'] = PrivacyPolicy::where('id',1)->first();
        return view('frontend.pages.privacy',$data);
    }












    
  }
