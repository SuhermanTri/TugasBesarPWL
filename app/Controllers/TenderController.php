<?php

namespace App\Controllers;

use App\Models\ProductModel;

class TenderController extends BaseController
{
    public function tender(): string
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();

        return view('tender', $data);
    }
}
