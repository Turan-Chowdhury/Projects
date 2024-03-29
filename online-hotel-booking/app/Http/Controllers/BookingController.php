<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingDetails;
use App\Customer;
use App\Hotel;
use App\Location;
use App\Payment;
use App\Room;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function showBookingDetails(Request $request){
        $hotel_id = $request->hotel_id;
        $room_id = $request->room_id;
        $hotel = Hotel::find($hotel_id);
        $room = Room::find($room_id);
        Session::put('room_quantity', $request->room_quantity);;
        Session::put('room_id', $request->room_id);;
        Session::put('hotel_id', $request->hotel_id);;
        return view('front-end.booking.booking',[
            'room'=>$room,
            'hotel'=>$hotel
        ]);
    }
    public function showManageBooking(){
        $bookings = DB::table('bookings')
            ->join('customers','bookings.customer_id','=','customers.id')
            ->join('hotels','bookings.hotel_id','=','hotels.id')
            ->join('rooms','bookings.room_id','=','rooms.id')
            ->join('locations','bookings.location_id','=','locations.id')
            ->join('payments','bookings.id','=','payments.booking_id')
            ->select('bookings.*','customers.first_name','customers.last_name','payments.payment_status','locations.location_name','hotels.hotel_name','rooms.room_name')
            ->get();

        return view('admin.booking.manage-booking',[
            'bookings'=>$bookings
        ]);
    }

    public function saveBookingInfo(Request $request){
        $paymentType = $request->payment_type;
        $location_id = Session::get('location_id');
        $hotel_id = Session::get('hotel_id');
        $room_id = Session::get('room_id');
        $customer_id = Session::get('customerId');
        $number_of_room = Session::get('room_quantity');
        $checkIn_dateTime = Session::get('checkin_date');
        $checkOut_dateTime = Session::get('checkout_date');
        $booking_total = Session::get('booking_total');
        $total_day = 1;
        $total_night = 1;

        if($paymentType=='cash'){
            $booking = new Booking();
            $booking->location_id = $location_id;
            $booking->hotel_id = $hotel_id;
            $booking->room_id = $room_id;
            $booking->customer_id = $customer_id;
            $booking->booking_total = $booking_total;
            $booking->number_of_room = $number_of_room;
            $booking->save();

            $payment = new Payment();
            $payment->booking_id = $booking->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $bookingDetails = new BookingDetails();
            $bookingDetails->booking_id = $booking->id;
            $bookingDetails->checkIn_dateTime = $checkIn_dateTime;
            $bookingDetails->checkout_dateTime = $checkOut_dateTime;
            $bookingDetails->total_day = $total_day;
            $bookingDetails->total_night = $total_night;
            $bookingDetails->save();

            return redirect('/booking/complete');

        }
        else if($paymentType=='paypal'){

        }else if ($paymentType=='Bkash')
        {

        }


    }
    public function completeBooking(){
        return 'Success!!';
    }
    public function showBookingDetailsView($id){
        $booking = Booking::find($id);
        $location = Location::find($booking->location_id);
        $customer = Customer::find($booking->customer_id);
        $hotel = Hotel::find($booking->hotel_id);
        $room = Room::find($booking->room_id);
        $payment = Payment::where('booking_id',$booking->id)->first();
        $bookingDetails = BookingDetails::where('booking_id',$booking->id)->first();

        return view('admin.booking.view-booking',[
            'booking'=>$booking,
            'location'=>$location,
            'customer'=>$customer,
            'hotel'=>$hotel,
            'room'=>$room,
            'payment'=>$payment,
            'bookingDetails'=>$bookingDetails,

        ]);
    }
    public function showConfirmBooking($id){
        $booking = Booking::find($id);
        $location = Location::find($booking->location_id);
        $customer = Customer::find($booking->customer_id);
        $hotel = Hotel::find($booking->hotel_id);
        $room = Room::find($booking->room_id);
        $payment = Payment::where('booking_id',$booking->id)->first();
        return view('admin.booking.confirm-booking',[
            'booking'=>$booking,
            'location'=>$location,
            'customer'=>$customer,
            'hotel'=>$hotel,
            'room'=>$room,
            'payment'=>$payment,
        ]);
    }
    public function confirmBooking(Request $request){
        $hotelId =$request->hotel_id;
        $hotel = Hotel::find($hotelId);
        $hotel->available_room -= $request->book_room;
        $hotel->save();

        $roomId =$request->room_id;
        $room = Room::find($roomId);
        $room->available_room -= $request->book_room;
        $room->save();

        $bookingId =$request->booking_id;
        $booking = Booking::find($bookingId);
        $booking->booking_status = 1;
        $booking->save();

        $paymentId =$request->payment_id;
        $payment = Payment::find($paymentId);
        $payment->payment_status = $request->payment_status;
        $payment->save();

        return redirect('/booking/manage')->with('message','Room Booked successfully!!');
    }
    public function confirm()
    {
        return redirect('/booking/manage')->with('message','This Booking is already Confirmed !!');
    }
    public function deleteBooking($id){
        $booking = Booking::find($id);
        $booking->delete();

        $payment = Payment::where('booking_id',$booking->id)->first();
        $payment->delete();

        $bookingDetails = BookingDetails::where('booking_id',$booking->id)->first();
        $bookingDetails->delete();

        return redirect('/booking/manage')->with('message','Booking Deleted successfully!!');
    }
}
