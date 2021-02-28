<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;
use App\Model\Comment;
use App\Model\Subscribe;
use App\Model\AuthorInfo;
use App\Model\TermsCondition;
use App\Model\PrivacyPolicy;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::latest()->get();
        return view('backend.contact.contact-view',compact('data'));
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.contact-show',compact('contact'));
    }

    public function comment_index()
    {
        $data = Comment::latest()->get();
        return view('backend.comments.comment-view',compact('data'));
    }
    
    public function subscribe_index()
    {
        $data = Subscribe::latest()->get();
        return view('backend.subscribe.subscribe-view',compact('data'));
    }
    
        public function CommentApproved($id){
        $comment = Comment::find($id);
        $comment->status = 2;
        $comment->save();
        $notification = array(
            'message' => 'Comment Approved!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function CommentRegected($id){
        $comment = Comment::find($id);
        $comment->status = 1;
        $comment->save();
         $notification = array(
            'message' => 'Comment Regected!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function comment_show($id){
        $comment = Comment::find($id);
        return view('backend.comments.comment-show',compact('comment'));
    }

     public function self_author_view(){
         $data['content'] = AuthorInfo::where('id',1)->first();
        return view('backend.self_author.test',$data);

        
    }
    public function self_author_update(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            
        ]);
      $data = AuthorInfo::where('id',1)->first();
      $data->name = $request->name;
      $data->facebook = $request->facebook;
      $data->twitter = $request->twitter;
      $data->instagram = $request->instagram;
      $data->linkedin = $request->linkedin;
      $data->pinterest = $request->pinterest;
      $data->description = $request->description;
      $image = $request->file('image');
      if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/user_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        
        $notification = array(
            'message' => 'Author info updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function terms_condition(){
        $data['content'] = TermsCondition::where('id',1)->first();
        return view('backend.termscondition.terms-condition',$data);
    }
    public function privacy_policy(){
        $data['content'] = PrivacyPolicy::where('id',1)->first();
        return view('backend.privacypolicy.privacy-policy',$data);
    }
    public function terms_condition_update(Request $request){
        $validatedData = $request->validate([
            'terms_conditions' => 'required', 
        ]);
          $data = TermsCondition::where('id',1)->first();
          $data->terms_conditions = $request->terms_conditions;
          $data->save();
        
          $notification = array(
                'message' => 'Terms & Conditions updated successfully!',
                'alert-type' => 'success'
          );
        
        return redirect()->back()->with($notification);
    }
    
    public function privacy_policy_update(Request $request){
        $validatedData = $request->validate([
            'privacy_policies' => 'required', 
        ]);
          $data = PrivacyPolicy::where('id',1)->first();
          $data->privacy_policies = $request->privacy_policies;
          $data->save();
        
          $notification = array(
                'message' => 'Privacy Policy updated successfully!',
                'alert-type' => 'success'
          );
        
        return redirect()->back()->with($notification);
    }

}
