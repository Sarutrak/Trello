<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trello</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="{{ asset('images/icon/logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />


</head>
<body style="background-color: #dcdde1">
    <div id="app" style="font-family : 'Prompt', sans-serif ; ">
        <a href="javascript:" id="top"><i class="fas fa-angle-double-up" style="margin-left: 2.8px;"></i></a>
        <p></p>
        <nav  id="navbar" class="navbar navbar-expand-md navbar-light navbar-laravel row" style="background-color: #95afc0" >
            <div class="container row" >
                @guest
                @else
                <nav role="navigation" id="menuToggle" class="" style="width: 0px;">
                        <input type="checkbox" class="" />
                            <span></span>
                            <span></span>
                            <span></span>
                        <ul id="menu" class="shadow" style="margin-top: 1px;">
                         <!--  <a href="{{ url()->previous() }}"><li><i class="fas fa-columns icontemplate"></i>Dashboard</li></a> -->
                            <a href="{{ route('projecthome.index') }}"><li><i class="fas fa-columns icontemplate"></i>Boards</li></a>
                            <a href="{{ route('backlog.index') }}"><li><i class="fab fa-stack-exchange icontemplate"></i>Backlog</li></a>
                            <a href="{{ route('chart.index') }}"><li><i class="fas fa-chart-line icontemplate"></i>Chart</li></a>
                            <a href="{{ route('done.index') }}"><li><i class="far fa-clock icontemplate"></i>Completed</li></a>
                            <a href="{{ route('notdone.index') }}"><li><i class="fas fa-clock icontemplate"></i>Incompleted</li></a>
                            <a href="{{ route('calendar.index') }}"><li><i class="fas fa-calendar-alt icontemplate"></i>Calendar</li></a>
                            <a href="{{ route('help.index') }}"><li><i class="fas fa-info-circle icontemplate"></i>Getting Started</li></a>
                        </ul>
                </nav>
                @endguest
                <a style="margin-left: 60px; position: absolute;" class="navbar-brand" href="{{ url('/') }}">
                    <strong style="font-size: 22px;">TRELLO</strong> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"> </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12"> </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown u-pro" style="float: right;">
                            <a class="nav-link  waves-effect " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-down"><i class="fas fa-user-tie"></i>&nbsp;{{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user"> 
                                    <div class="dw-user-box">
                                        <div class="u-text" style="margin-left: 30px;">
                                            <li> {{ Auth::user()->name }}</li>
                                            <li>{{ Auth::user()->email }}&nbsp;&nbsp;&nbsp;</li>
                                            <a class="dropdown-item" style="width: 70px;" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                            {{ __('Logout') }}
                                            </a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/fancybox.js') }}" ></script>
    <script src="{{ asset('js/sweetalert.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/uvs8amk.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>


<!--  Scroll to Top  -->
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {    // If page is scrolled more than 50px
        $('#top').fadeIn("fast");       // Fade in the arrow
    } else {
        $('#top').fadeOut("fast");      // Else fade out the arrow
    }
});
$('#top').click(function() {            // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                   // Scroll to top of body
    }, 500);
});
</script>

<!-- nav -->
<script>
    $(document).ready(function() {
 
var navPos, winPos, navHeight;
  
function refreshVar() {
  navPos = $('nav').offset().top;
  navHeight = $('nav').outerHeight(true);
}

refreshVar();
$(window).resize(refreshVar);

  $('<div class="clone-nav"></div>').insertBefore('nav').css('height', navHeight).hide();
  
$(window).scroll(function() {
  winPos = $(window).scrollTop();
  
  if (winPos >= navPos) {
    $('nav').addClass('fixed shadow');  
    $('.clone-nav').show();
  }  
  else {
    $('nav').removeClass('fixed shadow');
    $('.clone-nav').hide();
  }
});

});
</script>

<!-- loader -->
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 400);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<!-- sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function removeZoning(id) {
    console.log(id);
            swal({
                title: "ต้องการลบข้อมูล ?",
                text: "ข้อมูลจะถูกลบออกจากระบบ",
                timer:10000,
                icon: "error",
                buttons: ['ยกเลิก', 'ตกลง'],
                dangerMode: true
            })
            .then((willDelete) => {
                    if (willDelete) {
                        $.post("projecthome/destroy", {
                            id: id,
                            _method: 'DELETE',
                            _token: "{{ csrf_token() }}"
                        }).then(data => {
                            if (data.status) {
                                swal("ลบข้อมูลสำเร็จ !", {
                                    icon: "success",
                                    button: 'ตกลง'
                                });
                            } 
                            else {
                                swal("ไม่สามารถลบข้อมูลได้ !", {
                                    icon: "warning",
                                    button: 'ตกลง'
                                });
                            }
                            setTimeout("document.location.reload(true)",800);
                        

                        })

                    }
                });
        }
</script>

<script>
function removeuser(id) {
    console.log(id);
            swal({
                title: "ต้องการลบข้อมูล ?",
                text: "ข้อมูลจะถูกลบออกจากระบบ",
                timer:10000,
                icon: "error",
                buttons: ['ยกเลิก', 'ตกลง'],
                dangerMode: true
            })
            .then((willDelete) => {
                    if (willDelete) {
                        console.log(id);
                        $.post("main2/destroy2", {
                            id: id,
                            _method: 'DELETE',
                            _token: "{{ csrf_token() }}"
                        }).then(data => {
                            if (data.status) {
                                swal("ลบข้อมูลสำเร็จ !", {
                                    icon: "success",
                                    button: 'ตกลง'
                                });
                            } 
                            else {
                                swal("ไม่สามารถลบข้อมูลได้ !", {
                                    icon: "warning",
                                    button: 'ตกลง'
                                });
                            }
                            setTimeout("document.location.reload(true)",800);
                        

                        })

                    }
                });
        }
</script>

<script>
function conf() {
            swal({
                title: "เรียบร้อยแล้วจ้า !",
                text: "กำลังอัพเดทข้อมูล....",
                icon: "success",
            })
        }
</script>

</body>
</html>


