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
                <div class="card-header"><i class="fas fa-users" style="margin-right: 10px;"></i>Creating User......</div>
        	       <div class="card-body">
        		      <form action="{{ route('main.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
        		            <div class="row">
                                &nbsp;&nbsp;
                                <svg  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 48" xml:space="preserve" width="20" height="20"><g class="nc-icon-wrapper" fill="#555555"><path data-color="color-2" fill="none" stroke="#555555" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M24,32L24,32 c-4.418,0-8-3.582-8-8v-4c0-4.418,3.582-8,8-8h0c4.418,0,8,3.582,8,8v4C32,28.418,28.418,32,24,32z" stroke-linejoin="miter"></path> <path data-cap="butt" data-color="color-2" fill="none" stroke="#5e5e5e" stroke-width="2" stroke-miterlimit="10" d="M36.205,42.307 C34.004,39.72,30.663,38,27,38h-6c-3.694,0-6.998,1.669-9.199,4.294" stroke-linejoin="miter" stroke-linecap="butt"></path> <circle fill="none" stroke="#5e5e5e" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="24" cy="24" r="22" stroke-linejoin="miter"></circle></g>
                                </svg>
                                <p style="margin-left: 5px;">
                                    User Name : &nbsp;&nbsp;</p><input id="name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="" required autofocus style="width:270px;">
                            </div>
                            <br>
                            <div class="row">
                                <p style="margin-left: 45px;">Project ID : &nbsp;&nbsp;</p><input  id="name" type="text" class="form-control{{ $errors->has('u_id') ? ' is-invalid' : '' }}" name="u_id" value="{{$project->id}}" required autofocus style="width:270px;">
                            </div>
                            <br>
                            <button class="snip1564" style="float: right;">Submit</button>
    		          </form>
                        <a href="{{ url()->previous() }}">
                            <button class="snip1565" style="float: right;">Back</button>
                        </a>
                    </div>
            </div>
        </div>
@endsection
