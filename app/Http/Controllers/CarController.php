<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function index()
    {
        $cars=Car::all();
        return view('admin.car.index',['cars'=>$cars]);
    }

    public function create()
    {
        return view('admin.car.create');
    }

    public function store(Request $request)
    {
        //'year','yurgani','model','company','number','type_fuel','pass_number','price','status'
        if($request->hasFile('img1')){

            $uuid = Str::uuid()->toString();
            $file_name = $uuid . '-' . time() . '.' . $request->img1->getClientOriginalName();
            $request->img1->move(public_path('/images/'), $file_name);
            $input[1]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
                ];
        }
        if( $request->hasFile('img2')){
            $file_name2 = $uuid . '-' . time() . '.' . $request->img2->getClientOriginalName();
            $request->img2->move(public_path('/images/'), $file_name2);
            $input[2]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,];
        }
        if( $request->hasFile('img3')){
            $file_name3 = $uuid . '-' . time() . '.' . $request->img3->getClientOriginalName();
            $request->img3->move(public_path('/images/'), $file_name3);
            $input[3]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'img3'=>'images/'.$file_name3,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
                ];
        }
        if( $request->hasFile('img4')){
            $file_name4 = $uuid . '-' . time() . '.' . $request->img4->getClientOriginalName();
            $request->img4->move(public_path('/images/'), $file_name4);
            $input[4]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'img3'=>'images/'.$file_name3,
                'img4'=>'images/'.$file_name4,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
                ];
        }
        for($i = 4; $i>0; $i--){
            if(isset($input[$i])){
                Car::create($input[$i]);
                break;
            }
        }
        return redirect()->route('admin.car.index')->with('success','saqlandi');
    }


    public function show($id)
    {
        //
    }


    public function edit(Car $car)
    {
        return view('admin.car.edit',['car'=>$car]);
    }


    public function update(Request $request, Car $car)
    {
        $input[0]=[
            'year'=>$request->years,
            'yurgani'=>$request->yurgani,
            'model'=>$request->model,
            'company'=>$request->company,
            'number'=>$request->number,
            'type_fuel'=>$request->type_fuel,
            'pass_number'=>$request->pass_number,
            'status'=>$request->status,
            'price'=>$request->price,
        ];
        if($request->hasFile('img1')){

            $uuid = Str::uuid()->toString();
            $file_name = $uuid . '-' . time() . '.' . $request->img1->getClientOriginalName();
            $request->img1->move(public_path('/images/'), $file_name);
            $input[1]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
            ];
        }
        if( $request->hasFile('img2')){
            $file_name2 = $uuid . '-' . time() . '.' . $request->img2->getClientOriginalName();
            $request->img2->move(public_path('/images/'), $file_name2);
            $input[2]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,];
        }
        if( $request->hasFile('img3')){
            $file_name3 = $uuid . '-' . time() . '.' . $request->img3->getClientOriginalName();
            $request->img3->move(public_path('/images/'), $file_name3);
            $input[3]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'img3'=>'images/'.$file_name3,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
            ];
        }
        if( $request->hasFile('img4')){
            $file_name4 = $uuid . '-' . time() . '.' . $request->img4->getClientOriginalName();
            $request->img4->move(public_path('/images/'), $file_name4);
            $input[4]=[
                'year'=>$request->years,
                'yurgani'=>$request->yurgani,
                'model'=>$request->model,
                'company'=>$request->company,
                'number'=>$request->number,
                'img1'=>'images/'.$file_name,
                'img2'=>'images/'.$file_name2,
                'img3'=>'images/'.$file_name3,
                'img4'=>'images/'.$file_name4,
                'type_fuel'=>$request->type_fuel,
                'pass_number'=>$request->pass_number,
                'status'=>$request->status,
                'price'=>$request->price,
            ];
        }
        for($i = 4; $i>=0; $i--){
            if(isset($input[$i])){
                $car->update($input[$i]);
                break;
            }
        }
        return redirect()->route('admin.car.index')->with('success','saqlandi');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->with('success','O`chirildi');
    }
}
