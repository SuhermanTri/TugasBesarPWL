<?php

namespace App\Controllers;

use App\Models\VendorModel;

class VendorController extends BaseController
{
    public function vendor(): string
    {
        $vendorModel = new VendorModel();
        $data['vendors'] = $vendorModel->findAll();

        return view('vendor', $data);
    }
}
