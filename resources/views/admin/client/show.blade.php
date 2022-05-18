@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="padding: 5px !important;">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"></h1></div>
                    <div class="col-md-1">

                    </div>
                </div>
                <hr>
                <div class="" style="overflow: scroll">
                    <table width="100%" class="table-bordered table-striped" id="mytable">
{{--                        <td>--}}
{{--                            {{$client->client->full_name}}--}}
{{--                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{$client->client->certificate}}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{$client->client->passport}}--}}
{{--                                                        </td>--}}
{{--                        <td>--}}
{{--                            {{$client->car->number}}--}}
{{--                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{$client->car->pass_number}}--}}
{{--                                                        </td>--}}
{{--                        <td>--}}
{{--                            {{$client->car->company}}--}}

{{--                            {{$client->car->model}}--}}
{{--                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{Carbon\Carbon::parse($client->to_date)->format("d-M Y")}}--}}
{{--                                                        </td>--}}
{{--                                                        <td>--}}
{{--                                                            {{Carbon\Carbon::parse($client->from_date)->format("d-M Y")}}--}}
{{--                                                        </td>--}}


{{--                                                        <td>--}}
{{--                                                            <?php--}}
{{--                                                            $x = (int)$client->status;--}}
{{--                                                            echo $client->st[$x];--}}
{{--                                                            ?>--}}
{{--                                                                                                {{ $client->st[$x] }}--}}
{{--                                                        </td>--}}

                        <tbody>
                        <tr>
                            <td>I.F.Sh</td>
                            <td>{{$client->client->full_name}}</td>
                        </tr>
                        <tr>
                            <td>guvohnoma</td>
                            <td> {{$client->client->certificate}}</td>
                        </tr>
                        <tr>
                            <td>Passport</td>
                            <td> {{$client->client->passport}}</td>
                        </tr>
                        <tr>
                            <td>Avtomabil raqami</td>
                            <td> {{$client->car->number}}</td>
                        </tr>
                        <tr>
                            <td>Texnik passport <br>seriasi va raqami</td>
                            <td> {{$client->car->pass_number}}</td>
                        </tr>
                        <tr>
                            <td>Avtomabil</td>
                            <td> {{$client->car->company}}  {{$client->car->model}}</td>
                        </tr>
                        <tr>
                            <td>Qachondan boshlab</td>
                            <td> {{Carbon\Carbon::parse($client->to_date)->format("d-M Y")}}</td>
                        </tr>
                        <tr>
                            <td>Qachongacha</td>
                            <td> {{Carbon\Carbon::parse($client->to_date)->format("d-M Y")}}</td>
                        </tr>
                        <tr>
                            <td>Tolov haqida malumot</td>
                            <td>
                                <?php
                                $x = (integer)$client->status;
                                ?>
                                {{$client->st    [$x]}}
                            </td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($client->car->img1)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($client->car->img2)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($client->car->img3)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        <tr>
                            <td>Surati</td>
                            <td><img src="{{asset($client->car->img4)}}" width="100%" height="50px" alt=""></td>
                        </tr>
                        </tbody>
                    </table>


                    <form action="{{ route('admin.booking.destroy',$client ->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="flex justify-content-center align-center" align="center" role="group">
                            <a class="btn btn-warning btn-sm"
                               href="{{ route('admin.booking.edit',$client->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                            </a>
                            <a href="{{ route('admin.booking.show',$client->id) }}" class="btn btn-light mt-2 btn-sm"><i
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

