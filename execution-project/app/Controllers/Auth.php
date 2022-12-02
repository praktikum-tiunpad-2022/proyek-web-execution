<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        if($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required|min_length[3]|max_length[50]',
                'password' => 'required|min_length[3]|max_length[32]|validateUser[password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'username atau password tidak sesuai'
                ]
            ];

            if(!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            }else {
                $model = new UserModel();

                $user = $model->where('username',$this->request->getVar('username'))->first();
                $this->setUserSession($user);
                session()->setFlashData('success','Login Success!');
                return redirect()->to('/home');
            }
        }
        return view('login',$data);
    }

    private function setUserSession($user) {
        $data = [
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    // public function register(){
    //     $data = [];
    //     helper(['form']);
    //     if($this->request->getMethod() == 'post') {
    //         $rules = [
    //             'username' => 'required|min_length[6]|max_length[50]',
    //             'password' => 'required|min_length[8]|max_length[32]',
    //             'password_confirm' => 'matches[password]',
    //         ];
    //         if(!$this->validate($rules)) {
    //             $data['validation'] = $this->validator;
    //         }else {
    //             $model = new UserModel();

    //             $data = [
    //                 'username' => $this->request->getVar('username'),
    //                 'password' => $this->request->getVar('password'),
    //             ];
    //             $model->save($data);
    //             session()->setFlashData('success','Register Success!');
    //             return redirect()->to('/');
    //         }
    //     }
    //     return view('register',$data);
    // }

    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}