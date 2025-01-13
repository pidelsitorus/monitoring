<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dokter;



class DokterController extends Controller
{
    public function index()
    {
        // Load the 'pasien' relationship for the authenticated user
        $user = Auth::user();
        $role = $user->role->name;
        // Pass the user data to the view
        return view('User.dashboard', compact('user'));
    }
}