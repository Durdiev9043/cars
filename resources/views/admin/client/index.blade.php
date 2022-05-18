@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" STYLE="padding: 5px !important;">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"></h1></div>
                    <div class="col-md-1">
                        {{--<a class="btn btn-primary" href="{{route('admin.car.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qoshish
                        </a>--}}
                    </div>
                </div>
                <hr>
                <div class="">
                    <table width="100%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        {{--                        'year','yurgani','model','company','number','type_fuel','pass_number','price','status'--}}
                        <tr>
                            <th>F.I.SH</th>
{{--                            <th>Guvohnoma <br>seriasi va raqami</th>--}}
{{--                            <th>Passport<br>seriasi va raqami</th>--}}
                            <th>Avtomabil<br>raqami</th>
{{--                            <th>texnik passport<br> seriasi va raqami</th>--}}
                            <th>Avtomabil</th>
{{--                            <th>Qachondan boshlab</th>--}}
{{--                            <th>Qachon gacha</th>--}}
{{--                            <th>To`lov haqida malumot</th>--}}
                            <th>Amallar</th>

                        </tr>

                        </thead>
                        <tbody>


                        @foreach($clients as $client)

                            <tr>
                                <td>
                                    {{$client->client->full_name}}
                                </td>
{{--                                <td>--}}
{{--                                    {{$client->client->certificate}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{$client->client->passport}}--}}
{{--                                </td>--}}
                                <td>
                                    {{$client->car->number}}
                                </td>
{{--                                <td>--}}
{{--                                    {{$client->car->pass_number}}--}}
{{--                                </td>--}}
                                <td>
                                    {{$client->car->company}}

                                    {{$client->car->model}}
                                </td>
{{--                                <td>--}}
{{--                                    {{Carbon\Carbon::parse($client->to_date)->format("d-M Y")}}--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    {{Carbon\Carbon::parse($client->from_date)->format("d-M Y")}}--}}
{{--                                </td>--}}


{{--                                <td>--}}
{{--                                    <?php--}}
{{--                                    $x = (int)$client->status;--}}
{{--                                    echo $client->st[$x];--}}
{{--                                    ?>--}}
{{--                                    --}}{{--                                    {{ $client->st[$x] }}--}}
{{--                                </td>--}}


                                <td>
                                    <form action="{{ route('admin.booking.destroy',$client ->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="dinayquy">
                                            <div class=" " role="group">
                                                <a class="btn btn-warning btn-sm"
                                                   href="{{ route('admin.booking.edit',$client->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                                                </a>
                                                <a href="{{ route('admin.booking.show',$client->id) }}" class="btn btn-light mt-2 btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a><br>

                                                <button type="submit" class="btn btn-danger btn-sm"><span
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

