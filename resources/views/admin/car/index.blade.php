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
                            Qoshish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="" style="overflow: scroll">
                    <table width="100%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        {{--                        'year','yurgani','model','company','number','type_fuel','pass_number','price','status'--}}
                        <tr>
{{--                            <th>Yili</th>--}}
{{--                            <th>Yurgani</th>--}}
                            <th>Modeli</th>
{{--                            <th>Ishlab chiqargan kampnaya</th>--}}
                            <th>Raqami</th>
{{--                            <th>Yoqilg`i turi</th>--}}
                            <th>Texnik passport <br>seriasi va raqami</th>
{{--                            <th>Narxi</th>--}}
{{--                            <th>Holati</th>--}}
{{--                            <th>Surati</th>--}}
                            <th>Amallar</th>

                        </tr>

                        </thead>
                        <tbody>


                        @foreach($cars as $car)

                            <tr>
{{--                                <td>--}}
{{--                                    {{$car->year}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$car->yurgani}}--}}
{{--                                </td>--}}
                                <td>
                                    {{$car->model}}
                                </td>
{{--                                <td>--}}
{{--                                    {{$car->company}}--}}
{{--                                </td>--}}
                                <td>
                                    {{$car->number}}
                                </td>
{{--                                <td>--}}
{{--                                    {{$car->type_fuel}}--}}
{{--                                </td>--}}
                                <td>
                                    {{$car->pass_number}}
                                </td>
{{--                                <td>--}}
{{--                                    {{$car->price}}--}}
{{--                                </td>--}}

{{--                                <td>--}}
{{--                                    <?php--}}
{{--                                    $x = (integer)$car->status;--}}
{{--                                    ?>--}}
{{--                                    {{$car->bron[$x]}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <img src="{{asset($car->img1)}}" width="100%" height="50px" alt="">--}}
{{--                                </td>--}}

                                <td>
                                    <form action="{{ route('admin.car.destroy',$car ->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="dinayquy">
                                            <div class=" " role="group">
                                                <a class="btn btn-warning btn-sm"
                                                   href="{{ route('admin.car.edit',$car->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                                                </a><br>
                                                <a href="{{ route('admin.car.show',$car->id) }}" class="btn btn-light mt-2 btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a><br>
                                                <button type="submit" class="btn mt-2 btn-danger btn-sm"><span
                                                        class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                            </div>
                                        </div>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
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

