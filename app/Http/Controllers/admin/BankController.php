<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['bank'] = Bank::all();
        return view('admin.bank.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'rekening' => 'required',
            'atasnama' => 'required'
        ], [
            'nama.required' => 'Nama Bank Tidak Boleh Kosong!',
            'rekening.required' => 'Nomor Rekening Tidak Boleh Kosong!',
            'atasnama.required' => 'Atas Nama tidak Boleh Kosong!'
        ]);
        Bank::create([
            'name' => $request->nama,
            'rekening' => $request->rekenig,
            'atas_nama' => $request->atasnama
        ]);
        session()->flash('success', 'Berhasil Simpan Data');
        return redirect()->route('admin.bank');
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
        $data['bank'] = Bank::find($id);
        return view('admin.bank.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bank = Bank::find($id);
        $bank->update([
            'name' => $request->nama,
            'rekening' => $request->rekenig,
            'atas_nama' => $request->atasnama
        ]);
        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.bank');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bank = Bank::find($id);
        $bank->delete();
        session()->flash('success', 'Berhasil Hapus Data!');
        return redirect()->route('admin.bank');
    }
}
