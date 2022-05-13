@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"
             style="width: 90% !important;margin: auto !important;">

            @foreach($cars as $car)
                <div class="col-3 p-3" align="center">
                    <div class="card h-100 shadow-sm p-2" align="center"
                         style="display: inline-block;text-align: center !important;">
                        <img
                            src="{{ asset($car->img1) }}"
                            align="center" style="width: 300px !important;" class="card-img-top" alt="...">
                        <div class="card-body" style="padding: 2px !important;">
                            <div class="clearfix mb-3"><span
                                    class="float-start text-dark badge rounded-pill ">Bir kunlik avtomabil narxi:</span>
                                <span class="float-end price-hp underline">{{ $car->price }}</span></div>
                            <h5 class="card-title">{{ $car->company }} {{ $car->model }}</h5>
                            <div class="clearfix ">  <span
                                    class="float-start badge rounded-pill text-dark "><h6
                                        style="margin: 0 !important;">Avtomabil raqazmi:</h6></span> <span
                                    class="float-end price-hp underline">{{ $car->number }}</span>

                            </div>
                            <div class="clearfix ">
                                        <span class="float-start badge rounded-pill text-dark "><h6
                                                style="margin: 0 !important;">Yili:</h6></span> <span
                                    class="float-end price-hp underline">{{ $car->year }}</span></div>
                            <div class="clearfix "> <span class="float-start badge rounded-pill text-dark "><h6
                                        style="margin: 0 !important;">Yurgani:</h6></span> <span
                                    class="float-end price-hp underline">{{ $car->yurgani }}</span></div>
                            <div class="clearfix ">  <span
                                    class="float-start badge rounded-pill text-dark "><h6
                                        style="margin: 0 !important;">Yoqilg`i turi:</h6></span> <span
                                    class="float-end price-hp underline">{{ $car->type_fuel }}</span>

                            </div>

                            <div class="text-center my-4"><a href="{{ route('booking.create',$car->id) }}"
                                                             class="btn btn-warning">Ijaraga olish</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
@endsection
