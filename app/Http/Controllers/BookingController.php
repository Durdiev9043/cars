<?php

namespace App\Http\Controllers;

use App\Models\Booking;

use App\Models\Client;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(Booking $booking)
    {
        return view('admin.client.edit', ['booking' => $booking]);
    }


    public function update(Request $request, Booking $booking)
    {
        $booking->update(['status' => $request->status]);
        return redirect()->route('admin.client.index');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        Client::all()->where('id', $booking->client_id)->first()->delete();
        return redirect()->back()->with('success', 'O`chirildi');

    }
}
