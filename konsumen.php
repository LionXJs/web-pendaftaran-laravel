<?php

namespace App\Http\Controllers;

use App\Models\client;

use Illuminate\Http\Request;

class konsumen extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = client::count();
        return view('tampil.indexKonsumen')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tampil.createKonsumen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama"=>"required",
            "telepon"=>"required",
            "kerusakan"=>"required"
        ],[
            "nama"=>"wajib anda isi",
            "telepon"=>"wajib anda isi",
            "kerusakan"=>"wajib anda isi"
        ]);
        $data = [
            "nama"=>$request->nama,
            "telepon"=>$request->telepon,
            "kerusakan"=>$request->kerusakan
        ];
        client::create($data);
        $hitung = client::count();
        return redirect()->to('konsumen')->with("success", "nomor antrian anda adalah nomor :".$hitung);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
