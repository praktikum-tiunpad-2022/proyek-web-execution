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

    public function updateProduct()
    {
        $model = new IceCreamModel();
        $id_iceCream = $this->request->getPost('id_iceCream');
        $data = array(
            'id_iceCream' => $this->request->getPost('id_iceCream'),
            'nama_iceCream' => $this->request->getPost('nama_iceCream'),
            'topping' => $this->request->getPost('topping'),
            'tipe_harga' => $this->request->getPost('tipe_harga'),
        );
        $model->updateIceCream($data, $id_iceCream);
        return redirect()->to('http://localhost:8080/product');
    }

}

