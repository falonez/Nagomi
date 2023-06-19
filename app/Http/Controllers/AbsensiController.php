<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AbsensiController extends Controller
{
    public function index()
    {

        // mengambil data dari table grade
        $grade = DB::table('tabel_grade')->get();

        // mengirim data grade ke view index
        return view('absensi.home', compact('grade'));
    }

    public function create()
    {
        return view('display.departementuser.form');
    }

    public function store()
    {
    }

    public function edit($id_grade)
    {
        $data['record'] = $id_grade;
        return view('display.departementuser.form', $data);
    }

    public function update()
    {
    }

    public function destroy($id)
    {
    }

    public function list($grade)
    {

        $pemagang = DB::table('data_pemagang')->where('grade', $grade)->get();
        $nama_g = $grade;
        // passing data pemagang yang didapat ke view list.blade.php
        return view('absensi.list', compact('pemagang', 'nama_g'));
    }
}
