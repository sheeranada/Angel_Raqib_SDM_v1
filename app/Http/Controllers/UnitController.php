<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $unit = Unit::all();
        return view('contents.unit.index', compact(['unit']));
    }

    public function edit($id)
    {
        $unit = Unit::find($id);
        return view('contents.unit.edit',compact(['unit']));
    }

    public function create()
    {
        $unit = Unit::all();
        return view('contents.unit.create', compact(['unit']));
    }

    public function store(Request $request)
    {
        Unit::create(
            $request->except(['_token','submit'])
        );
        return redirect('/unit');
    }

    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->update($request->except(['_token','submit']));
        return redirect('/unit');
    }

    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect('/unit');
    }

}
