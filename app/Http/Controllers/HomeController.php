<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Tim;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['tim'] = Tim::all();
        $data['proyek'] = Proyek::all();
        return view('welcome', $data);
    }
}
