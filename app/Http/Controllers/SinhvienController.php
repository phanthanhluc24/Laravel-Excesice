<?php

namespace App\Http\Controllers;

use App\Models\Sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhvien=Sinhvien::all();
        return view('/Layout.index',['sinhvien'=>$sinhvien]);
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sinhvien::create($request->all());
        return redirect()->route('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $sinhvien = Sinhvien::findOrFail($id);
    return view('Layout.edit', compact('sinhvien'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $sinhvien = Sinhvien::findOrFail($id);
    $sinhvien->update($request->all());
    return redirect()->route('student');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id )
    {   
        $sinhvien = Sinhvien::findOrFail($id);
        $sinhvien->delete($request->all());
        return redirect()->route('student');
    }
}
