<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table            = 'transaksi';
    protected $primaryKey       = 'no_transaksi';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pelanggan','id_iceCream'
    ];

    public function getTransaction($no_transaksi = false){
        if($no_transaksi === false) {
            return $this->findAll();
        }else {
            return $this->where('no_transaksi', $no_transaksi)->first();
        }
    }

    public function saveTransaction($data) {
        return $this->insert($data);
    }

    public function updateTransaction($no_transaksi, $data) {
        return $this->update($no_transaksi, $data);
    }

    public function deleteTransaction($no_transaksi) {
        return $this->delete($no_transaksi);
    }
}
?>