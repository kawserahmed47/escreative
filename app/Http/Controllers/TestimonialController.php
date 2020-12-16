<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Session;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['testimonials'] = Testimonial::where('status', 1)->get();
        $data['menu'] = "Testimonial";
        $data['submenu'] = "View-Testimonial";
        return view('backend.pages.testimonial.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu'] = "Testimonial";
        $data['submenu'] = "Create-Testimonial";
        return view('backend.pages.testimonial.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->comment = $request->comment;
        $testimonial->save();
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
        $data['testimonial'] = Testimonial::find($id);
        $data['menu'] = "Testimonial";
        $data['submenu'] = "View-Testimonial";
        return view('backend.pages.testimonial.edit', $data);
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
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->comment = $request->comment;
        $testimonial->save();
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
        $testimonial = Testimonial::find($id);
        if($testimonial){
            $testimonial->delete();
            Session::flash('success', "Delete Successful");
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
