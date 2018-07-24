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
<div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header"><i class="fab fa-stack-exchange" style="margin-right: 5px;"></i><h7>Backlog</h7>
          <div class="row" style="float: right;">
            <div class="circle1"></div>Project
            <div class="circle2"></div>User
            <div class="circle3"></div>Card
          </div>
        </div>
        <div class="card-body">
          @foreach($project as $pj)
          <div class="container" style="display: inline-block; background-color: #7f8c8d;">
                <h6>Project "{{$pj['project_name']}}" has been created at 
              {{$pj['created_at']}} </h6>
          </div>
          @foreach($user as $us)
            @if($us->u_id == $pj->id)
          <div class="container" style="display: inline-block; background-color: #bdc3c7;">
              <h6>User "{{$us['user_name']}}" has been created at 
              {{$us['created_at']}} on project "{{$pj['project_name']}}" </h6>
          </div>
          @foreach($joball as $job)
            @if($job->job_id == $us->id)
          <div class="container" style="display: inline-block; background-color: #ddd;">
                <h6>{{$job->c_des}} Card Title "{{$job->job_name}}" has been created at 
                {{$job['created_at']}} on user "{{$us['user_name']}}"</h6>
          </div>
            @endif
          @endforeach
            @endif
          @endforeach
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



