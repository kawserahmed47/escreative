<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Str;
use Session;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['about']= $ab = About::first();
        $data['menu']= "About";
        $data['submenu'] = "View-About";
        if($ab){
            return view('backend.pages.about.view', $data);
            
        }else{
            return redirect()->route('about.create');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu']= "About";
        $data['submenu'] = "Create-About";
        return view('backend.pages.about.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about  = new About();

        $about->email = $request->email;
        $about->mobile = $request->mobile;
        $about->address = $request->address;

        $about->about = $request->about;
        $about_img = $request->file('about_img');
        if($about_img){
            $image_name = Str::random(12);
            $ext = strtolower($about_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$about_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->about_img = $image_url;
            }
        }

        $logo = $request->file('logo');
        if($logo){
            $image_name = Str::random(12);
            $ext = strtolower($logo->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$logo->move($upload_path,$image_full_name);
            if ($success) {
               $about->logo = $image_url;
            }
        }


        $about->message = $request->message;
        $message_img = $request->file('message_img');
        if($message_img){
            $image_name = Str::random(12);
            $ext = strtolower($message_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$message_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->message_img = $image_url;
            }
        }

        $about->mission = $request->mission;
        $mission_img = $request->file('mission_img');
        if($mission_img){
            $image_name = Str::random(12);
            $ext = strtolower($mission_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$mission_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->mission_img = $image_url;
            }
        }


        $about->vision = $request->vision;
        $vision_img = $request->file('vision_img');
        if($vision_img){
            $image_name = Str::random(12);
            $ext = strtolower($vision_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$vision_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->vision_img = $image_url;
            }
        }


        $about->history = $request->history;
        $history_img = $request->file('history_img');
        if($history_img){
            $image_name = Str::random(12);
            $ext = strtolower($history_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$history_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->history_img = $image_url;
            }
        }


        $about->why_choose = $request->why_choose;
        $why_choose_img = $request->file('why_choose_img');
        if($why_choose_img){
            $image_name = Str::random(12);
            $ext = strtolower($why_choose_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$why_choose_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->why_choose_img = $image_url;
            }
        }


        $about->why_best = $request->why_best;
        $why_best_img = $request->file('why_best_img');
        if($why_best_img){
            $image_name = Str::random(12);
            $ext = strtolower($why_best_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$why_best_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->why_choose_img = $image_url;
            }
        }



        $about->save();
        return 1;   



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
        $data['about'] = About::find($id);
        $data['menu']= "About";
        $data['submenu'] = "View-About";

        return view('backend.pages.about.edit', $data);
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
        $about  = About::find($id);

        $about->email = $request->email;
        $about->mobile = $request->mobile;
        $about->address = $request->address;

        $about->about = $request->about;
        $about_img = $request->file('about_img');
        if($about_img){
            if($about->about_img){
                unlink($about->about_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($about_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$about_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->about_img = $image_url;
            }
        }

        $logo = $request->file('logo');
        if($logo){
            if($about->logo){
                unlink($about->logo);
            }
            $image_name = Str::random(12);
            $ext = strtolower($logo->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$logo->move($upload_path,$image_full_name);
            if ($success) {
               $about->logo = $image_url;
            }
        }


        $about->message = $request->message;
        $message_img = $request->file('message_img');
        if($message_img){
            if($about->message_img){
                unlink($about->message_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($message_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$message_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->message_img = $image_url;
            }
        }

        $about->mission = $request->mission;
        $mission_img = $request->file('mission_img');
        if($mission_img){
            if($about->mission_img){
                unlink($about->mission_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($mission_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$mission_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->mission_img = $image_url;
            }
        }


        $about->vision = $request->vision;
        $vision_img = $request->file('vision_img');
        if($vision_img){
            if($about->vision_img){
                unlink($about->vision_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($vision_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$vision_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->vision_img = $image_url;
            }
        }


        $about->history = $request->history;
        $history_img = $request->file('history_img');
        if($history_img){
            if($about->history_img){
                unlink($about->history_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($history_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$history_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->history_img = $image_url;
            }
        }


        $about->why_choose = $request->why_choose;
        $why_choose_img = $request->file('why_choose_img');
        if($why_choose_img){
            if($about->why_choose_img){
                unlink($about->why_choose_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($why_choose_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$why_choose_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->why_choose_img = $image_url;
            }
        }


        $about->why_best = $request->why_best;
        $why_best_img = $request->file('why_best_img');
        if($why_best_img){
            if($about->why_best_img){
                unlink($about->why_best_img);
            }
            $image_name = Str::random(12);
            $ext = strtolower($why_best_img->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='aboutImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$why_best_img->move($upload_path,$image_full_name);
            if ($success) {
               $about->why_best_img = $image_url;
            }
        }



        $about->save();
        return 1;   


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
