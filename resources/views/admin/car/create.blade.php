@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">   </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Xatolik!</strong> <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.car.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
{{--                        'year','yurgani','model','company','number','type_fuel','pass_number','price','status'--}}


                        <div class="form-group">
                            <label for="">Yili</label>
                            <input type="text" name="years" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Yurgani</label>
                            <input type="text" name="yurgani" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Modeli</label>
                            <input type="text" name="model" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Ishlab chiqargan kompaniyasi</label>
                            <input type="text" name="company" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Avtomabil raqami</label>
                            <input type="text" name="number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Yoqilg`i turi</label>
                            <input type="text" name="type_fuel" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Texnik passport seriyasi va raqami</label>
                            <input type="text" name="pass_number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Bir kunlik narxi</label>
                            <input type="text" name="price" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="img1">Surati</label>
                            <input type="file" accept="image/*" name="img1" required class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">Surati 2</label>
                            <input type="file"  accept="image/*" name="img2"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">Surati 3</label>
                            <input type="file" accept="image/*" name="img3"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">Surati 4</label>
                            <input type="file" accept="image/*" name="img4"  class="form-control" id="img1"  >
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="header_ru">status</label>--}}
{{--                            <input type="text" name="status" class="form-control" placeholder="">--}}
{{--                        </div>--}}




                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
