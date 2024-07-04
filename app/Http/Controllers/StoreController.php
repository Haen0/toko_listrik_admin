<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store; // Import model Store
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    // Method to show the store registration form
    // public function index()
    // {
    //     return view('isi.dashboard');
    // }

    public function create()
    {
        return view('isi.daftar');
    }

    public function login()
    {
        return view('isi.login');
    }

    public function loginPost(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    // Coba untuk login
    if (Auth::attempt($credentials)) {
        // Jika berhasil, redirect ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Login berhasil');
    }

    // Jika gagal, kembalikan ke halaman login dengan pesan error
    return redirect()->back()->with('error', 'Login gagal, silakan cek email dan password Anda');
}

    // Method to store the store data in the database
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required',
            'about' => 'required',
            'logo' => 'required|image', // Max size 2MB
            'street' => 'required',
            'owner' => 'required',
            'email' => 'required|email|unique:stores', // Unique email in the stores table
            'phone' => 'required',
            'password' => 'required|min:6',
        ];

        // Validate the request
        $request->validate($rules);

        // Handle file upload
        if ($request->hasFile('logo')) {
            $logoName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('logos', $logoName, 'public');
        }

        // Store the data in the database
        Store::create([
            'name' => $request->name,
            'about' => $request->about,
            'logo' => $logoName,
            'street' => $request->street,
            'owner' => $request->owner,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        // Redirect with success message
        return redirect()->route('isi.login')->with('success', 'Store registered successfully!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('isi.login')->with('success', 'Logout berhasil');
    }

    public function showProfileForm()
    {
        $store = Auth::user(); // Mengasumsikan pengguna adalah instance dari model Store
        return view('isi.profil', compact('store'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Aturan validasi
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:stores,email,' . $user->id, // Unik kecuali untuk pengguna saat ini
            'password' => 'nullable|min:6', // Kata sandi opsional
            'phone' => 'required',
        ];

        // Validasi permintaan
        $request->validate($rules);

        // Perbarui info pengguna
        $user->owner = $request->name; // Mengasumsikan field 'name' disimpan di 'owner'
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password); // Hash password using bcrypt
        }

        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Profil berhasil diperbarui!');
    }

    public function showStoreSettingsForm()
    {
        $store = Auth::user(); // Mengasumsikan pengguna adalah instance dari model Store
        return view('isi.toko', compact('store'));
    }

    public function updateStoreSettings(Request $request)
    {
        $store = Auth::user();

        // Aturan validasi
        $rules = [
            'name' => 'required',
            'street' => 'required',
            'about' => 'required',
            'logo' => 'nullable|image|max:2048', // Opsional, max 2MB
        ];

        // Validasi permintaan
        $request->validate($rules);

        // Perbarui info toko
        $store->name = $request->name;
        $store->street = $request->street;
        $store->about = $request->about;

        // Tangani unggahan file
        if ($request->hasFile('logo')) {
            $logoName = time() . '_' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('logos', $logoName, 'public');
            $store->logo = $logoName;
        }

        $store->save();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Pengaturan toko berhasil diperbarui!');
    }
}
