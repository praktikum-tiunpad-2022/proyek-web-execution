<?php

namespace App\Controllers;
// use App\Models\PelangganModel;
use App\Models\IceCreamModel;

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

    public function displayProduct()
    {
        $model = new IceCreamModel();
        $data = [
            'iceCream' => $model->getIceCream(),
        ];
        return view('product', $data);
    }

    public function editProduct($id_iceCream)
    {
        $model = new iceCreamModel();
        $data['iceCream'] = $model->getIceCream($id_iceCream)->getRow();
        return view('productEdit', $data);
    }

}

