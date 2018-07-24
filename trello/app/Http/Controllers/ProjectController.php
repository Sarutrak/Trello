<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Pjuser;
use App\Jobs;
use App\Cardtype;
use App\Projects;


class ProjectController extends Controller
{
    public function index()
    {
    	$user = pjuser::all();
    	$project = Projects::all();
        $joball = DB::table('job')
                        ->select('job.job_id','job.job_name','job.job_des','cardtype.name as c_name')
                        ->join('cardtype', 'job.card_type_id', '=', 'cardtype.card_type_id')
                        ->get();
        return view('backend.projecthome',compact('joball','user','project'));
    }
}
