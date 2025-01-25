<?php

namespace App\Controllers;

use App\Models\TestimoniModel;
use CodeIgniter\API\ResponseTrait;

class Testimoni extends BaseController
{
    use ResponseTrait;

    protected $testimoniModel;

    public function __construct()
    {
        $this->testimoniModel = new TestimoniModel();
    }

    public function index()
    {
        $data['testimonis'] = $this->testimoniModel->orderBy('created_at', 'DESC')->findAll();
        return view('halaman/dashboard', $data);
    }

    public function save()
    {
        $id = $this->request->getPost('id_testimoni');
        $testimoni_text = $this->request->getPost('testimoni_text');

        if (empty($testimoni_text)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Testimoni tidak boleh kosong'
            ]);
        }

        $data = [
            'id_pembeli' => session()->get('id_pembeli'),
            'testimoni_text' => $testimoni_text
        ];

        try {
            if ($id) {
                $this->testimoniModel->update($id, $data);
                $message = 'Testimoni berhasil diperbarui';
            } else {
                $this->testimoniModel->insert($data);
                $message = 'Testimoni berhasil ditambahkan';
            }

            return $this->response->setJSON([
                'status' => 'success',
                'message' => $message
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan testimoni'
            ]);
        }
    }

    public function getList()
    {
        $testimonis = $this->testimoniModel->orderBy('created_at', 'DESC')->findAll();
        return view('partials/testimoni_list', ['testimonis' => $testimonis]);
    }

    public function get($id)
    {
        $testimoni = $this->testimoniModel->find($id);
        return $this->response->setJSON($testimoni);
    }

    public function delete($id)
    {
        try {
            $this->testimoniModel->delete($id);
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Testimoni berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus testimoni'
            ]);
        }
    }
}