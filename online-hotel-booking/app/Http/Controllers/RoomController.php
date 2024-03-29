<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Location;
use App\Room;
use DB;
use Image;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function showRooms($id){
        $hotel = Hotel::find($id);
        $count = $hotel->availabel_room;
        if(!$count)
        {
            $rooms = Room::where('hotel_id',$id)
                ->where('available_room','>',0)
                ->get();

            $hotelImages = \App\Image::where('hotel_id',$id)->get();

            return view('front-end.room.room',[
                'rooms'=>$rooms,
                'hotelImages'=>$hotelImages,
                'hotel'=>$hotel
            ]);

        }
        return redirect('/hotel/available')->with('id',$id);
    }

    public function changeRoom($id){
        $hotel = Hotel::find($id);

        $rooms = Room::where('hotel_id',$id)
                ->where('available_room','>',0)
                ->get();

        $hotelImages = \App\Image::where('hotel_id',$id)->get();

        return view('front-end.room.room',[
                'rooms'=>$rooms,
                'hotelImages'=>$hotelImages,
                'hotel'=>$hotel
            ]);

    }

    public function showAddRoom(){
        $locations = Location::all();
        return view('admin.room.add-room',[
            'locations'=>$locations
        ]);
    }

    public function showManageRoom(){
        $rooms = DB::table('rooms')
            ->join('locations','locations.id','=','rooms.location_id')
            ->join('hotels','hotels.id','=','rooms.hotel_id')
            ->select('rooms.*','locations.location_name','hotels.hotel_name')
            ->get();
        return view('admin.room.manage-room',[
            'rooms'=>$rooms
        ]);
    }

    public function getHotels($id){
        $hotelNames = Hotel::where('location_id',$id)->get();
        return response()->json($hotelNames);
    }

    protected function uploadRoomImage($request){
        $roomImage = $request->file('room_image');
        $imageType = $roomImage->getClientOriginalExtension();
        $imageName = $request->room_code.'.'.$imageType;
        $directory = 'admin/room-images/';
        $imageUrl = $directory.$imageName;
        Image::make($roomImage)->save($imageUrl);
        return $imageUrl;

    }

    public function saveRoom(Request $request){
        $imageUrl = $this->uploadRoomImage($request);
        $room = new Room();
        $room->location_id = $request->location_id;
        $room->hotel_id = $request->hotel_id;
        $room->room_name = $request->room_name;
        $room->room_code = $request->room_code;
        $room->number_of_room = $request->number_of_room;
        $room->available_room = $request->number_of_room;
        $room->room_type = $request->room_type;
        $room->room_capacity = $request->room_capacity;
        $room->room_facilities = $request->room_facilities;
        $room->price_per_night = $request->price_per_night;
        $room->description = $request->description;
        $room->room_image = $imageUrl;
        $room->save();
        return redirect('/room/add')->with('message','Room save successfully');
    }

    public function showRoomDetails($id){
        $room = Room::find($id);
        $hotel = Hotel::find($room->hotel_id);
        $location = Location::find($room->location_id);
        return view('admin.room.room-details',[
            'room'=>$room,
            'hotel'=>$hotel,
            'location'=>$location
        ]);
    }

//    public function bookRoom($id){
//        $room = Room::find($id);
//        $room->room_status=0;
//        $room->save();
//        return redirect('/room/manage')->with('message','Room Booked successfully!!');
//
//    }
//
//    public function unbookedRoom($id){
//        $room = Room::find($id);
//        $room->room_status=1;
//        $room->save();
//        return redirect('/room/manage')->with('message','Room Unbooked successfully!!');
//
//    }

    public function showEditRoom($id){
        $locations = Location::all();
        $hotels = Hotel::all();
        $room = Room::find($id);
        return view('admin.room.edit-room',[
            'room'=>$room,
            'hotels'=>$hotels,
            'locations'=>$locations
        ]);
    }

    public function updateRoom($request,$room,$imageUrl=null){

        $room->location_id = $request->location_id;
        $room->hotel_id = $request->hotel_id;
        $room->room_name = $request->room_name;
        $room->room_code = $request->room_code;
        $room->number_of_room = $request->number_of_room;
        $room->available_room = $request->number_of_room;
        $room->room_type = $request->room_type;
        $room->room_capacity = $request->room_capacity;
        $room->room_facilities = $request->room_facilities;
        $room->price_per_night = $request->price_per_night;
        $room->description = $request->description;
        if($imageUrl)
        {
            $room->room_image = $imageUrl;
        }
        $room->save();

    }

   public function updateRoomInfo(Request $request){

        $room = Room::find($request->room_id);
        $roomImage= $request->file('room_image');

        if($roomImage)
        {
            unlink($room->room_image);
            $imageUrl = $this->uploadRoomImage($request);
            $this->updateRoom($request,$room,$imageUrl);
        }
        else{
            $this->updateRoom($request,$room);
        }
        return redirect('/room/manage')->with('message','Room updated successfully!!');
    }

    public function deleteRoom($id){
        $room = Room::find($id);
        $room->delete();
        return redirect('/room/manage')->with('message','Room deleted successfully!!');
    }


}
