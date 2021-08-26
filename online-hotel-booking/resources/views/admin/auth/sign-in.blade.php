<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('/')}}/front-end/images/favicon.png" type="image">
    <title>Royal Hotel</title>
    <link href="{{asset('/')}}/admin/css/bootstrap.css" rel="stylesheet"/>
    <link href="{{asset('/')}}/admin/css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
        }
        #wrapper {
            min-height: 100%;
            background-image: url("{{asset('/')}}/front-end/images/banner_bg.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
        }
        .sign{

            display:block;
            position:absolute;
            top: 50%;
            left: 50%;
            text-align:center;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div class="row">
        <div class="col-md-4 sign p-5">
            {{Form::open(['class'=>'form-horizontal'])}}
            <div class="form-group" >
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light"><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></span>
                    {{Form::email('email','',['class'=>'form-control','placeholder'=>'Enter Email'])}}
                </div>
                <br>
                <div class="input-group-prepend">
                    <span class="input-group-text bg-light"><i class="fa fa-key fa-lg" aria-hidden="true"></i></span>
                    {{Form::password('password',['class'=>'form-control border-outline-primary','placeholder'=>'Enter Password'])}}
                </div>
                <br>
                {{Form::submit('Sign In',['class'=>'form-control btn btn-block btn-info'])}}
            </div>
            {{Form::close()}}
            <div class="bg-light form-control border-danger">
                <h4 class=" text-center"><a href="{{"register"}}" class="text-success text-decoration-none"><b>Register</b></a>||<a href="" class="text-danger text-decoration-none"><b>Forget password?</b></a></h4>
            </div>
            <br>
        </div>
    </div>
</div>
<script src="{{asset('/')}}/admin/js/bootstrap.js"></script>

</body>
</html>
