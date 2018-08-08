<?php
namespace App\Controller;

class HomeController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
        $this->Auth->allow(['index']);
    }


    public function isAuthorized() {
        return true;
    }

    public function index()
    {

    }

}