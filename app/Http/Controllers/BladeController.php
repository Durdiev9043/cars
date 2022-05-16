<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index(){
        $books=Booking::all()->where('from_date',now());
        foreach ($books as $book){
            Car::all()->where('id',$book->car_id)->first()->update(['status'=>1]);
        }
        $cars=Car::all()->where('status',0);
        $bookings=Booking::all();
        return view('welcome',['cars'=>$cars,'bookings'=>$bookings]);
    }

    public function booking($id){
        $car=Car::all()->where('id',$id)->first();
        return view('create',['car'=>$car]);
    }

    public function store(Request $request){
        $id=Client::create([
            'full_name'=>$request->full_name,
            'certificate'=>$request->certificate,
            'passport'=>$request->passport,
        ])->id;
        Booking::create([
            'car_id'=>$request->car_id,
            'client_id'=>$id,
            'to_date'=>$request->to_date,
            'from_date'=>$request->from_date,
            'status'=>$request->status
        ]);
//        Car::all()->where('id',$request->car_id)->first()->update(['status'=>1]);
        return redirect()->route('index');
    }
}
