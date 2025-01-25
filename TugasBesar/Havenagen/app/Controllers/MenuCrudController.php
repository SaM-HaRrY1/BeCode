<?php

namespace App\Controllers;

use App\Models\ModelMenu;
use CodeIgniter\Controller;

class MenuCrudController extends Controller
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new ModelMenu();
    }

    public function index()
    {
        $data['menu'] = $this->menuModel->getAllMenu();
        return view('user/listmenu', $data);
    }

    public function create()
    {
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'jenis' => $this->request->getPost('jenis'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'foto_menu' => $this->request->getPost('foto_menu')
        ];

        $this->menuModel->insert($data);
        return redirect()->to('/listmenu');
    }

    public function edit($id)
    {
        $data = [
            'nama_menu' => $this->request->getPost('nama_menu'),
            'jenis' => $this->request->getPost('jenis'),
            'kategori' => $this->request->getPost('kategori'),
            'harga' => $this->request->getPost('harga'),
            'foto_menu' => $this->request->getPost('foto_menu')
        ];

        $this->menuModel->update($id, $data);
        return redirect()->to('/listmenu');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/listmenu');
    }
}
