<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll(); // Ambil semua produk dari database

        return view('index', $data);
    }
}
