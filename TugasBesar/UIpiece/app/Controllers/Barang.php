<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class Barang extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('admin/barang', $data);
    }

    public function addProduct()
    {
        if ($this->request->isAJAX()) {
            $productModel = new ProductModel();

            // Validasi data input
            $validation = $this->validate([
                'name' => 'required|min_length[3]|max_length[255]',
                'price' => 'required|decimal',
                'stock' => 'required|integer',
                'image' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]'
            ]);

            if (!$validation) {
                return $this->response->setJSON(['status' => 'error', 'errors' => $this->validator->getErrors()]);
            }

            // Unggah gambar
            $image = $this->request->getFile('image');
            $imageName = $image->getName(); // Menggunakan nama asli gambar
            $image->move(ROOTPATH . 'public/uploads', $imageName);

            // Simpan data produk baru
            $data = [
                'name' => $this->request->getPost('name'),
                'price' => $this->request->getPost('price'),
                'stock' => $this->request->getPost('stock'),
                'kategori' => $this->request->getPost('kategori'),
                'image' => $imageName
            ];

            $productModel->save($data);

            return $this->response->setJSON(['status' => 'success', 'message' => 'Product added successfully']);
        }
    }

    public function deleteProduct($id)
    {
        if ($this->request->isAJAX()) {
            $productModel = new ProductModel();
            $productModel->delete($id);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Product deleted successfully']);
        }
    }
}
