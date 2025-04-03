<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Peserta;
use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        $data['workshop'] = Workshop::all();
        return view('workshop.index', $data);
    }
    public function daftar($id)
    {
        $data['bank'] = Bank::all();
        $data['workshop'] = Workshop::find($id);
        return view('workshop.daftar', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'ponsel' => 'required',
            'rekening' => 'required',
            'bank' => 'required',
            'resi' => 'required'
        ], [
            'nama.required' => 'Nama Lengkap Tidak Boleh Kosong!',
            'email.required' => 'Email Tidak Boleh Kosong!',
            'email.email' => 'Format Email Tidak Sesuai',
            'ponsel.required' => 'Ponsel Tidak Boleh Kosong!',
            'rekening.required' => 'Rekening Tidak Boleh Kosong!',
            'bank.required' => 'Nama Bank Tidak Boleh Kosong!',
            'resi.required' => 'Resi Transfer Tidak Boleh Kosong!'
        ]);
        $cek = Peserta::where(['email' => $request->email, 'workshop_id' => $request->kode])->count();
        if ($cek >= 1) {
            $cari = Workshop::find($request->kode);
            $request->session()->flash('error', 'Anda Sudah Mendaftar Workshop ' . $cari->nama . "!");
            return redirect()->route('workshop');
        } else {
            $image = $request->file('resi');
            $imageName = $image->hashName();
            $request->resi->move(public_path('transfer'), $imageName);
            $kode = time();
            Peserta::create([
                'nama' => $request->nama,
                'workshop_id' => $request->kode,
                'kode' => $kode,
                'email' => $request->email,
                'ponsel' => $request->ponsel,
                'rekening' => $request->rekening,
                'nominal' => $request->harga,
                'bank' => $request->bank,
                'resi' => $imageName,
                'status' => 'wait'
            ]);
            $request->session()->flash('success', 'Anda Berhasil Terdaftar di Workshop!');
            return redirect()->route('workshop.berhasil', $kode);
        }
    }
    public function berhasil($id)
    {
        $data['peserta'] = Peserta::where('kode', $id)->first();
        return view('workshop.berhasil', $data);
    }
    public function cek($id)
    {
        $data['id'] = $id;
        return view('workshop.cek', $data);
    }
    public function proses(Request $request)
    {
        $request->validate([
            'nomor' => 'required'
        ], [
            'nomor.required' => 'Nomor Pendaftaran Tidak Boleh Kosong!'
        ]);

        $data['peserta'] = Peserta::where('kode', $request->nomor)->first();
        return view('workshop.berhasil', $data);
    }
}
