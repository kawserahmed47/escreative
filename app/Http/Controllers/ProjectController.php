<?php

namespace App\Http\Controllers;
use Str;
use Session;
use Illuminate\Http\Request;
use App\Project;
use App\Service;
use App\About;
use App\Gallery;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['projects'] = Project::where('status',1)->get();
        $data['menu']= "Project";
        $data['submenu'] = "View-Project";
        return view('backend.pages.project.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['menu']= "Project";
        $data['submenu'] = "Create-Project";
        return view('backend.pages.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project  = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->project_category = $request->project_category;
        $project->client_feedback = $request->client_feedback;
        $project->client_name = $request->client_name;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->budget = $request->budget;

        $image = $request->file('image');
        if($image){
            $image_name = Str::random(12);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.".".$ext;
            $upload_path='projectImg/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
               $project->image = $image_url;
               $project->save();
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
        $project = Project::find($id);
        if($project){
            $data = array();
            $data['title']="Project";
            $data['menu']= "Project";
            $data['about']= About::first();
            $data['services'] = Service::where('status', 1)->get();
            $data['galleries'] = Gallery::where('status',1)->limit(4)->get();
            $data['project'] = $project;
            return view('frontend.pages.projectDetails', $data);
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
        $data['project'] = Project::find($id);
        $data['menu']= "Project";
        $data['submenu'] = "View-Project";
        if($data['project']){
            return view('backend.pages.project.edit', $data);
        }else{
            return 0;
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
        $project = Project::find($id);
        if($project){
            $project->title = $request->title;
            $project->description = $request->description;
            $project->project_category = $request->project_category;
            $project->client_feedback = $request->client_feedback;
            $project->client_name = $request->client_name;
            $project->start_date = $request->start_date;
            $project->end_date = $request->end_date;
            $project->budget = $request->budget;
    
            $image = $request->file('image');
            if($image){
                unlink($project->image);
                $image_name = Str::random(12);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.".".$ext;
                $upload_path='projectImg/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                   $project->image = $image_url;
                   $project->save();
                   return 1;
                }else{
                    return 0;
                }
            }else{
                $project->save();
                return 1;
            }
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
        $project = Project::find($id);
        if($project){
            unlink($project->image);
            $project->delete();
            Session::flash('success', 'Data Delete Successful!!');
            return redirect()->back();
        }else{
            Session::flash('error', 'Data Delete Failed!!');
            return redirect()->back();
        }
    }
}
