<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TokenController extends Controller
{
    public function index()
    {

        // mengambil data dari table grade
        $periode = DB::table('tabel_periode')->get();

        // mengirim data periode ke view index
        return view('token.home', compact('periode'));
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

    public function list($periode)
    {

        $token = DB::table('tabel_token')->where('periode', $periode)->get();
        $nama_p = $periode;
        // dd($token);
        // passing data pemagang yang didapat ke view list.blade.php
        return view('token.list', compact('token', 'nama_p'));
    }
}
