@extends('front-end.master')
@section('content')
<style>
    #tarns-div {
        margin: 30px;
        background-color: black;
        border: 5px solid gold;
        opacity: 0.7;
    }
</style>
    <div class="carousel slide" id="mainSlider" data-ride="carousel" data-interval="5000" >
        <ol class="carousel-indicators">
            <li  data-target="#mainSlider" data-slide-to="0" class="active" ></li>
            <li  data-target="#mainSlider" data-slide-to="1"></li>
            <li  data-target="#mainSlider" data-slide-to="2"></li>
            <li  data-target="#mainSlider" data-slide-to="3"></li>
            <li  data-target="#mainSlider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}/front-end/images/royal/1.jpg" height="400px"  class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700  each.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/2.jpg" height="400px" class="w-100">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700  each.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/3.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700  each.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/a1.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700  each.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}/front-end/images/royal/about.jpg"  height="400px" class="w-100 ">
                <div class="carousel-caption text-center">
                    <h5>Away from monotonous life</h5>
                    <h1 class="text-warning"><b>Relax Your Mind</b></h1>
                    <h5>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as TK.1700 each.</h5>
                </div>
            </div>
        </div>
        <a href="#mainSlider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mainSlider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    @include('front-end.includes.search-box')

    <hr class="bg-warning">
    <section style="margin-bottom: 50px;margin-top: 50px">
        <div class="row">
            <div class="col-sm-6 mr-0">
                <img src="{{asset('/')}}/front-end/images/customer.jpg" height="400px" width="100%">
            </div>
            <div class="col-sm-6">
                <div class="col-8" style="padding-top:50px">
                    <h5 class="text-warning">About our company</h5>
                    <h2><b>Make the customer the hero of your story</b></h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisic- ing elit, sed do eiusmod tempor inc. </h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
                    <a href="" class="btn btn-warning btn-lg">Learn More</a>
                </div>

            </div>
        </div>
    </section>
    <hr class="bg-warning">
    <div class="text-center" style="margin-bottom: 40px;margin-top: 70px">
        <h1 class="text-warning">Our Rooms</h1>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-sm-4" style="padding-bottom: 50px">
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room1.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="padding-bottom: 50px">
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="padding-bottom: 50px">
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room4.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room5.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="card">
                    <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" class="card-img-top">
                    <div class="card-body">
                        <h3><a href=""  class="text-warning">Classic Double Bed</a></h3>
                        <h5>TK. 150 / par night</h5>
                        <a href="" class="btn btn-outline-warning">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" style="margin-bottom: 70px;margin-top: 40px">
        <a href="" class="btn btn-lg btn-warning">View more</a>
    </div>
    <div class="text-center" style="margin-bottom: 40px;margin-top: 70px">
        <h3 class="text-warning">Comments</h3>
    </div>
    <div class="add-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item carousel-item-padding active ">
                                <div id="tarns-div" class="col-sm-12 text-center">
                                    <img src="{{asset('/')}}/front-end/images/c1.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">
                                    <hr class="bg-warning">
                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>
                                    <hr class="bg-warning">
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <div id="tarns-div" class="col-sm-12 text-center">
                                    <img src="{{asset('/')}}/front-end/images/c2.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">
                                    <hr class="bg-warning">
                                    <h5 class="text-bold text-warning"><i>You can trust this site !!</i></h5>
                                    <hr class="bg-warning">
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <div id="tarns-div" class="col-sm-12 text-center ">
                                    <img src="{{asset('/')}}/front-end/images/c3.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">
                                    <hr class="bg-warning">
                                    <h5 class="text-bold text-warning"><i>Best service I get ever !!</i></h5>
                                    <hr class="bg-warning">
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <div id="tarns-div" class="col-sm-12 text-center">
                                    <img src="{{asset('/')}}/front-end/images/c4.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">
                                    <hr class="bg-warning">
                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>
                                    <hr class="bg-warning">
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-padding">
                                <div id="tarns-div" class="col-sm-12  text-center">
                                        <img src="{{asset('/')}}/front-end/images/c5.jpg" class="rounded-circle m-5" alt="Cinque Terre" width="150" height="150">
                                    <hr class="bg-warning">
                                    <h5 class="text-bold text-warning"><i>Best site I have ever Visited !!</i></h5>
                                    <hr class="bg-warning">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        dsfdsfdsfds
    </div>

@endsection
