<?php

namespace App\Controllers;
use App\Models\PelangganModel;
use App\Models\UserModel;

class IceCream extends BaseController
{
    public function createTransaction()
    {
        $modelTransaction = new pelangganModel();
        $data = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
        ];
        $modelTransaction->savePelanggan($data);
        return view('home');  
    }
}

