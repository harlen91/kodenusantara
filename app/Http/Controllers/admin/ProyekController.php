<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['proyek'] = Proyek::all();
        return view('admin.proyek.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.proyek.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'des' => 'required',
            'foto' => 'required'
        ], [
            'nama.required' => 'Nama proyek Tidak Boleh Kosong!',
            'des.required' => 'Deskripsi Tidak Boleh Kosong!',
            'foto.required' => 'foto Tidak Boleh Kosong!'
        ]);
        $image = $request->file('foto');
        $imageName = $image->hashName();
        $request->foto->move(public_path('foto'), $imageName);
        Proyek::create([
            'nama' => $request->nama,
            'des' => $request->des,
            'foto' => $imageName
        ]);
        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.proyek');
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
        $data['proyek'] = Proyek::find($id);
        return view('admin.proyek.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyek = Proyek::find($id);
        if (empty($request->foto)) {
            $proyek->update([
                'nama' => $request->nama,
                'des' => $request->des
            ]);
        } else {
            unlink(public_path('foto/' . $proyek->foto));
            $image = $request->file('foto');
            $imageName = $image->hashName();
            $request->foto->move(public_path('foto'), $imageName);
            $proyek->update([
                'nama' => $request->nama,
                'des' => $request->des,
                'foto' => $imageName
            ]);
        }

        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.proyek');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proyek = Proyek::find($id);
        unlink(public_path('foto/' . $proyek->foto));
        $proyek->delete();
        session()->flash('success', 'Berhasil Hapus Data!');
        return redirect()->route('admin.proyek');
    }
}
