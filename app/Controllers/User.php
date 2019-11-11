<?php

namespace App\Controllers;

use App\Models\User_model;
use Config\View;

class User extends BaseController
{

    public function index()
    { }

    public function registration()
    {
        helper('form');
        $data['page_title'] = 'SGD REGISTRATION';
        echo View('_Layout/home/header', $data);
        echo View('user/registration');
        echo View('_Layout/home/footer');
    }

    public function login()
    {
        helper('form');
        $data['page_title'] = 'SGD LOGIN';
        echo View('_Layout/home/header', $data);
        echo View('user/login');
        echo View('_Layout/home/footer');
    }

    public function add()
    {
        $userModel = new User_model();

        $data = [
            'user_name' => $this->request->getVar('user_name'),
            'user_password'    => $this->request->getVar('user_password')
        ];


        $userModel->insert($data);
        $lastID = $userModel->insertID();
        $user_cpmplement = [
            'id_users_fk' => $lastID,
            'name_full' => $this->request->getVar('name_full'),
            'email' => $this->request->getVar('email'),
            'fone' => $this->request->getVar('fone')
        ];

        $userModel->addcomplements($user_cpmplement);

        var_dump($user_cpmplement);
        return $lastID;
    }
}
