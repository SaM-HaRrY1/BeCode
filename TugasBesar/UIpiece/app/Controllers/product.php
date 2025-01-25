<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('menu/index', $data);
    }

    public function sub($id)
    {
        $product = $this->productModel->find($id);
        return view('menu/submenu', ['product' => $product]);
    }

    public function search()
    {
        $keyword = $this->request->getGet('search');
        $products = $this->productModel->like('name', $keyword)->findAll();
        return view('menu/index', ['products' => $products, 'keyword' => $keyword]);
    }
}
