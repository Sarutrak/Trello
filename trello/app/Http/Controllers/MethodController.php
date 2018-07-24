<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Pjuser;
use App\Jobs;
use App\Cardtype;
use App\Projects;


class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // $user = pjuser::all();
        // $job =  Jobs::all();
        // $project = Projects::all();
        // return view('backend.usercreate',compact('user','job','project'));
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
                $user = new pjuser();
                $user->fill($request->all());
                $user->u_id=$request->u_id;
                $user->save();
                Session::flash('success', 'User has been created.');
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
        $user = pjuser::all();
        $job =  Jobs::all();
        $project = Projects::find($id);
        return view('backend.usercreate',compact('user','job','project'));
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
         $user = pjuser::find($id);
         $user->delete();
         Session::flash('error', 'User Deleted.');
         return redirect()->route('projecthome.index');
    }
}
