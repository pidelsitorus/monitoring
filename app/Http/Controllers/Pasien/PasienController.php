<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Device;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        $pasien = Pasien::with('user')->get();
        $devices = Device::latest('timestamp')->first();

        // Jika permintaan adalah AJAX, kembalikan data dalam format JSON
        if ($request->ajax()) {
            return response()->json([
                'status' => $devices->status,
                'respiration_data' => $devices->respiration_data,
                'heart_rate_data' => $devices->heart_rate_data,
                'spo2_data' => $devices->spo2_data,
            ]);
        }

        // Jika bukan permintaan AJAX, kembalikan view
        return view('user.clients', compact('pasien', 'devices'));
    }


}