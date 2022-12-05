<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\IceCreamModel;
use App\Models\TransactionModel;

use CodeIgniter\HTTP\Request;

class Order extends BaseController
{
    public function createTransaction()
    {
        $model = new pelangganModel();
        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $model->savePelanggan($data);
        return redirect()->to('http://localhost:8080/home'); 
    }
}

