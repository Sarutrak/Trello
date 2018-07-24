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
        <div class="card-header"><i class="fas fa-clipboard-check" style="margin-right: 5px;"></i><h7>Done</h7>


        </div>
        <div class="card-body">
            Done page!
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



