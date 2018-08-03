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
        <div class="card-header"><i class="fas fa-pencil-alt" style="margin-right: 5px;"></i>Editing Project......</div>
        	<div class="card-body">
        		<form action="{{ route('projecthome.update',$project->id) }}" method="POST">
                @csrf
                {{ method_field('PATCH') }}
        		  <div class="row">
        		    <p style="margin-left: 15px;">Project Name : &nbsp;&nbsp;</p><input id="name" type="text" class="form-control{{ $errors->has('project_name') ? ' is-invalid' : '' }}" name="project_name" value="{{$project->project_name}}" required autofocus style="width:270px;">
             </div>
             <br>
            <button onclick="conf()" class="snip1564" style="float: right;">Submit</button>
        </form>
          <a href="{{ url()->previous() }}">
            <button class="snip1565" style="float: right;">Back</button>
          </a>
        </div>
@endsection
