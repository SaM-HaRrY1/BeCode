<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class NoAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        // Jika pengguna sudah login, arahkan ke halaman utama
        if ($session->get('isLoggedIn')) {
            return redirect()->to('/dashboard'); // Ganti dengan halaman utama setelah login
        }

        // Jika pengguna login dan mencoba mengakses halaman admin
       
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
