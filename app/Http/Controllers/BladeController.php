<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BladeController extends Controller
{
    public function index()
    {
        $books = Booking::all()->where('from_date', now());
        foreach ($books as $book) {
            Car::all()->where('id', $book->car_id)->first()->update(['status' => 1]);
        }
        $cars = Car::all()->where('status', 0);
        $bookings = Booking::all();
        return view('welcome', ['cars' => $cars, 'bookings' => $bookings]);
    }

    public function booking($id)
    {
        $car = Car::all()->where('id', $id)->first();
        return view('create', ['car' => $car]);
    }

    public function store(Request $request)
    {


        $request->validate([
            'full_name' => 'required',
            'certificate' => 'required',
            'passport' => 'required',
            'car_id' => 'required',
            'to_date' => 'required',
            'from_date' => 'required',

        ]);
        $i = 0;
        $day = Booking::all()->where('car_id', $request->car_id);
        if (count($day) > 0) {
            foreach ($day as $kun) {
                if (Carbon::parse($kun->to_date)->format("d-m-Y") > Carbon::parse($request->to_date)->format("d-m-Y")  && Carbon::parse($kun->to_date)->format("d-m-Y") <  Carbon::parse($request->from_date)->format("d-m-Y")) {
                    if (Carbon::parse($kun->from_date)->format("d-m-Y") > Carbon::parse($request->from_date)->format("d-m-Y")) {
                        $id = Client::create([
                            'full_name' => $request->full_name,
                            'certificate' => $request->certificate,
                            'passport' => $request->passport,
                        ])->id;
                        Booking::create([
                            'car_id' => $request->car_id,
                            'client_id' => $id,
                            'to_date' => $request->to_date,
                            'from_date' => $request->from_date,
                            'status' => $request->status
                        ]);

                    } else {
                        return redirect()->back()->with('error', 'band');
                    }
                } else {

                    if (Carbon::parse($kun->from_date)->format("d-m-Y") > Carbon::parse($request->from_date)->format("d-m-Y")) {
                        $id = Client::create([
                            'full_name' => $request->full_name,
                            'certificate' => $request->certificate,
                            'passport' => $request->passport,
                        ])->id;
                        Booking::create([
                            'car_id' => $request->car_id,
                            'client_id' => $id,
                            'to_date' => $request->to_date,
                            'from_date' => $request->from_date,
                            'status' => $request->status
                        ]);
                    } else {
                        return redirect()->back()->with('error', 'band');
                    }
                }
            }
        } else {
            $id = Client::create([
                'full_name' => $request->full_name,
                'certificate' => $request->certificate,
                'passport' => $request->passport,
            ])->id;
            Booking::create([
                'car_id' => $request->car_id,
                'client_id' => $id,
                'to_date' => $request->to_date,
                'from_date' => $request->from_date,
                'status' => $request->status
            ]);
        }


        return redirect()->route('index');

    }
}
