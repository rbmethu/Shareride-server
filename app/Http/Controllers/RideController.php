<?php
namespace App\Http\Controllers;

use App\Ride;
use Illuminate\Http\Request;

class RideController extends Controller {

    public function index() {
        return Ride::with('user')->get();
    }

    public function show($booking) {
        return Ride::with('user', 'booking')->find($booking);
    }

    public function store(Request $request) {
        $ride = Ride::create($request->all());
        return response()->json($ride, 201);
    }

    public function update(Request $request, Ride $ride) {
        $ride->update($request->all());
        return response()->json($ride, 200);
    }

    public function delete(Ride $ride) {
        $ride->delete();
        return response()->json(null, 204);
    }
}
