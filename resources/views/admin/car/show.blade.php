@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="padding: 5px !important;">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"></h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.car.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="" style="overflow: scroll">
                    <table width="100%" class="table-bordered table-striped" id="mytable">
                        {{--                        <thead>--}}
                        {{--                        'year','yurgani','model','company','number','type_fuel','pass_number','price','status'--}}
                        {{--                        <tr>--}}
                        {{--                            <th>Yili</th>--}}
                        {{--                            <th>Yurgani</th>--}}
                        {{--                            <th>Modeli</th>--}}
                        {{--                            <th>Ishlab chiqargan kampnaya</th>--}}
                        {{--                            <th>Raqami</th>--}}
                        {{--                            <th>Yoqilg`i turi</th>--}}
                        {{--                            <th>Texnik passport <br>seriasi va raqami</th>--}}
                        {{--                            <th>Narxi</th>--}}
                        {{--                            <th>Holati</th>--}}
                        {{--                            <th>Surati</th>--}}
                        {{--                            <th>amallar</th>--}}

                        {{--                        </tr>--}}

                        {{--                        </thead>--}}
                        <tbody>
                        <tr>
                            <td>Yili</td>
                            <td>{{$car->year}}</td>
                        </tr>
                        <tr>
                            <td>Yurgani</td>
                            <td>{{$car->yurgani}}</td>
                        </tr>
                        <tr>
                            <td>Modeli</td>
                            <td>{{$car->model}}</td>
                        </tr>
                        <tr>
                            <td>Ishlab chiqargan kampnaya</td>
                            <td> {{$car->company}}</td>
                        </tr>
                        <tr>
                            <td>Raqami</td>
                            <td>{{$car->number}}</td>
                        </tr>
                        <tr>
                            <td>Yoqilg`i turi</td>
                            <td>{{$car->type_fuel}}</td>
                        </tr>
                        <tr>
                            <td>Texnik passport <br>seriasi va raqami</td>
                            <td>{{$car->pass_number}}</td>
                        </tr>
                        <tr>
                            <td>Narxi</td>
                            <td>{{$car->price}}</td>
                        </tr>
                        <tr>
                            <td>Holati</td>
                            <td>
                                <?php
                                $x = (integer)$car->status;
                                ?>
                                {{$car->bron[$x]}}
                            </td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($car->img1)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($car->img1)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($car->img3)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($car->img4)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        </tbody>
                    </table>


                    <form action="{{ route('admin.car.destroy',$car ->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                            <div class="flex justify-content-center align-center" align="center" role="group">
                                <a class="btn btn-warning btn-sm"
                                   href="{{ route('admin.car.edit',$car->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                                </a>
                                <a href="{{ route('admin.car.show',$car->id) }}" class="btn btn-light mt-2 btn-sm"><i
                                        class="fa fa-eye" aria-hidden="true"></i></a>
                                <button type="submit" class="btn mt-2 btn-danger btn-sm"><span
                                        class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                            </div>

                    </form>


                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('/assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#mytable').DataTable({
                "language": {
                    "lengthMenu": "_MENU_",
                    "zeroRecords": " ",
                    "info": "_PAGE_ / _PAGES_",
                    "infoEmpty": " ",
                    "search": "Qidirish:",
                    "paginate": {
                        "first": "биринчи",
                        "previous": "олдинги",
                        "next": "кейинки",
                        "last": "охирги"
                    },
                }
            });
        });
    </script>
@endsection

