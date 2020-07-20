@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <br><br><br>
        <center>

        <h2>Daftar Pengumpulan Link Webinar</h2><br><br><br>
        <table id="example" class="mdl-data-table" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Webinar</th>
                <th>Email</th>
                <th>Link</th>

            </tr>
            </thead>
            <tbody>
            @foreach($liat as $li)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$li->name }}</td>
                @foreach($li->CategoryWebinar as $data)
                    <td>{{$data->name }}</td>
                @endforeach
                <td>{{$li->email}}</td>
                <td><a href="{{$li->link}}">{{$li->link}}</a></td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Webinar</th>
                <th>Email</th>
                <th>Link</th>

            </tr>
            </tfoot>
        </table>
        </center>


<script>
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                autoWidth: false,
                columnDefs: [
                    {
                        targets: ['_all'],
                        className: 'mdc-data-table__cell'
                    }
                ],
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>

@endsection
