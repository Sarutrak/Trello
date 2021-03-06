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
        try {
        $user = pjuser::find($id);
        return view('backend.edituser', compact('project','user'));
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
        $user = pjuser::find($id);
        $user->fill($request->all());
        $user -> save();
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
        
    }

        public function destroyuser(Request $request)
    {
        $user = Pjuser::find($request->id);
        if ($user) {
        $delete = $user->delete();
        if ($delete) {
            return response()->json(['status' => true]);
        }
        }
        else{
            return response()->json(['status' => false]);
        }
    }
}
