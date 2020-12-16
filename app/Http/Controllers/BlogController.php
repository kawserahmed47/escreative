<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Session;
use App\News;
use App\About;
use App\Gallery;
use App\Service;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news']= News::where('status',1)->get();
        $data['menu']= "News";
        $data['submenu'] = "View-News";
        return view('backend.pages.news.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu']= "News";
        $data['submenu'] = "Create-News";
        return view('backend.pages.news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->news_category = $request->news_category;
        $news->description = $request->description;
        $image = $request->file('image');

        if($image){
            $image_name = Str::random(12);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='newsImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
               $news->image = $image_url;
               $news->save();
               return 1;
            }else{
                return 0;
            }
        }else{
            $news->save();
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
        $news = News::find($id);
        if($news){
            $data = array();
            $data['title']="News" ;
            $data['menu']= "News";
            $data['about']= About::first();
            $data['services'] = Service::where('status', 1)->get();
            $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
            $data['news'] = $news;
            return view('frontend.pages.newsDetails', $data);
        }
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
        $data['news']  = News::find($id);
        $data['menu']= "News";
        $data['submenu'] = "View-News";
        return view('backend.pages.news.edit', $data);
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
        $news  = News::find($id);
        if($news){
            $news->title = $request->title;
            $news->news_category= $request->news_category;
            $news->description = $request->description;
            $image = $request->file('image');
            if($image){
                unlink($news->image);
                $image_name = Str::random(12);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='serviceImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                   $news->image = $image_url;
                   $news->save();
                   return 1;
                }else{
                    return 0;
                }
            }else{
                $news->save();
                return 1;
            }
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
        $news = News::find($id);
        if($news){
            unlink($news->image);
            $news->delete();
            Session::flash('success', 'Data delete successful');
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
}
