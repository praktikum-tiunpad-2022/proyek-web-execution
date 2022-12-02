<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'username';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username, password, level'
    ];

    public function getIceCream($id_iceCream = false){
        if($id_iceCream === false) {
            return $this->findAll();
        }else {
            return $this->where('id_iceCream',$id_iceCream)->first();
        }
    }

    public function saveUser($data) {
        return $this->insert($data);
    }

    public function deleteUser($username) {
        return $this->delete($username);
    }
}
?>