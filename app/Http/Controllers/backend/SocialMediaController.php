<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SocialMedia;
use Session;
use Auth;
use Validator;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['socialmedias'] = SocialMedia::orderBy('id','DESC')->where([['status',1]])->get();
         return view('backend.socialmedia.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.socialmedia.add');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required'       
        ]);

        if ($validator->fails()){
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $socialmedia = New SocialMedia;

            $socialmedia->name = $request->name;
            $socialmedia->icon = $request->icon;
            $socialmedia->link = $request->link;  
            $socialmedia->status =1;
            $socialmedia->is_admin = Auth::user()->id;
            $socialmedia->is_delete = 0;
            $socialmedia->save();

             $notification = array(
            'message' => 'Social Media created successfully!',
            'alert-type' => 'success'
            );
        
        
            return redirect('admin/media')->with($notification);

        } /*validator ending*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia,$id)
    {
          $data['socialmedia'] = SocialMedia::find($id);
          return view('backend.socialmedia.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialMedia,$id)
    {
       $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required'       
        ]);

        if ($validator->fails()){
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $socialmedia = SocialMedia::find($id);
            $socialmedia->name = $request->name;
            $socialmedia->icon = $request->icon;
            $socialmedia->link = $request->link;  
            $socialmedia->status =1;
            $socialmedia->is_admin = Auth::user()->id;
            $socialmedia->is_delete = 0;
            $socialmedia->save();

             $notification = array(
            'message' => 'Social Media update successfully!',
            'alert-type' => 'success'
            );
        
        
            return redirect('admin/media')->with($notification);

        } /*validator ending*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia,$id)
    {
        SocialMedia::find($id)->delete();
        
        $notification = array(
            'message' => 'Social Media deleted successfully!',
            'alert-type' => 'success'
          );
        
        
        return redirect('admin/media')->with($notification);

    }
}
