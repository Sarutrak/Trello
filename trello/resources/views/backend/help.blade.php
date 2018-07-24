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
        <div class="card-header"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><h7>Getting Started</h7>


        </div>
        <div class="card-body">
          <div class="card-body">
          
           <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center;">
            <a data-fancybox="gallery" href="{{ asset('images/help/projecthome_create.jpg') }}"><img src="{{ asset('images/help/projecthome_create.jpg') }}" class="responsive imgsize"></a>
          </div>
            <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กดปุ่มเพิ่ม Create Project <small style="color: white;">ตามภาพ</small> เพื่อเพิ่ม Project
          </div>

           <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center; margin-top: 20px;">
            <a data-fancybox="gallery" href="{{ asset('images/help/gotowork.jpg') }}"><img src="{{ asset('images/help/gotowork.jpg') }}" class="responsive imgsize"></a>
          </div>
            <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กดปุ่มเพิ่ม DashBoard <small style="color: white;">ตามภาพ</small> เพื่อเข้าสู่หน้างานต่อไป <small style="color: #c23616;">ดังรูปด้านล่าง <i class="fas fa-long-arrow-alt-down"></i></small>
          </div>
           
          <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center; margin-top: 20px;">
            <a data-fancybox="gallery" href="{{ asset('images/help/first_create.jpg') }}"><img src="{{ asset('images/help/first_create.jpg') }}" class="responsive imgsize"></a>
          </div>
          <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กดปุ่มรูปเครื่องหมายบวก <small style="color: white;">ตามภาพ</small> เพื่อเพิ่ม User <small style="color: #c23616">*กรณีที่ยังไม่เคยเพิ่ม User</small>
          </div>

          <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center; margin-top: 20px;">
            <a data-fancybox="gallery" href="{{ asset('images/help/create_user.jpg') }}"><img src="{{ asset('images/help/create_user.jpg') }}" class="responsive imgsize"></a>
          </div>
          <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กดปุ่มเพิ่ม User <small style="color: white;">ตามภาพ</small> เพื่อเพิ่ม User 
          </div>

          <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center; margin-top: 20px;">
            <a data-fancybox="gallery" href="{{ asset('images/help/create_card.jpg') }}"><img src="{{ asset('images/help/create_card.jpg') }}" class="responsive imgsize"></a>
          </div>
            <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กดปุ่ม Create WorkCard <small style="color: white;">ตามภาพ</small> เพื่อเพิ่ม Card ให้กับ User 
          </div>

          <div class="container" style="display: inline-block; background-color: #ffffff; text-align: center; margin-top: 20px;">
            <a data-fancybox="gallery" href="{{ asset('images/help/creating_card_fill2.jpg') }}"><img src="{{ asset('images/help/creating_card_fill.jpg') }}" class="responsive imgsize"></a>
          </div>
            <div class="container" style="display: inline-block; margin-top: 12px; background-color: #bdc3c7; text-align: center; ">
            • กรอกข้อมูล Card ให้ครบถ้วน เลือกสี และ User ที่มอบหมาย จากนั้นกด <small style="color: green">Submit</small>
          </div>

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



