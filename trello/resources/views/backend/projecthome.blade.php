@extends('backend.inc.template')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
  <strong>{{ $message }}</strong>
</div>
@endif

<body onload="myFunction()">
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">  
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                            <a class="btn standard-btn" href="{{route('projecthome.create')}}" style="float: right;"><i class="far fa-calendar-plus" style="margin-right: 8px;"></i>CREATE PROJECT</a>
                        </div>
                        <div class="card-body"> 
                            @if($project->isnotEmpty())
                            <div class="row" style="margin: 0 auto;float: none;margin-bottom: 10px;"> 
                                @foreach($project as $pj)
                                <!-- Card -->
                                <div class="card text-white  mb-3 shadow cardproject">
                                    <div class="card-header btnmargin"><i class="fas fa-folder-open" style="margin-right: 5px;"></i>{{$pj->project_name}}
                                        
                                        <button type="close" onclick="removeZoning({{$pj->id}})" class="btn btn-danger btn-circle" style="float: right; font-size: 13px; margin-left: 3px; "><i class="fa fa-times" style="text-align: center;"></i>
                                        </button>
                                        <a href="{{ route('projecthome.edit', $pj->id) }}">
                                            <button type="button" class="btn btn-warning btn-circle" style="float: right; font-size: 13px; "><i class="fa fa-edit" style="text-align: center;"></i>
                                            </button>
                                        </a>
                                        </div> <!-- head -->
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: center; margin-top: 30px;">
                                            <a href="{{route('projecthome.show',$pj['id'])}}"> 
                                                <button type="button" class="button" style="">DashBoard<i class="fas fa-arrow-alt-circle-right" style="margin-left: 5px;"></i></button>
                                            </a>
                                        </p> 
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="container" style="display: inline-block; background-color: #ecf0f1;">
                                • Please Create Some Project 🙁
                            </div>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
        </form>
    </div>
</body>

<div class="btn-chat" id="livechat-compact-container" style="visibility: visible; opacity: 1;">
    <div class="btn-holder">
        <a onclick="parent.LC_API.open_chat_window();return false;" href="mailto:someone@example.com?Subject=Hello, Can you Help me?" class="link">Contact Us <i class="far fa-envelope" style="margin-left: 5px;"></i></a>
    </div>
</div>

@endsection
