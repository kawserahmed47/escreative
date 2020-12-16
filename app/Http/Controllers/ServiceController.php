<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use Session;
use App\Service;
use App\About;
use App\Gallery;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = array();
        $data['sliders']= "";
        $data['services'] = Service::where('status',1)->get();
        $data['menu']= "Service";
        $data['submenu'] = "View-Service";
        return view('backend.pages.service.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu']= "Service";
        $data['submenu'] = "Create-Service";
        return view('backend.pages.service.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $image = $request->file('image');

        if($image){
            $image_name = Str::random(12);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='serviceImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
               $service->image = $image_url;
               $service->save();
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
        $service = Service::find($id);
        if($service){
            $data = array();
            $data['title']="Services" ;
            $data['menu']= "Service";
            $data['about']= About::first();
            $data['services'] = Service::where('status', 1)->get();
            $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
            $data['service'] = $service;
            return view('frontend.pages.serviceDetails', $data);
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
        $data= array();
        $data['menu'] = "Service";
        $data['submenu'] = "View-Service";
        $data['service'] = Service::find($id);
        if($data['service']){
            return view('backend.pages.service.edit', $data);
        }
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
        $service = Service::find($id);
        if($service){
            $service->title = $request->title;
            $service->description = $request->description;
            $image = $request->file('image');
    
            if($image){
                unlink($service->image);
                $image_name = Str::random(12);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='serviceImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                   $service->image = $image_url;
                   $service->save();
                   return 1;
                }else{
                    return 0;
                }
            }else{
                $service->save();
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
        $service = Service::find($id);
        if($service){
            unlink($service->image);
            $service->delete();
            Session::flash('success', 'Data Deleted Successful');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
       
    }
}
