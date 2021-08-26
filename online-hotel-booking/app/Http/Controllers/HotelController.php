<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Location;
use App\Room;
use DB;
use DateTime;
use Illuminate\Support\Facades\Session;
use Image;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function showHomePage(){
        return view('front-end.home.home');
    }
    public function showAvailableHotel(Request $request)
    {
        $id = $request->location_id;
        $checkin_date = $request->checkin_date;
        $checkout_date = $request->checkout_date;
        $datetime1 = new DateTime($checkin_date);
        $datetime2 = new DateTime($checkout_date);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $hotels = Hotel::where('location_id',$id)->get();
        if(count($hotels))
        {
            Session::put('location_id',$request->location_id);
            Session::put('checkin_date',$request->checkin_date);
            Session::put('checkout_date',$request->checkout_date);
            Session::put('total_day',$days);
            Session::put('adult_select_value',$request->adult_select_value);
            Session::put('child_select_value',$request->child_select_value);
            return view('front-end.hotel.hotel',[
                'hotels'=>$hotels
            ]);
        }
        return redirect('/')->with('errors',"Sorry,We don't have available hotel there Right now!");
    }
    public function showAddHotel(){
        $locations = Location::all();
        return view('admin.hotel.add-hotel',[
            'locations'=>$locations
        ]);
    }
    public function showManageHotel(){
        $hotels = DB::table('hotels')
            ->join('locations','locations.id','=','hotels.location_id')
            ->select('hotels.*','locations.location_name')
            ->get();
        return view('admin.hotel.manage-hotel',[
            'hotels'=>$hotels
        ]);
    }

    protected function uploadHotelImage($request){
        $hotelImage = $request->file('hotel_image');
        $imageType = $hotelImage->getClientOriginalExtension();
        $imageName = $request->hotel_name.'.'.$imageType;
        $directory = 'admin/hotel-images/';
        $imageUrl = $directory.$imageName;
        Image::make($hotelImage)->save($imageUrl);
        return $imageUrl;

    }
    public function saveHotel(Request $request){
        $imageUrl = $this->uploadHotelImage($request);

        $hotel = new Hotel();
        $hotel->location_id = $request->location_id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->room_numbers = $request->room_numbers;
        $hotel->available_room = $request->room_numbers;
        $hotel->minimum_price = $request->minimum_price;
        $hotel->hotel_facilities = $request->hotel_facilities;
        $hotel->address = $request->address;
        $hotel->description = $request->description;
        $hotel->hotel_image = $imageUrl;
        $hotel->save();
        return redirect('/hotel/add')->with('message','Hotel save successfully');
    }

    public function showAddHotelImage(){
        $hotels = Hotel::all();
        return view('admin.hotel.add-hotel-image',[
            'hotels'=>$hotels
        ]);
    }
    protected function uploadHotelImages($request){
        $id = $request->hotel_id;
        $hotel = Hotel::find($id);
        $images = \App\Image::where('hotel_id',$id)->get();
        $count = count($images);
        $hotelImage = $request->file('hotel_image');
        $imageType = $hotelImage->getClientOriginalExtension();
        $imageName = $hotel->hotel_name.$count.'.'.$imageType;
        $directory = 'admin/individual-hotel-images/';
        $imageUrl = $directory.$imageName;
        Image::make($hotelImage)->save($imageUrl);
        return $imageUrl;
    }
    public function saveHotelImage(Request $request){

        $imageUrl = $this->uploadHotelImages($request);
        $image = new \App\Image();
        $image->hotel_id = $request->hotel_id;
        $image->hotel_image = $imageUrl;
        $image->save();

        return redirect('/hotel/image/add')->with('message','Hotel Image saved successfully');

    }
    public function showManageHotelImage(){
        $images = DB::table('images')
            ->join('hotels','hotels.id','=','images.hotel_id')
            ->select('images.*','hotels.hotel_name')
            ->get();
        return view('admin.hotel.manage-hotel-image',[
            'images'=>$images
        ]);
    }
    public function deleteImage($id){
        $image = \App\Image::find($id);
        $image->delete();
        return redirect('/hotel/image/manage')->with('message','Image deleted successfully');
    }
    public function showHotelDetails($id){
        $hotel = Hotel::find($id);
        $location = Location::find($hotel->location_id);
        return view('admin.hotel.hotel-details',[
            'hotel'=>$hotel,
            'location'=>$location
        ]);

    }
    public function editHotel($id){
        $locations = Location::all();
        $hotel = Hotel::find($id);
        return view('admin.hotel.edit-hotel',[
            'hotel'=>$hotel,
            'locations'=>$locations
        ]);
    }
    public function updateHotel($request,$hotel,$imageUrl=null){

        $hotel->location_id = $request->location_id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->room_numbers = $request->room_numbers;
        $hotel->available_room = $request->room_numbers;
        $hotel->minimum_price = $request->minimum_price;
        $hotel->hotel_facilities = $request->hotel_facilities;
        $hotel->address = $request->address;
        $hotel->description = $request->description;
        if($imageUrl)
        {
            $hotel->hotel_image = $imageUrl;
        }
        $hotel->save();

    }
    public function updateHotelInfo(Request $request)
    {
        $hotel = Hotel::find($request->hotel_id);
        $hotelImage= $request->file('hotel_image');

        if($hotelImage)
        {
            unlink($hotel->hotel_image);
            $imageUrl = $this->uploadHotelImage($request);
            $this->updateHotel($request,$hotel,$imageUrl);
        }
        else{
            $this->updateHotel($request,$hotel);
        }
        return redirect('/hotel/manage')->with('message','Hotel updated successfully!!');
    }
    public function deleteHotel($id){
        $hotel= Hotel::find($id);
        $rooms = Room::where('hotel_id',$id)->get();
        foreach ($rooms as $room)
        {
            $room = Room::find($room->id);
            $room->delete();
        }
        $hotel->delete();
        return redirect('/hotel/manage')->with('message','Hotel & Rooms are deleted successfully!!');
    }
}
