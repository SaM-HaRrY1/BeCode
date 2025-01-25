<?php

namespace App\Controllers;

use App\Models\CartModel;

class Cart extends BaseController
{
    public function index()
    {
        $cartModel = new CartModel();
        $idPembeli = session()->get('id_pembeli');

        // Validasi id_pembeli
        if (empty($idPembeli)) {
            return redirect()->to('/login')->with('error', 'Harap login terlebih dahulu.');
        }

        // Ambil data keranjang
        $data['cart'] = $cartModel->getCartItems($idPembeli);

        // Debug jika data keranjang kosong
        if (empty($data['cart'])) {
            return view('menu/cart', ['cart' => [], 'total' => 0]); // Keranjang kosong
        }

        // Hitung total harga
        $total = 0;
        foreach ($data['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $data['total'] = $total;

        return view('menu/cart', $data);
    }


    public function add()
    {
        $cartModel = new CartModel();
        $product_id = $this->request->getPost('product_id');
        $cartModel->addToCart(session()->get('id_pembeli'), $product_id);
        return redirect()->to('/cart');
    }

    public function remove($product_id)
    {
        $cartModel = new CartModel();
        $cartModel->removeFromCart(session()->get('id_pembeli'), $product_id);
        return redirect()->to('/cart');
    }

    public function clearCart()
    {
        $cartModel = new CartModel();

        // Ambil id_pembeli dari request
        $idPembeli = $this->request->getPost('id_pembeli');

        if ($cartModel->where('id_pembeli', $idPembeli)->delete()) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Keranjang berhasil dikosongkan.']);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menghapus keranjang.']);
    }
}
