<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Pjuser;
use App\Jobs;
use App\Cardtype;
use App\Projects;

class ProjecthomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = pjuser::all();
        $project = Projects::all();
        return view('backend.projecthome',compact('project','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = pjuser::all();
        $job =  Jobs::all();
        $project =  Projects::all();
        return view('backend.createproject',compact('user','job','project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {   
                $project = new Projects();
                $project->fill($request->all());
                $project->save();
                // Session::flash('success', 'Project has been created.');
                sleep(1.5);
                return redirect()->route('projecthome.index');
        }catch(exception $e){
                die($e->message);
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
        $project = Projects::find($id);
        $user = Pjuser::where('u_id', $id)->get();
        $joball = DB::table('job')
                        ->select('job.job_id','job.job_name','job.job_des','cardtype.name as c_name')
                        ->join('cardtype', 'job.card_type_id', '=', 'cardtype.card_type_id')
                        ->get();
        return view('backend.home',compact('project','user','joball'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
        $project = Projects::find($id);
        return view('backend.editproject', compact('project'));
         } catch(\exception $e){
            die($e->getMessage());
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
        $project = Projects::find($id);
        $project->fill($request->all());
        $project -> save();
        sleep(1);
        return redirect()->route('projecthome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $project = Projects::find($request->id);
        if ($project) {
        $delete = $project->delete();
        if ($delete) {
            return response()->json(['status' => true]);
        }
        }
        else{
            return response()->json(['status' => false]);
        }
    }
    
}
