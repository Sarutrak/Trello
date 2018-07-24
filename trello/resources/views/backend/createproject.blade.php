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

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header"><i class="fas fa-users" style="margin-right: 5px;"></i>Creating Project......</div>
        	<div class="card-body">
        		<form action="{{ route('projecthome.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
        		  <div class="row">
        		    <p style="margin-left: 15px;">Project Name : &nbsp;&nbsp;</p><input id="name" type="text" class="form-control{{ $errors->has('project_name') ? ' is-invalid' : '' }}" name="project_name" value="" required autofocus style="width:270px;">
             </div>
             
             <br>
            <button class="snip1564" style="float: right;">Submit</button>
        </form>
          <a href="{{ url()->previous() }}">
            <button class="snip1565" style="float: right;">Back</button>
          </a>
        </div>
@endsection
