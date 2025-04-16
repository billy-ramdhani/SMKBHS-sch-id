<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        // Kalau user sudah login, redirect ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('admin/auth/login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Data dummy (seharusnya nanti dari database)
        $adminUsername = 'admin';
        $adminPassword = 'admin123';

        if ($username === $adminUsername && $password === $adminPassword) {
            session()->set([
                'isLoggedIn' => true,
                'username' => $username
            ]);

            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}