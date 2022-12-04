<?php

namespace App\Models;

use CodeIgniter\Model;

class IceCreamModel extends Model
{
    protected $table            = 'iceCream';
    protected $primaryKey       = 'id_iceCream';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_iceCream','nama_iceCream','topping','tipe_harga'
    ];

    public function getIceCream($id_iceCream = false){
        if($id_iceCream === false) {
            return $this->findAll();
        }else {
            return $this->where('id_iceCream',$id_iceCream)->first();
        }
    }

    public function getIceCreamID($nama_iceCream = false) {
        if($nama_iceCream === false) {
            return 0;
        } else {
            return $this->where('nama_iceCream', $nama_iceCream)->first();
        }
    }

    public function saveIcecream($data) {
        return $this->insert($data);
    }

    public function updateIceCream($id_iceCream, $data) {
        return $this->update($id_iceCream, $data);
    }

    public function deleteIceCream($id_iceCream) {
        return $this->delete($id_iceCream);
    }
}
?>