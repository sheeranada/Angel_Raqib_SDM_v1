<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Penilai;
use App\Models\Karyawan;
use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = Penilaian::all();
        $penilai = Penilai::all();
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilaian.index', compact(['penilai','unit','karyawan','penilaian']));
    }



    public function edit($id)
    {
        $penilaian = penilaian::find($id);
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilai.edit',compact(['penilai','unit','karyawan']));
    }

    public function store(Request $request)
    {
        Penilaian::create(
            $request->except(['_token','submit'])
        );
        return redirect('/penilaian/pilihan/');
        // dd($request);
    }

    public function update(Request $request, $id)
    {
        $penilai = penilai::find($id);
        $penilai->update($request->except(['_token','submit']));
        return redirect('/penilai');
    }

    public function destroy($id)
    {
        $penilai = penilai::find($id);
        $penilai->delete();
        return redirect('/penilai');
    }

    public function show($id)
    {
        $penilaian = Penilaian::find($id);
        $penilai = Penilai::all();
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilaian.show',compact(['penilai','unit','karyawan','penilaian']));
    }
    public function create()
    {
            $penilai = Penilai::all();
            $penilaian = Penilaian::all();
            $unit = Unit::all();
            $karyawan = Karyawan::all();
        return view('contents.penilaian.create', compact(['penilai','unit','karyawan','penilaian']));
    }

    public function skor(){
        return view('contents.penilaian.create');
     }

     public function generate(Request $request)
     {
        if($request->has('generate')) {
            $penilai = Penilai::where('kode_penilai','LIKE','%'.$request->generate.'%')->get();
        }
        else{
            $penilai = Penilai::all();
        }
        return view('contents.penilaian.form_nilai', compact(['penilai']));

    }

    public function show_hasil(Request $request)
    {
        $penilaian = Penilaian::where('kode_penilai', $request->show_hasil)
    ->leftJoin('penilai', 'penilaian.penilai_id', '=', 'penilai.id')
    ->select('penilai.kode_penilai','penilaian.*')->first();
    // dd($penilaian);
    return view('contents.penilaian.show_hasil', compact(['penilaian']));
    }

    public function pilihan()
    {
        return view('contents.penilaian.pilihan');
    }

    public function hapus($id)
    {
        $penilaian = penilaian::find($id);
        $penilaian->delete();
        return redirect('/');
    }

}

