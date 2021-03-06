@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Foydalanuvchilar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.users.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="90%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        <tr>

                            <th  scope="col">Nomi</th>
                            <th  scope="col">Elektron pochta</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>

                                <td >{{$user->name}}</td>
                                <td>{{$user->email}}</td>



                                <td>
                                    <form action="{{ route('admin.users.destroy',$user ->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.users.edit',$user->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>

                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
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
        $(document).ready( function () {
            $('#mytable').DataTable({
                "language": {
                    "lengthMenu": "_MENU_",
                    "zeroRecords": "???????????????? ????????????",
                    "info": "_PAGE_ of _PAGES_",
                    "infoEmpty": " ",
                    "search":"??????????????:",
                    "paginate": {
                        "first": "Birinchi",
                        "previous": "Oldingi",
                        "next": "Keyingi",
                        "last": "Ohirgi"
                    },
                }
            });
        } );
    </script>
@endsection

