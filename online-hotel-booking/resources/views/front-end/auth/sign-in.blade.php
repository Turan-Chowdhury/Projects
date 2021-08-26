@extends('front-end.master')
@section('content')
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

            margin: auto;
            display: table;
            /*display:block;*/
            /*position:absolute;*/
            /*top: 50%;*/
            /*left: 50%;*/
            /*text-align:center;*/
            /*transform: translate(-50%,-50%);*/
        }
    </style>
<div id="wrapper">
    <div class="row">
        <div class="col-md-4 sign p-5">
            {{Form::open(['route'=>'customer-sign-in','method'=>'post','class'=>'form-horizontal'])}}
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
            <div class="bg-light form-control border border-danger">
                <h4 class=" text-center"><a href="" class="text-danger text-decoration-none"><b>Forget password?</b></a></h4>
            </div>
                <h4 class=" text-center text-danger" id="message">{{Session::get('message')}}</h4>
            <br>
        </div>
    </div>
</div>
@endsection
