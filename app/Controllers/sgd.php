<?php

namespace App\Controllers;

class Sgd extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'SGD HOME';
        echo View('_Layout/home/header', $data);
        echo View('home');
        echo View('_Layout/home/footer');
    }
}
