<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tim;
use Illuminate\Http\Request;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tim'] = Tim::all();
        return view('admin.tim.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tim.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'required'
        ], [
            'nama.required' => 'Nama tim Tidak Boleh Kosong!',
            'jabatan.required' => 'Jabatan Tidak Boleh Kosong!',
            'foto.required' => 'foto Tidak Boleh Kosong!'
        ]);
        $image = $request->file('foto');
        $imageName = $image->hashName();
        $request->foto->move(public_path('tim'), $imageName);
        Tim::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $imageName
        ]);
        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.tim');
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
        $data['tim'] = Tim::find($id);
        return view('admin.tim.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tim = Tim::find($id);
        if (empty($request->foto)) {
            $tim->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan
            ]);
        } else {
            unlink(public_path('foto/' . $tim->foto));
            $image = $request->file('foto');
            $imageName = $image->hashName();
            $request->foto->move(public_path('tim'), $imageName);
            $tim->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $imageName
            ]);
        }

        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.tim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tim = Tim::find($id);
        unlink(public_path('foto/' . $tim->foto));
        $tim->delete();
        session()->flash('success', 'Berhasil Hapus Data!');
        return redirect()->route('admin.tim');
    }
}
