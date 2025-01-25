<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\CartModel;
use App\Models\ProductModel;

class Checkout extends BaseController
{
    public function index($product_id)
    {
        $db = \Config\Database::connect();
        $user = $db->table('cart')->where('product_id', $product_id)->get()->getRow();
        
        if (!$user) {
            return redirect()->to('/')->with('error', 'User tidak ditemukan.');
        }
        
        return redirect()->to('/checkout/payment-method');
    }

    public function paymentMethod()
    {
        return view('payment/payment_method');
    }

    public function paymentInfo()
    {
        $id_pembeli = session()->get('id_pembeli'); // Mengambil id_pembeli dari session
        if (!$id_pembeli) {
            return redirect()->to('/')->with('error', 'ID Pembeli tidak ditemukan.');
        }

        $cartModel = new CartModel();
        $products = $cartModel->where('id_pembeli', $id_pembeli)->findAll();

        $data = [
            'id_pembeli' => $id_pembeli,
            'products' => $products
        ];

        return view('payment/payment_info', $data);
    }

    public function submitOrder()
    {
        $transactionModel = new TransaksiModel();
        $cartModel = new CartModel();
        $productModel = new ProductModel();

        $productIds = $this->request->getPost('product_id');
        $id_pembeli = $this->request->getPost('id_pembeli');

        log_message('info', 'Product IDs: ' . json_encode($productIds));

        foreach ($productIds as $productId) {
            $product = $productModel->find($productId); // Gunakan find() untuk mendapatkan data produk
            log_message('info', 'Product Data: ' . json_encode($product));

            if (!$product) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Produk tidak ditemukan']);
            }

            $data = [
                'id_pembeli' => $id_pembeli,
                'status' => 'pending',
                'jumlah' => $product['price'],
                'tanggal' => date('Y-m-d H:i:s')
            ];

            if (!$transactionModel->insert($data)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menyimpan data transaksi']);
            }
        }

        // Panggil fungsi clearCart untuk mengosongkan keranjang
        $cartModel->clearCart($id_pembeli);

        return $this->response->setJSON(['status' => 'success']);
    }
}
