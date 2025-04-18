<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['bayar'] = Peserta::where('status', 'wait')->count();
        return view('admin.home', $data);
    }
}
