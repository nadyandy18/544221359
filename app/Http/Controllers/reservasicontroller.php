<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservasi;

class reservasicontroller extends Controller
{
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $reservasi = reservasi::all();
        return view ('index')->with('reservasi',$reservasi);
    }
    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        reservasi::create($input);
        return redirect('reservasi')->with('flash_message','Reservasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservasi = reservasi::find($id);
        return view('show')->with('reservasi',$reservasi);
    }
    
    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservasi = reservasi::find($id);
        return view('edit')->with('reservasi',$reservasi);
    }
    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $reservasi = reservasi::find($id);
        $input = $request->all();
        $reservasi->update($input);
        return redirect('reservasi')->with('flash_message','Reservasi Berhasil DI Update');
    }
    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        reservasi::destroy($id);
        return redirect('reservasi')->with('flash_message','Reservasi Berhasil Dihapus');
    }
}
