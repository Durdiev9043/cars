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
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                            <label for="">year</label>
                            <input type="text" name="years" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">yurgani</label>
                            <input type="text" name="yurgani" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">model</label>
                            <input type="text" name="model" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">company</label>
                            <input type="text" name="company" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">number</label>
                            <input type="text" name="number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">type_fuel</label>
                            <input type="text" name="type_fuel" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">pass_number</label>
                            <input type="text" name="pass_number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">price</label>
                            <input type="text" name="price" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="img1">surati</label>
                            <input type="file" name="img1" required class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati2</label>
                            <input type="file" name="img2"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati3</label>
                            <input type="file" name="img3"  class="form-control" id="img1"  >
                        </div>
                        <div class="form-group">
                            <label for="img1">surati4</label>
                            <input type="file" name="img4"  class="form-control" id="img1"  >
                        </div>

                        <div class="form-group">
                            <label for="header_ru">status</label>
                            <input type="text" name="status" class="form-control" placeholder="">
                        </div>




                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
