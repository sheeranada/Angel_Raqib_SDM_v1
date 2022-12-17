<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Unit;
use App\Models\Penilai;
use Illuminate\Http\Request;

class PenilaiController extends Controller
{
    public function index()
    {
        $penilai = Penilai::all();
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilai.index', compact(['penilai','unit','karyawan']));
    }

    public function create()
    {
        $penilai = penilai::all();
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilai.create', compact(['penilai','unit','karyawan']));
    }

    public function edit($id)
    {
        $penilai = penilai::find($id);
        $unit = Unit::all();
        $karyawan = Karyawan::all();
        return view('contents.penilai.edit',compact(['penilai','unit','karyawan']));
    }

    public function store(Request $request)
    {
        penilai::create(
            $request->except(['_token','submit'])
        );
        return redirect('/penilai');
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
}
