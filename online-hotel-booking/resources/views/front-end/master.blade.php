<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('/')}}/front-end/images/favicon.png" type="image">
    <title>Royal Hotel</title>
    <link href="{{asset('/')}}/front-end/css/bootstrap.css" rel="stylesheet"/>
    <link href="{{asset('/')}}/front-end/css/jstarbox.css" rel="stylesheet"/>
    <link href="{{asset('/')}}/front-end/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/front-end/css/jquery.datetimepicker.min.css"/>
    <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light" id="navbar_top">
    <div class="container">
        <a href="{{route('/')}}" class="navbar-brand">
            <img src="{{asset('/')}}/front-end/images/Logo.png">
        </a>
        <button type="button" class="navbar-toggler" data-target="#mainMenu" data-toggle="collapse" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav mr-auto">
                <li><a href="{{route('/')}}" class="nav-link">{{"Home"}}</a></li>
                <li><a href="{{route('view-blog')}}" class="nav-link">{{"Blog"}}</a></li>
                <li><a href="" class="nav-link">{{"About Us"}}</a></li>
                <li><a href="" class="nav-link">{{"Contact"}}</a></li>
            </ul>
            <ul class="navbar-nav">
                <li><a href="{{route("sign-up")}}" class="nav-link">{{"SignUp"}}</a></li>
                @if(Session::get('customerId'))
                    <li><a href='#'  class="nav-link" onclick="document.getElementById('customerSignOutForm').submit();">{{"SignOut"}}</a></li>
                    {{Form::open(['route'=>'customer-sign-out','method'=>'post','id'=>'customerSignOutForm'])}}
                    {{Form::close()}}
                @else
                    <li><a href="{{route('sign-in')}}" class="nav-link">{{"SignIn"}}</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>


@yield('content')


<script src="{{asset('/')}}/front-end/js/jquery-3.5.1.js"></script>
<script src="{{asset('/')}}/front-end/js/jquery.datetimepicker.full.min.js"></script>
<script src="{{asset('/')}}/front-end/js/jstarbox.js"></script>
<script src="{{asset('/')}}/front-end/js/popper.min.js"></script>
<script src="{{asset('/')}}/front-end/js/bootstrap.js"></script>


<script>
    $('#from').datetimepicker({
        format:'Y-m-d H:i:s',
        minDate: 0
    });
    $('#to').datetimepicker({
        format:'Y-m-d H:i:s',
        minDate: 0,
    });
    // jQuery('#from, #to').datetimepicker();

    window.onscroll = function() {
        if ($(window).width() > 992) {
            $(window).scroll(function(){
                if ($(this).scrollTop() > 40) {
                    $('#navbar_top').addClass("fixed-top");
                    // add padding top to show content behind navbar
                    $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
                }else{
                    $('#navbar_top').removeClass("fixed-top");
                    // remove padding top from body
                    $('body').css('padding-top', '0');
                }
            });
        }
    };
    $('#star-box').starbox({
        average: 0.60,
        changeable: 'once',
        autoUpdateAverage: true,
        ghosting: true
    });
</script>

</body>
</html>
