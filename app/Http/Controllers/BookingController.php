<?php
namespace App\Http\Controllers;

use App\Booking;
use App\Mail\ConfirmBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller {

    public function index() {
        return Booking::with('user', 'ride')->get();;
    }

    public function show($booking) {
        return Booking::with('user', 'ride')->find($booking);
    }

    public function store(Request $request) {
        $booking = Booking::create($request->all());
        return response()->json($booking, 201);
    }

    public function update(Request $request, Booking $booking) {
        $booking->update($request->all());
        Mail::to($request->user()->email)->queue(new ConfirmBooking($booking));
        return response()->json($booking, 200);
    }

    public function delete(Booking $booking) {
        $booking->delete();
        return response()->json(null, 204);
    }
    
    public function ride($ride) {
        return Booking::with('user')->where('ride_id', "=", $ride)->get();
    }
}
