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
  <div class="container" style="margin-top: 15px;">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header"><i class="fas fa-clipboard-list" style="margin-right: 5px;"></i><h7>DashBoard <i class="fas  fa-angle-double-right" style="margin: 0px 5px;"></i>{{$project['project_name']}}</h7>
            @if($user->isnotEmpty())
                <a href="{{route('card.create')}}"> 
                    <button type="button" class="btn btn-dark" style="float: right; margin-left: 6px; border-radius: 14px;"><i class="fa fa-plus-circle"></i> Create WorkCard</button>
                </a>
              @else
    
              @endif
            </div>
            <div class="card-body">
            @if($user->isnotEmpty())
            <p align="right" style="margin-bottom: 5px;">
                <a href="{{route('main.show',$project['id'])}}"> 
                    <button type="button" class="btn btn-outline-dark btn-circle"><i class="fa fa-plus btnaddusersmall"></i><i class="fas fa-user"></i>
                    </button>
                </a>
            </p> 
            @else
            <p align="center">
                <a href="{{route('main.show',$project['id'])}}"> 
                    <button type="button" class="btn btn-outline-dark btn-circle btn-xl"><i class="fa fa-plus " style="font-size:60px"></i>
                    </button>
                </a>
            </p> 
            @endif       
            <div class="row">  <!-- id="sortable" -->
                @foreach($user as $us)
                    <div class="col-lg-3" style="margin-bottom: 20px;">
                        <div class="card shadow list-group" style="width: auto; border-radius: 20px;" > 
                            <div class="card-header blue" style="" >
                                <p align="center">
                                        <button type="close" onclick="removeuser({{$us->id}})" class="btn btn-danger btn-circle" style="float: right; font-size: 13px; margin-left: 2px;"><i class="fa fa-times" style="text-align: center;"></i></button>
                                        <a href="{{route('main.edit', $us->id)}}">
                                            <button type="button" class="btn btn-warning btn-circle" style="float: right; font-size: 13px; "><i class="fa fa-edit" style="text-align: center;"></i></button>
                                        </a>
                                        <h5><i class="fas fa-user-edit" style="margin-right: 6px;"></i>{{$us['user_name']}}</h5>
                                </p> 
                                <br>
                            </div>
                            <br>
                            @foreach($joball as $job)
                            @if($job->job_id == $us->id)
                            <!-- Card -->
                            <div class="card text-white  mb-3" style=" margin: 10px; width: 90%; align-self: center; background-color: {{$job->c_name}}; border-radius: 12px; ">
   <!--                              <button type="close" class="btn btn-dark btn-circle"><i class="fas fa-check" style="text-align: center;"></i>
                                </button> -->
                                <div class="card-header" style="text-align: center;">{{$job->job_name}} </div> <!-- head -->
                                <div class="card-body">
                                    <p class="card-text" style="text-align: center;">{{$job->job_des}}</p> <!-- description -->
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<div class="btn-chat" id="livechat-compact-container" style="visibility: visible; opacity: 1;">
    <div class="btn-holder">
        <a onclick="parent.LC_API.open_chat_window();return false;" href="mailto:someone@example.com?Subject=Hello, Can you Help me?" class="link">Contact Us <i class="far fa-envelope" style="margin-left: 5px;"></i></a>
    </div>
</div>

@endsection









<!-- 
     ________________
    /                \
    | How about moo? |  ^__^
    \________________/  (oo)\_______
                      \ (__)\       )\/\
                            ||----w |
                            ||     ||                           -->