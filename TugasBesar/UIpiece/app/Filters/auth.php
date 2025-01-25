<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika pengguna tidak login, arahkan ke halaman login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('message', 'Anda harus login terlebih dahulu.');
        }

        if ($arguments && !in_array(session()->get('role'), $arguments)) {
            return redirect()->to('/admin');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}