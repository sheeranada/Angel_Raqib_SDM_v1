<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Unit;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $unit = Unit::all();
        return view('contents.karyawan.index', compact(['karyawan','unit']));
    }

    public function create()
    {
        $karyawan = Karyawan::all();
        $unit = Unit::all();
        return view('contents.karyawan.create', compact(['unit','karyawan']));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        $unit = Unit::all();
        return view('contents.karyawan.edit',compact(['karyawan','unit']));
    }

    public function store(Request $request)
    {
        Karyawan::create(
            $request->except(['_token','submit'])
        );
        return redirect('/karyawan');
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->except(['_token','submit']));
        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }
}
