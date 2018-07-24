<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Pjuser;
use App\Jobs;
use App\Cardtype;
use App\Projects;

class JobController extends Controller
{
    
    public function index()
    {   


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
        return view('backend.jobcreate',compact('user','job','project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            $job = new Jobs;
            $job->job_name = $request->job_name;
            $job->job_des = $request->job_des;
            $job->job_id = $request->job_id;
            $job->card_type_id = $request->card_type_id;
            $job->save();
            Session::flash('success', 'Card has been created.');
        return redirect()->route('projecthome.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        die('edit');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {     
        dd($id);
         $job = Jobs::find($id);
         $job->delete();
         Session::flash('error', 'Card Deleted.');
         return redirect()->route('projecthome.index');
    }
}
