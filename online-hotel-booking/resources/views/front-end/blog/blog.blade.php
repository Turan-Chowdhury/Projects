@extends('front-end.master')
@section('content')
    <div class="container-fluid bg-light">
        <div class="col-sm-12 ">
            <div class="row pt-lg-5">
                <div class="col-sm-8 offset-1">
                    <div class="card border-secondary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-2">
                                        <h3 class="text-success">Name of Blog</h3>
                                        <h5>editor name</h5>
                                    </div>
                                    <div>
                                        <img src="{{asset('/')}}/front-end/images/blog-2.jpg" height="350px" width="100%">
                                    </div>
                                    <div>
                                        dfdsjfkdsjf
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center ">
                    <div class="card border-secondary">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" height="60%" width="100%">
                                </div>
                                <div class="card-body">
                                    dfdsjfkdsjf
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-8 offset-1 p-lg-4">
                <h3>You Might Also Like</h3>
                <div class="card border-secondary">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" height="60%" width="100%">
                                    </div>
                                    <div class="card-body">
                                        dfdsjfkdsjf
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" height="60%" width="100%">
                                    </div>
                                    <div class="card-body">
                                        dfdsjfkdsjf
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" height="60%" width="100%">
                                    </div>
                                    <div class="card-body">
                                        dfdsjfkdsjf
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
