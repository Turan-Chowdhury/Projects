@extends('front-end.master')
@section('content')
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
        }
        .wrapper {
            min-height: 100%;
            background-image: url("{{asset('/')}}/front-end/images/about_banner.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
        }
        .sign{
            margin: auto;
            display: table;
        }
    </style>
    <div class="wrapper">
        <div class="row">
            <div class="col-sm-4 sign p-5" >
                {{ Form::open(['route'=>'customer-sign-up','method'=>'post']) }}
                <div class="form-group row">
                    {{Form::text('first_name','',['class'=>'form-control','placeholder'=>'First Name'])}}
                </div>
                <div class="form-group row">
                    {{Form::text('last_name','',['class'=>'form-control','placeholder'=>'Last Name'])}}
                </div>
                <div class="form-group row">
                    {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email'])}}
                </div>
                <div class="form-group row">
                    {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                </div>
                <div class="form-group row">
                    {{Form::text('phone_number','',['class'=>'form-control','placeholder'=>'Phone Number'])}}
                </div>
                <div class="form-group row">
                    {{Form::textarea('address','',['class'=>'form-control','placeholder'=>'Address','rows'=>'5'])}}
                </div>
                <div class="form-group row">
                    {{Form::submit('Register',['class'=>'btn btn-block btn-success'])}}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
