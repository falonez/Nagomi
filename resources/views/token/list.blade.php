@extends('layouts.theme')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">LIST TOKEN PERIODE {{ $nama_p }}</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">LIST TOKEN UJIAN</h4>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>GRADE</th>
                        <th>KELAS</th>
                        <th>MAPEL</th>
                        <th>TANGGAL</th>
                        <th>JAM MULAI</th>
                        <th>JAM KEDALUARSA</th>
                        <th>TOKEN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($token as $t)
                    <tr>
                        <td>{{ $t->no }}</td>
                        <td>{{ $t->grade }}</td>
                        <td>{{ $t->kelas }}</td>
                        <td>{{ $t->mapel }}</td>
                        <td>{{ $t->tanggal }}</td>
                        <td>{{ $t->jam_mulai }}</td>
                        <td>{{ $t->jam_selesai }}</td>
                        <td>{{ $t->token }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>







@endsection