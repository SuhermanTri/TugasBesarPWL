<?php

namespace App\Models;

use CodeIgniter\Model;

class VendorModel extends Model
{
    protected $table      = 'vendor';
    protected $primaryKey = 'vendor_id';
    protected $allowedFields = ['nama_vendor','alamat','price'];
}
