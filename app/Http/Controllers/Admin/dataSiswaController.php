<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataSiswaController extends Controller
{
    public function index()
    {
        $students = DB::table('data_siswa')->select(['id', 'nism', 'fullName', 'birthDate', 'birthPlace', 'class12'])->get();
        // dd($students);
        return view('admin.siswa.index', compact(['students']));
    }

    public function show($id)
    {
        $student = DB::table('data_siswa')->where('id', '=', $id)->first();
        return view('admin.siswa.detail', compact(['student']));
    }
}
