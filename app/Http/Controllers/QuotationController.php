<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
Use Alert;
use Mail;
use Session;
class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::all();
        return view('backend.pages.message.quotation')->with('quotations', $quotations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['title']="Quotation" ;
        return view('frontend.pages.quotation', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subject = $request->subject;
        $details = $request->message;

        $quotation = new Quotation();
        $quotation->name = $request->name;
        $quotation->email = $request->email;
        $quotation->mobile = $request->mobile;
        $quotation->subject = $request->subject;
        $quotation->message = $request->message;

        if ($request->quotation) {
            $quotation->quotation = $request->quotation;
        }
        if ( $request->visit) {
            $quotation->visit = $request->visit;
        }
        if ($request->diagnosis) {
            $quotation->diagnosis = $request->diagnosis;
        }
        if ($request->consultation) {
            $quotation->consultation = $request->consultation;
        }
        

        $quotation->save();
        if ($quotation) {
            \Mail::to("kawserahmed47@gmail.com")->send(new \App\Mail\EsMail($details, $subject));
            return 1;
        }else{
            return 0;
        }

    }


    public function changeQuotationStatus(Request $request){

        $quotation = Quotation::find($request->id);
        if($quotation){
            $quotation->status = $request->status;
            $quotation->save();
            Session::flash('success', 'Status Changed Successful');
            return redirect()->back();
        }else{
            Session::flash('success', 'Status Failed');
            return redirect()->back();
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
        $quotation = Quotation::find($id);
        if($quotation){
            $quotation->delete();
            Session::flash('success','Successfully Delete');
            return redirect()->back();
        }
    }
}
