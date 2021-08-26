@extends('front-end.master')
@section('content')
    @include('front-end.includes.search-box')
    <section>
        <div class="col-sm-12 ">
            @foreach($hotels as $hotel)
            <div class="row pt-3">
                <div class="col-sm-6 offset-3">
                    <div class="card border-warning">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset($hotel->hotel_image)}}" height="300px" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h3 class="text-warning">{{$hotel->hotel_name}}</h3>
                                            <div id="star-box"></div>
                                            <hr class="bg-warning">
                                            <h6>Tags : {{$hotel->hotel_facilities}}</h6>
                                            <hr class="bg-warning">
                                            <h5>Address : {{$hotel->address}} </h5>

                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <div class='card shadow border-warning'>
                                                <div class="card-body">
                                                    <h6>Start From</h6>
                                                    <h5>TK. {{$hotel->minimum_price}}</h5>
                                                </div>
                                            </div>
                                            <div class="pt-lg-4">
                                                <a href="{{route('choose-room',['id'=>$hotel->id])}}" class="btn btn-warning btn-lg btn-block">Choose Room</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <div class="card border-warning">
                        <div class="card-body">
                            <div class="col-sm-10 offset-1">
                                <img src="{{asset('/')}}/front-end/img/rooms/room6.jpg" height="200px" width="100%">
                                <h5>Lorem ipsum dolor sit</h5>
                                <h6 class="text-warning">About our company</h6>
                                <a href="" class="btn btn-warning">Choose Room</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
