@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">    </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.car.update',$car->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="">Yili</label>
                            <input type="text" name="years" value="{{ $car->year }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Yurgani</label>
                            <input type="text" name="yurgani" value="{{ $car->yurgani }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">modeli</label>
                            <input type="text" name="model" value="{{ $car->model }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ishlab chiqargan kampanya</label>
                            <input type="text" name="company" value="{{ $car->company }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">raqami</label>
                            <input type="text" name="number" value="{{ $car->number }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Yoqilg`i turi</label>
                            <input type="text" name="type_fuel" value="{{ $car->type_fuel }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Texnik passport seriasi va raqami</label>
                            <input type="text" name="pass_number" value="{{ $car->pass_number }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Narxi</label>
                            <input type="text" name="price" value="{{ $car->price }}" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="img1">surati</label>
                            <input type="file" name="img1"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati 2</label>
                            <input type="file" name="img2"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati 3</label>
                            <input type="file" name="img3"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati 4</label>
                            <input type="file" name="img4"  class="form-control" id="img1"  >
                        </div>

                        <div class="form-group">
                            <?php
                            $x=(integer)$car->status;
                            ?>
                            <label for="header_ru">holati {{ $car->bron[$x] }}</label>
{{--                            <input type="text" name="status" disabled value="{{ $car->status }}" class="form-control" placeholder="">--}}
                        </div>





                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
