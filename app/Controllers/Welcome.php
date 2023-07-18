<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Welcome extends Controller{
    public function index()
    {
        echo "Welcome to CI4";
    }
    public function test($name)
    {
        echo "Welcome to ".$name;
    }
    public function address($city,$country)
    {
        echo "I am from".$city." and ".$county;
    }
}