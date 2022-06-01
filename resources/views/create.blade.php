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
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset($car->img1)}}" class="d-block w-100" style="height: 160px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($car->img2)}}" class="d-block w-100" alt="..." style="height: 160px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($car->img3)}}" class="d-block w-100" alt="..." style="height: 160px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($car->img4)}}" class="d-block w-100" alt="..." style="height: 160px">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Oldingi </span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Keyingi</span>
                            </button>
                        </div>

                    {{--    <div class="col-6">
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
                        </div>--}}
                        <form action="{{ route('booking.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="car_id" value="{{$car->id}}">
                            <div class="form-group">
                                <label for="">F.I.SH</label>
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
                                <input type="date"  id="start_time" required class="form-control" name="to_date"  placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Qachon gacha</label>
                                <input type="date" required onchange="end()" id="end_time" class="form-control" name="from_date" placeholder="">
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
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>

        function end() {

            let min = $('#start_time').val();
            let max = $('#end_time').val();

            if (min > max) {
                alert('boshlanish va tugash kunlarini tog`ri kiriting'
                )
                // swal({
                //     icon: 'error',
                //     title: 'Xatolik',
                //     text: 'Kelish vaqti Ketish vaqtidan  kichik bolishi kerak.',
                //     confirmButton: 'Continue',
                // })
                $('#end_time').val('');
                $('#start_time').val('');
            }
            console.log(max)
        }

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd
        }
        if(mm<10){
            mm='0'+mm
        }

        today = yyyy+'-'+mm+'-'+dd;
        document.getElementById("start_time").setAttribute("min", today);
        document.getElementById("end_time").setAttribute("min", today);


    </script>
@endsection
