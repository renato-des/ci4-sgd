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
            'user_name' => 'darth',
            'user_password'    => 'd.vader@theempire.com'
        ];

        $userModel->insert($data);
    }
}
