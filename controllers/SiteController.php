<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

//use Controller;

class SiteController extends Controller
{
    public function home()
    {
        $params = ['name' => "Eugen"];
        return $this->render('home', $params);
    }

    public function handleContact(Request $request)
    {
        return $body = $request->getBody();
    }

    public function contact()
    {
        return $this->render('contact');
    }
}
