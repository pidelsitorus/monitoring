<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Dokter;
use App\Models\Admin;
use App\Models\Pasien;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('Admin.Auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Pastikan relasi role di-load sebelum digunakan
            $role = $user->role->name;

            if ($role === 'Admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'Dokter') {
                return redirect()->route('dokter.dashboard');
            } elseif ($role === 'Pasien') {
                return redirect()->route('pasien.dashboard');
            }

            return redirect('/')->with('error', 'Role tidak ditemukan.');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('Admin.Auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:dokter,pasien',
            'name' => 'required|string|max:255', // Menambahkan validasi untuk 'name'
            'birth_date' => 'nullable|date', // Validasi untuk tanggal lahir pada pasien
            'jenis_kelamin' => 'nullable|string|max:1', // Validasi untuk jenis kelamin pada pasien
        ]);

        // Menyimpan user terlebih dahulu
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => Role::where('name', $request->role)->first()->id,
        ]);

        // Menyimpan data pasien, dokter, atau admin sesuai role
        if ($request->role == 'pasien') {
            Pasien::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'jenis_kelamin' => $request->jenis_kelamin,
                'birth_date' => $request->birth_date,
            ]);
        } elseif ($request->role == 'dokter') {
            Dokter::create([
                'user_id' => $user->id,
                'name' => $request->name,
            ]);
        } elseif ($request->role == 'admin') {
            Admin::create([
                'user_id' => $user->id,
                'name' => $request->name,
            ]);
        }

        // Redirect ke login dengan pesan sukses
        return redirect('/login')->with('success', 'Registration successful!');
    }


    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}