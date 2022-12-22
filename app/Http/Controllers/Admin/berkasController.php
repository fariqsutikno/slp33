<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class berkasController extends Controller
{
    public function index()
    {
        $documents = DB::table('data_berkas')->join('data_siswa', 'data_siswa.id', '=', 'data_berkas.siswa_id')->select('data_berkas.*', 'data_siswa.fullName', 'data_siswa.class12')->get();
        return view('admin.berkas.index', compact('documents'));
    }

    public function show($id)
    {
        $document = DB::table('data_berkas')->join('data_siswa', 'data_siswa.id', '=', 'data_berkas.siswa_id')->select('data_berkas.*', 'data_siswa.fullName', 'data_siswa.class12', 'data_siswa.nism', 'data_siswa.birthDate', 'data_siswa.fileDriveLink')->where('data_berkas.id', '=', $id)->first();
        return view('admin.berkas.detail', compact('document'));
    }

    public function update($id, Request $request)
    {
        $berkas = DB::table('data_berkas')->where('id', '=', $id)->update([
            'photoWhiteBG' => $request->photoWhiteBG,
            'KTP' => $request->KTP,
            'KTPArab' => $request->KTPArab,
            'akte' => $request->akte,
            'akteArab' => $request->akteArab,
            'KK' => $request->KK,
            'surkes' => $request->surkes,
            'surkesArab' => $request->surkesArab,
            'SKKB' => $request->SKKB,
            'tazkiyah' => $request->tazkiyah,
            'SKCK' => $request->SKCK,
            'SKCKArab' => $request->SKCKArab,
            'IjazahIM' => $request->ijazahIM,
            'IjazahMA' => $request->ijazahMA,
            'transkripIjazahIM' => $request->transkripIjazahIM,
            'transkripIjazahMA' => $request->transkripIjazahMA,
            'raporMA' => $request->raporMA,
            'raporIM' => $request->raporIM,
            'rapor1AIM' => $request->rapor1AIM,
            'rapor1BIM' => $request->rapor1BIM,
            'rapor2AIM' => $request->rapor2AIM,
            'rapor2BIM' => $request->rapor2BIM,
            'rapor3AIM' => $request->rapor3AIM,
            'rapor3BIM' => $request->rapor3BIM,
            'rapor1AMA' => $request->rapor1AMA,
            'rapor1BMA' => $request->rapor1BMA,
            'rapor2AMA' => $request->rapor2AMA,
            'rapor2BMA' => $request->rapor2BMA,
            'rapor3AMA' => $request->rapor3AMA,
            'rapor3BMA' => $request->rapor3BMA
        ]);
        $drive = DB::table('data_siswa')->where('nism', '=', $request->nism)->update([
            'fileDriveLink' => $request->fileDriveLink,
        ]);

        return redirect('/admin/berkas');
    }



        // public function update($id, Request $request)
    // {
    //     $request->validate([
    //         'photoWhiteBG' => 'nullable|file|mimes:png,jpg,jpeg|max:1000',
    //         'KTP' => 'nullable',
    //         'KTPArab' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'akte' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'akteArab' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'KK' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'surkes' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'surkesArab' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'SKKB' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'tazkiyah' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'SKCK' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'SKCKArab' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'ijazahIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'ijazahMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'transkripIjazahIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'transkripIjazahMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'raporMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'raporIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor1AIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor1BIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor2AIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor2BIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor3AIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor3BIM' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor1AMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor1BMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor2AMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor2BMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor3AMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //         'rapor3BMA' => 'nullable|file|mimetypes:application/pdf|max:1000',
    //     ]);
    //     // dd($request->all());
    //     $files = [
    //         $request->file('photoWhiteBG',
    //         $request->file('KTP'),
    //         $request->file('KTPArab'),
    //         $request->file('akte'),
    //         $request->file('akteArab'),
    //         $request->file('KK'),
    //         $request->file('surkes'),
    //         $request->file('surkesArab'),
    //         $request->file('SKKB'),
    //         $request->file('tazkiyah'),
    //         $request->file('SKCK'),
    //         $request->file('SKCKArab'),
    //         $request->file('ijazahIM'),
    //         $request->file('ijazahMA'),
    //         $request->file('transkripIjazahIM'),
    //         $request->file('transkripIjazahMA'),
    //         $request->file('raporMA'),
    //         $request->file('raporIM'),
    //         $request->file('rapor1AIM'),
    //         $request->file('rapor1BIM'),
    //         $request->file('rapor2AIM'),
    //         $request->file('rapor2BIM'),
    //         $request->file('rapor3AIM'),
    //         $request->file('rapor3BIM'),
    //         $request->file('rapor1AMA'),
    //         $request->file('rapor1BMA'),
    //         $request->file('rapor2AMA'),
    //         $request->file('rapor2BMA'),
    //         $request->file('rapor3AMA'),
    //         $request->file('rapor3BMA')
    //     ];
    //     $path = [];
    //     foreach($files as $file){
    //         if($file){
    //             $extFile = $file->extension();
    //             $nameFile = $request->class12 . ' - ' . $request->fullName . ' - ' .  md5($file->getClientOriginalName()) . '.' . $extFile;
    //             array_push($path, $file->storeAs('berkas', $nameFile));
    //         }
    //     }

    //     // dump($path);

    // }
}
