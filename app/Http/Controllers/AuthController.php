<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //
    public function reqAuth()
    {
        return view('errors.auth', [
            'active' => 'req-auth',
            'title' => 'req-auth'
        ]);
    }
    public function login()
    {
        return view('auth.login', [
            'active' => 'login',
            'title' => 'Login'
        ]);
    }

    public function signup()
    {
        return view('auth.signup', [
            'active' => 'signup',
            'title' => 'signup'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'username_or_email' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Tentukan apakah input adalah email atau username
        $user = null;
        if (filter_var($request->input('username_or_email'), FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $request->input('username_or_email'))->first();
        } else {
            $user = User::where('username', $request->input('username_or_email'))->first();
        }
    
        // Jika user ditemukan, cek password
        if ($user) {
            if (Hash::check($request->input('password'), $user->password)) {
                // Jika password cocok, lakukan login
                Auth::login($user);
                Alert::alert('Berhasil', 'Login berhasil.', 'success');
                return redirect()->intended('/')->with('success', 'Login berhasil!');
            } else {
                // Jika password salah, kirimkan error khusus untuk password
                return back()->withErrors([
                    'password' => 'Password tidak valid.',
                ])->withInput();
            }
        } else {
            // Jika user tidak ditemukan, kirimkan error khusus untuk username/email
            return back()->withErrors([
                'username_or_email' => 'Username atau Email tidak ditemukan.',
            ])->withInput();
        }
    }
    
    

    public function logout(Request $request)
    {
        $title = 'Apakah Anda ingin Logout!';
        $text = "Pastikan semua progress sudah tersimpan!";
        confirmDelete($title, $text);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah berhasil keluar.');
    }

    public function addUser(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Confirmed akan otomatis mengecek kecocokan password dan confirm_password
        ]);

        // Jika validasi lolos, simpan user ke database
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); // Hashing password untuk keamanan
        $user->save();

        Alert::alert('Berhasil', 'Registrasi berhasil, silakan login.', 'success');
        // Redirect atau response sukses
        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }
}
