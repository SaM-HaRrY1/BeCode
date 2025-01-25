<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pembeli', 'product_id', 'quantity', 'price'];

    public function getCartItems($id_pembeli)
    {
        return $this->select('produk.id as product_id, produk.name, produk.price, cart.quantity')
            ->join('produk', 'produk.id = cart.product_id')
            ->where('cart.id_pembeli', $id_pembeli)
            ->findAll();
    }

    public function addToCart($id_pembeli, $product_id)
    {
        $existingItem = $this->where(['id_pembeli' => $id_pembeli, 'product_id' => $product_id])->first();
        if ($existingItem) {
            $this->update($existingItem['id'], ['quantity' => $existingItem['quantity'] + 1]);
        } else {
            $this->insert(['id_pembeli' => $id_pembeli, 'product_id' => $product_id, 'quantity' => 1]);
        }
    }

    public function removeFromCart($id_pembeli, $product_id)
    {
        $this->where(['id_pembeli' => $id_pembeli, 'product_id' => $product_id])->delete();
    }

    public function clearCart()
    {
        $this->where('id_pembeli', session()->get('id_pembeli'))->delete();
    }

    public function getTotalPriceByBuyer()
    {
        return $this->select('id_pembeli, SUM(price * quantity) AS total_price')
            ->groupBy('id_pembeli')
            ->having('COUNT(product_id) > 1')
            ->findAll();
    }
}
