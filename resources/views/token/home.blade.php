@extends('layouts.theme')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">PILIH PERIODE TOKEN UJIAN</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Periode Kelas</h4>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periode as $p)
                    <tr>
                        <td>{{ $p->periode }}</td>
                        <td>{{ $p->nama_periode }}</td>
                        <td><a href="/token/list/{{ $p->periode }}" type="button" class="btn waves-effect btn-info btn-sm">
                                <i class="ti-layers-alt"></i> Buka Detail
                            </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection