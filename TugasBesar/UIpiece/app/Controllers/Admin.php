<?php

namespace App\Controllers;

use App\Models\modelMember;

class Admin extends BaseController
{
    protected $pembeliModel;

    public function __construct()
    {
        $this->pembeliModel = new modelMember();
    }

    public function index()
    {
        $data['pembeli'] = $this->pembeliModel->findAll();
        return view('admin/user', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]|is_unique[pembeli.username]',
                'email' => 'required|valid_email|is_unique[pembeli.email]',
                'password' => 'required|min_length[6]',
                'role' => 'required|in_list[admin,user]'
            ];

            if ($this->validate($rules)) {
                $this->pembeliModel->save([
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'role' => $this->request->getPost('role')
                ]);

                return redirect()->to('/admin')->with('message', 'Data pembeli berhasil ditambahkan');
            }

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        return view('admin/create');
    }

    public function edit($id)
    {
        $data['pembeli'] = $this->pembeliModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => "required|min_length[3]|is_unique[pembeli.username,id_pembeli,$id]",
                'email' => "required|valid_email|is_unique[pembeli.email,id_pembeli,$id]",
                'role' => 'required|in_list[admin,user]'
            ];

            if ($this->validate($rules)) {
                $updateData = [
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'role' => $this->request->getPost('role')
                ];

                if ($password = $this->request->getPost('password')) {
                    $updateData['password'] = password_hash($password, PASSWORD_DEFAULT);
                }

                $this->pembeliModel->update($id, $updateData);
                return redirect()->to('/admin')->with('message', 'Data pembeli berhasil diupdate');
            }

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        return view('admin/edit', $data);
    }

    public function delete($id)
    {
        $this->pembeliModel->delete($id);
        return redirect()->to('/admin')->with('message', 'Data pembeli berhasil dihapus');
    }

    // Metode baru untuk AJAX
    public function getPembeli($id)
    {
        $pembeli = $this->pembeliModel->find($id);
        return $this->response->setJSON($pembeli);
    }

    public function updatePembeli($id)
    {
        $rules = [
            'username' => "required|min_length[3]|is_unique[pembeli.username,id_pembeli,$id]",
            'email' => "required|valid_email|is_unique[pembeli.email,id_pembeli,$id]",
            'role' => 'required|in_list[admin,user]'
        ];

        if ($this->validate($rules)) {
            $updateData = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'role' => $this->request->getPost('role')
            ];

            if ($password = $this->request->getPost('password')) {
                $updateData['password'] = password_hash($password, PASSWORD_DEFAULT);
            }

            $this->pembeliModel->update($id, $updateData);
            return $this->response->setJSON(['message' => 'Data pembeli berhasil diupdate']);
        }

        return $this->response->setJSON(['errors' => $this->validator->getErrors()], 400);
    }
}



