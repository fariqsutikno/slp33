<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pendaftaranUIMController extends Controller
{
    public function index(){
        $dataTasjil = DB::table('daftar_uim')->join('musyrif_daftar_uim', 'daftar_uim.musyrif_id', '=', 'musyrif_daftar_uim.id')->join('data_siswa', 'daftar_uim.siswa_id', '=', 'data_siswa.id')->select(['data_siswa.fullName', 'data_siswa.class12', 'musyrif_daftar_uim.musyrifName', 'musyrif_daftar_uim.noTelp', 'daftar_uim.*'])->get();
        return view('admin.daftarUIM.index', compact('dataTasjil'));
    }

    public function create(){
        $musyrifin = DB::table('musyrif_daftar_uim')->select('id', 'musyrifName')->get();
        $students = DB::table('data_siswa')->select('id', 'fullName', 'class12')->get();
        return view('admin.daftarUIM.create', compact(['musyrifin', 'students']));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'musyrif' => 'required',
            'student' => 'required'
        ]);

        DB::table('daftar_uim')->insert([
            'siswa_id' => $request->student,
            'musyrif_id' => $request->musyrif
        ]);
    }
}
