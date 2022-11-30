<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table            = 'pelanggan';
    protected $primaryKey       = 'id_pelanggan';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_pelanggan','alamat','no_telp'
    ];

    public function getPelanggan($id_pelanggan = false){
        if($id === false) {
            return $this->findAll();
        }else {
            return $this->where('id_pelanggan',$id_pelanggan)->first();
        }
    }

    public function savePelanggan($data) {
        return $this->insert($data);
    }

    public function updatePelanggan($id_pelanggan, $data) {
        return $this->update($id_pelanggan, $data);
    }

    public function deletePelanggan($id_pelanggan) {
        return $this->delete($id_pelanggan);
    }
}
?>