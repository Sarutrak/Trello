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

<div class="container" style="margin-top: 15px;">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header"><i class="fas fa-clipboard-list" style="margin-right: 5px;"></i><h7>DashBoard <i class="fas fa-angle-double-right" style="margin: 0px 5px;"></i>{{$project['project_name']}}</h7>
            @if($user->isnotEmpty())
                <a href="{{route('card.create')}}"> 
                     <button type="button" class="btn btn-dark" style="float: right; margin-left: 6px;"><i class="fa fa-plus-circle"></i> Create WorkCard</button>
                </a>    
            @else
    
            @endif
        </div>
        <div class="card-body">
         @if($user->isnotEmpty())
            <p align="right">
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
        <div class="col-lg-3">
            <div class="card shadow list-group" style="height: 100%; width: auto; margin-bottom: 30px; border-radius: 20px;" > 
                <div class="card-header blue" style="" >
                    <p align="center">
                        <strong>
                        <form method="POST" action="{{ route('main.destroy', $us->id) }}">
                            {!! method_field('DELETE') !!}
                            @csrf
                            <button type="close" class="btn btn-danger btn-circle" style="float: right; font-size: 13px; "><i class="fa fa-times" style="text-align: center;"></i>
                            </button>
                        </form>
                        <h5><i class="fas fa-user-edit" style="margin-right: 6px;"></i>{{$us['user_name']}}</h5>
                        </strong>
                    </p> 
                    <br>
                 </div>
                 <br>
                 @foreach($joball as $job)
                      @if($job->job_id == $us->id)
                    <!-- Card -->
                    <div class="card text-white  mb-3" style=" margin: 10px; width: 90%; align-self: center; background-color: {{$job->c_name}}; border-radius: 12px; ">

                        <!-- <form method="POST" action="">
                            {!! method_field('DELETE') !!}
                             @csrf
                            <button type="close" class="btn btn-danger btn-circle" style="float: right; font-size: 13px; ">
                                <i class="fa fa-times" style="text-align: center;"></i>
                            </button>
                        </form>
                        <form method="POST" action="">
                        {!! method_field('DELETE') !!}
                         @csrf
                        <button type="close" class="btn btn-success btn-circle" style="float: right; font-size: 13px; ">
                            <i class="fa fa-check" style="text-align: center;"></i>
                        </button>
                        </form> -->

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