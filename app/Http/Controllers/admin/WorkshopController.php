<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\Workshop;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['workshop'] = Workshop::all();
        return view('admin.workshop.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'des' => 'required',
            'thumbnail' => 'required'
        ], [
            'nama.required' => 'Nama Workshop Tidak Boleh Kosong!',
            'harga.required' => 'Harga Tidak Boleh Kosong!',
            'des.required' => 'Deskripsi Tidak Boleh Kosong!',
            'thumbnail.required' => 'Thumbnail Tidak Boleh Kosong!'
        ]);
        $image = $request->file('thumbnail');
        $imageName = $image->hashName();
        $request->thumbnail->move(public_path('thumbnail'), $imageName);
        Workshop::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'des' => $request->des,
            'thumbnail' => $imageName
        ]);
        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.workshop');
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
        $data['workshop'] = Workshop::find($id);
        return view('admin.workshop.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $workshop = Workshop::find($id);
        if (empty($request->thumbnail)) {
            $workshop->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'des' => $request->des
            ]);
        } else {
            unlink(public_path('thumbnail/' . $workshop->thumbnail));
            $image = $request->file('thumbnail');
            $imageName = $image->hashName();
            $request->thumbnail->move(public_path('thumbnail'), $imageName);
            $workshop->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'des' => $request->des,
                'thumbnail' => $imageName
            ]);
        }

        session()->flash('success', 'Berhasil Simpan Data!');
        return redirect()->route('admin.workshop');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workshop = Workshop::find($id);
        unlink(public_path('thumbnail/' . $workshop->thumbnail));
        $workshop->delete();
        session()->flash('success', 'Berhasil Hapus Data!');
        return redirect()->route('admin.workshop');
    }
    public function bayar()
    {
        $data['bayar'] = Peserta::where('status', 'wait')->get();
        return view('admin.workshop.bayar', $data);
    }
    public function detail($id)
    {
        $data['bayar'] = Peserta::where('id', $id)->first();
        return view('admin.workshop.detail', $data);
    }
    public function proses(Request $request)
    {
        if ($request->status == 'tolak') {
            $request->validate([
                'status' => 'required',
                'keterangan' => 'required'
            ], [
                'status.required' => 'Status Tidak Boleh Kosong!',
                'keterangan.required' => 'Keterangan Tidak Boleh Kosong!',
            ]);
            $peserta = Peserta::find($request->kode);
            $peserta->update([
                'keterangan' => $request->keterangan,
                'status' => 'tolak'
            ]);
        }

        if ($request->status == '') {
            $request->validate([
                'status' => 'required',
            ], [
                'status.required' => 'Status Tidak Boleh Kosong!',
            ]);
            $peserta = Peserta::find($request->kode);
            $peserta->update([
                'status' => 'terima'
            ]);
        }
        $request->session()->flash('success', 'Berhasil Proses Data!');
        return redirect()->route('admin.workshop.bayar');
    }
}
