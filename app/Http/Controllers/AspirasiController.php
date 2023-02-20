<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id');
        $kategori = Kategori::all();
        $id =abs($noUrut + 1);
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'aspirasi' => $aspirasi->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'lokasi' => 'required',
            'ket' => 'required'
        ]);
    
        $data = Siswa::all()->where('id',$request->nis)->count();
        if ($data > 0) {
       
            Input_aspirasi::create([
                'id' => $request->id,
                'nis' => $request->nis,
                'lokasi' => $request->lokasi,
                'kategori_id' => $request->kategori_id,
                'ket' => $request->ket,
            ]);
            Aspirasi::create([
                'id' => $request->id,
                'id_aspirasi' => $request->id,
                'kategori_id' => $request->kategori_id,
            ]);
            return Redirect("/aspirasi?id=$request->id");
            } else{
                return Redirect("/aspirasi?nis=$request->nis");
            }
        }
    public function feedback(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['feedback' => $request->feedback]);
        return redirect('/aspirasi#aspirasi');
    }
}