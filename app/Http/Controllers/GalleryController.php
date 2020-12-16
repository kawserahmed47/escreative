<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Str;
use Session;
class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['menu']= "Gallery";
        $data['submenu'] = "View-Gallery";
        $data['galleries'] = Gallery::where('status', 1)->get();
        return view('backend.pages.gallery.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu']= "Gallery";
        $data['submenu'] = "Create-Gallery";
        return view('backend.pages.gallery.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->caption = $request->caption;
        $image = $request->file('image');
        if($image){
            $image_name = Str::random(12);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='galleryImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
               $gallery->image = $image_url;
               $gallery->save();
               return 1;
            }else{
                return 0;
            }
        }else{
            return 0;
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
        $data = array();
        $data['gallery'] = Gallery::find($id);
        $data['menu']= "Gallery";
        $data['submenu'] = "View-Gallery";
        return view('backend.pages.gallery.edit', $data);
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
        $gallery = Gallery::find($id);
        $gallery->caption = $request->caption;
        $image = $request->file('image');
        if($image){
            if($gallery->image){
                unlink($gallery->image);
            }
            $image_name = Str::random(12);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='galleryImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
               $gallery->image = $image_url;
               $gallery->save();
               return 1;
            }else{
                return 0;
            }
        }else{
            $gallery->save();
            return 1;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if($gallery){
            $gallery->delete();
            Session::flash('success', 'Delete Successful!!');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
