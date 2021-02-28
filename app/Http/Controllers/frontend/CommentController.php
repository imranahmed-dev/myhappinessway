<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Comment;
use App\User;
use Validator;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        


         $findusercount = User::where('email',$request->email)->count();

         $finduser = User::where('email',$request->email)->first();
         if(!Auth::check()){
             Auth::login($finduser);
         }
         
         if($findusercount>0)
         {

             $this->validate($request,[
                'post_id' => 'required',
                'rating' => 'required',
                'comments' => 'required'
            ]);
             
             $comment = New Comment();
             $comment->user_id = Auth::user()->id;
             $comment->post_id = $request->post_id;
             $comment->rating = $request->rating;
             $comment->comments = $request->comments;
             $comment->status = 1;
             $comment->save();

            $notification = array(
                'message' => 'Comments created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect()->back()->with($notification);
 
         }
         else{

             $notification = array(
                'message' => 'Please Create an account!',
                'alert-type' => 'error'
            );
            
            return redirect(route('signin.view'))->with($notification);


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
