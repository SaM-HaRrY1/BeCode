<?php

namespace App\Controllers;

use App\Models\modelMember;
use CodeIgniter\Controller;
class Home extends BaseController
{
    protected $modelMember;
    public function index(): string
    {
        return view('halaman/welcome');
    }
    public function dashboard(): string
    {
        return view('halaman/dashboard');
    }
    public function admin(): string
    {
        return view('halaman/admin');
    }
    public function promo(): string
    {
        return view('menu/promodash');
    }
    public function prodash(): string
    {
        return view('menu/promo');
    }

    public function __construct()
    {
        $this->modelMember = new \App\Models\modelMember();
    }

    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $email = $this->request->getPost('email');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah email atau username sudah digunakan
        if ($this->modelMember->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email sudah digunakan.');
        }

        if ($this->modelMember->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username sudah digunakan.');
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $this->modelMember->insert([
            'email' => $email,
            'username' => $username,
            'password' => $hashedPassword,
            'role' => 'user'
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
    }


    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $this->modelMember->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak terdaftar.');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah.');
        }

        // Set session user
        session()->set([
            'id_pembeli' => $user['id_pembeli'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
            'isLoggedIn' => true,
        ]);

        if ($user['role'] == 'admin') {
            
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/dashboard');
        }
    }


    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')->with('success', 'Anda telah logout.');
    }
}

