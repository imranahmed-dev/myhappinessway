<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Gallery;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gallery::latest()->where('status',2)->get();
        return view('backend.gallery.view-gallery',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.add-gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png',
            
        ]);
        
        $data = new Gallery;
        
        $data->title = $request->title;
        $data->created_by = Auth::user()->id;
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/gallery_images/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        $notification = array(
            'message' => 'Photo added successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        
        
    }


    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('backend.gallery.edit-gallery',compact('data'));
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
        $validatedData = $request->validate([
            'image' => 'mimes:jpeg,jpg,png',
            
        ]);
        
        $data = Gallery::find($id);
        
        $data->title = $request->title;
        $data->updated_by = Auth::user()->id;
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/gallery_images/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        $notification = array(
            'message' => 'Photo updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $data->status = 0;
        $data->deleted_by = Auth::user()->id;
        $data->save();
        $notification = array(
            'message' => 'Photo deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
