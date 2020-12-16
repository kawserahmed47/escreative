<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Session;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['faqs'] = Faq::where('status', 1)->get();
        $data['menu']= "Faq";
        $data['submenu'] = "View-Faq";
        return view('backend.pages.faq.view', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu']= "Faq";
        $data['submenu'] = "Create-Faq";
        return view('backend.pages.faq.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
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
        $data['faq'] = Faq::find($id);
        $data['menu']= "Faq";
        $data['submenu'] = "View-Faq";
        return view('backend.pages.faq.edit', $data);
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
        $faq = Faq::find($id);
        if($faq){
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();
            return 1;
        }else{
            return 0;
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
        $faq = Faq::find($id);
        if($faq){
            $faq->delete();
            Session::flash('success', 'Delete Successful');
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
