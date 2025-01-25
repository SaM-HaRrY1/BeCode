<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // // Cek apakah user sudah login
        $session = session();
        // if (!$session->has('logged_in') || !$session->get('logged_in')) {
        //     return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        // }

        // Cek apakah user memiliki role admin
        if ($session->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada aksi setelah request
    }
}
