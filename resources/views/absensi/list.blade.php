@extends('layouts.theme')

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Absensi</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">

        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">GRADE {{ $nama_g }}</h4>
            <h6 class="card-subtitle">先生</h6>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Grade</th>
                            <th>Wali Kelas</th>
                            <th class="text-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($pemagang as $p)
                        <tr>
                            <td>{{ $p->nama_pemagang }}</td>
                            <td>
                                <div class="progress progress-xs margin-vertical-10 ">
                                    <div class="progress-bar bg-danger" style="width: 35% ;height:6px;"></div>
                                </div>
                            </td>
                            <td>May 15, 2015</td>
                            <td class="text-nowrap">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection