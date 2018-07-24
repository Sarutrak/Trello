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
    <div class="col-md-6">
      <div class="card">
        <div class="card-header"><i class="fas fa-address-card" style="margin-right: 10px;"></i>Creating WorkCard......</div>
        	<div class="card-body">
        		<form action="{{ route('card.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
        		  <div class="row">
        		    <p style="margin-left: 15px;">WorkCard Name :</p> &nbsp;<input id="name" type="text" class="form-control{{ $errors->has('job_name') ? ' is-invalid' : '' }}" name="job_name" value="" required autofocus style="width:270px;">
             </div>
             <br>
             <div class="row">
                <p style="margin-left: 48px;">Description :</p> &nbsp;<input id="name" type="text" class="form-control{{ $errors->has('job_des') ? ' is-invalid' : '' }}" name="job_des" value="" required autofocus style="width:270px;">
             </div>
        <!-- Select -->
        <div class="col-8" style="margin-left: 75px;"><br>
           <select class="custom-select col-14" name="job_id" required="required">
            	<option selected="" disabled="" value="">Please Choose User</option>
              @foreach($project as $pj)
                @foreach($user as $us)
                  @if($us->u_id == $pj->id)
                    <option value="{{$us->id}}">{{$us['user_name']}} on project {{$pj['project_name']}}</option>
                  @endif
                @endforeach
              @endforeach
            </select>
        </div>

        <!-- Select color-->
        <div class="col-8" style="margin-left: 75px;"><br>
           <select class="custom-select col-14" name="card_type_id" required="required">
            	<option selected="" disabled="" value="">Please Choose Card-Color</option>
            	<option value="1">Red</option>
				<option value="2">Blue</option>
				<option value="3">Purple</option>
				<option value="4">Grey</option>
				<option value="5">Orange</option>
				<option value="6">Yellow</option>
				<option value="7">Pink</option>
				<option value="8">Green</option>
            </select>
        </div>
        	
 		<br>
        <button class="snip1564" style="float: right;">Submit</button>
    		</form>
         <a href="{{ url()->previous() }}">
            <button class="snip1565" style="float: right;">Back</button>
        </a>
        </div>

@endsection