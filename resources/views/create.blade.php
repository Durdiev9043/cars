@extends('layouts.app')
@section('content')
    <div class="container-fluid bg-trasparent  " style="position: relative;">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"
             style="width: 90% !important;margin: auto !important;">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $car->company }} {{ $car->model }}</h3>
                        <p class="card-text"><small class="text-muted">Raqami:{{ $car->number }} </small></p>
                        <p class="card-text"><small class="text-muted">Yili:{{ $car->year }} </small></p>
                        <p class="card-text"><small class="text-muted">Texnik passporti:{{ $car->pass_number }} </small>
                        </p>
                        <p class="card-text"><small class="text-muted">Yoqilg`i turi:{{ $car->type_fuel }} </small></p>
                        <p class="card-text"><small class="text-muted">Yurgani:{{ $car->yurgani }} </small></p>
                        <p class="card-text"><small class="text-muted">Narxi:{{ $car->price }} </small></p>

                    </div>
                    <div class="card-body row">
                        <div class="col-6">
                            <img src="{{asset($car->img1)}}" width="50%" height="150px" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset($car->img2)}}" width="50%" height="150px" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset($car->img3)}}" width="50%" height="150px" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset($car->img4)}}" width="50%" height="150px" alt="">
                        </div>
                        <form action="{{ route('booking.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <div class="form-group">
                                <label for="">I.F.SH</label>
                                <input type="text" required class="form-control" name="full_name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Guvohnoma seriasi va raqami</label>
                                <input type="text" required class="form-control" name="certificate" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Passport seriasi va raqami</label>
                                <input type="text" required class="form-control" name="passport" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Qachondan boshlab</label>
                                <input type="date" required class="form-control" name="to_date" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Qachon gacha</label>
                                <input type="date" required class="form-control" name="from_date" placeholder="">
                            </div>
                            <input type="hidden"  name="status" value="0">

                            <div align="center">
                                <button type="submit" class="btn btn-primary">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
