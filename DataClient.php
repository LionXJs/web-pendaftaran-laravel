<?php

namespace App\Http\Controllers;
use App\Models\client;

use Illuminate\Http\Request;

class DataClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        if(strlen($katakunci)){
            $data = client::where('telepon', 'like', "%$katakunci%")
            ->orWhere('nama', 'like', "%$katakunci%")
            ->orWhere('kerusakan', 'like', "%$katakunci%")
            ->get();
        }else{
            $data = client::orderBy('telepon', 'desc')->get();
        }
        return view("tampil.index")->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tampil.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>"required",
            'telepon' => "required",
            'kerusakan' => "required"
        ],[
            'nama'=>'nama wajib diisi',
            'telepon'=>'telepon wajib diisi',
            'kerusakan'=>'kerusakan wajib diisi',
        ]);
        $data = [
            "nama"=>$request->nama,
            "telepon"=>$request->telepon,
            "kerusakan"=>$request->kerusakan
        ];
        client::create($data);
        return redirect()->to('client')->with('success', 'data succes to add');
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
        $data = client::where('telepon', $id)->first();
        return view('tampil.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>"required",
            'kerusakan' => "required"
        ],[
            'nama'=>'nama wajib diisi',
            'kerusakan'=>'kerusakan wajib diisi',
        ]);
        $data = [
            "nama"=>$request->nama,
            "kerusakan"=>$request->kerusakan
        ];
        client::where('telepon', $id)->update($data);
        return redirect()->to('client')->with('success', 'data succes to update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        client::where('telepon', $id)->delete();
        return redirect()->to('client')->with('success', 'data succed to delete');
    }
}
