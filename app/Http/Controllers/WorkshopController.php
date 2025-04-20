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
        // $data['bank'] = Bank::all();
        $data['workshop'] = Workshop::find($id);
        return view('workshop.daftar', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'depan' => 'required',
            'belakang' => 'required',
            'email' => 'required|email',
            'ponsel' => 'required'
        ], [
            'depan.required' => 'Nama Depan Tidak Boleh Kosong!',
            'belakang.required' => 'Nama Belakang Tidak Boleh Kosong!',
            'email.required' => 'Email Tidak Boleh Kosong!',
            'email.email' => 'Format Email Tidak Sesuai',
            'ponsel.required' => 'Ponsel Tidak Boleh Kosong!'
        ]);
        $cek = Peserta::where(['email' => $request->email, 'workshop_id' => $request->kode])->count();
        if ($cek >= 1) {
            $cari = Workshop::find($request->kode);
            $request->session()->flash('error', 'Anda Sudah Mendaftar Workshop ' . $cari->nama . "!");
            return redirect()->route('workshop');
        } else {
            // $image = $request->file('resi');
            // $imageName = $image->hashName();
            // $request->resi->move(public_path('transfer'), $imageName);
            $kode = time();
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-YthVtjTKgJKqZLOBL9FPZ1u_';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $kode,
                    'gross_amount' => $request->harga,
                ),
                'customer_details' => array(
                    'first_name' => $request->depan,
                    'last_name' => $request->belakang,
                    'email' => $request->email,
                    'phone' => $request->ponsel,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            // dd($snapToken);
            Peserta::create([
                'nama_depan' => $request->depan,
                'nama_belakang' => $request->belakang,
                'workshop_id' => $request->kode,
                'kode' => $kode,
                'email' => $request->email,
                'ponsel' => $request->ponsel,
                'nominal' => $request->harga,
                'token' => $snapToken,
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
        // dd($data);
        return view('workshop.berhasil', $data);
    }
}
