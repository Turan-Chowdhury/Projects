<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function showCheckOut(){
        return view('front-end.checkout.checkout');
    }

    public function showSignIn(){
        return view('front-end.auth.sign-in');
    }
    public function showSignUp(){
        return view('front-end.auth.sign-up');
    }
    public function loginCustomer(Request $request){
        $customer = Customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/');
        }else{
            return redirect('/customer/sign-in')->with('message','Invalid password!! Please, input a valid password !');
        }
    }
    public function saveCustomer(Request $request){
        $this->saveCustomerInfo($request);
        return redirect('/');
    }
    protected function saveCustomerInfo($request){
        $this->validate($request,[
            'email'=> 'email|unique:customers,email'
        ]);

        $customer = new Customer();
        $customer->first_name   = $request->first_name;
        $customer->last_name    = $request->last_name;
        $customer->email        = $request->email;
        $customer->password     = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address      = $request->address;
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

//        $data= $customer->toArray();

//        Mail::send('front-end.mails.confirmation-mail',$data,function($message) use ($data){
//            $message->to($data['email']);
//            $message->subject('Confirmation mail');
//        });
    }
    public function signUpCustomer(Request $request){
        $this->saveCustomerInfo($request);
        return redirect('/checkout/confirmation');
    }
    public function singInCustomer(Request $request){
        $customer = Customer::where('email',$request->email)->first();
        if(password_verify($request->password,$customer->password)){

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);

            return redirect('/checkout/confirmation');
        }else{
            return redirect('/checkout')->with('message','Invalid password!! Please, input a valid password !');
        }
    }

    public function showCheckOutConfirmation(){
        $customer = Customer::find(Session::get('customerId'));
        $room = Room::find(Session::get('room_id'));
        $hotel= Hotel::find(Session::get('hotel_id'));
        return view('front-end.checkout.checkout-confirmation',[
            'room'=>$room,
            'hotel'=>$hotel,
            'customer'=>$customer
        ]);

    }
    public function signOutCustomer(Request $request){
        Session::flush();
        return redirect('/');
    }

}
