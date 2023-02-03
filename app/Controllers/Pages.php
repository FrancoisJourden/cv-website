<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;

class Pages extends BaseController
{
    public function index()
    {
//        return view('welcome_message');
        if(isset($_GET['locale'])){
            $this->request->setLocale($_GET['locale']);
        }
        return view('main');
    }

    public function test(){
        return view('welcome_message');
    }
}
