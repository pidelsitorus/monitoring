<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::orderBy('created_at', 'DESC')->get();

        return view('hasils.index', compact('hasil'));
    }
}