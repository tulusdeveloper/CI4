<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Blog extends Controller{
    public function index()
    {
        $data = [
            "page_title" => "ci4",
            "page_heading" => "CI4 VIEWS",
        ];
        echo view("myview", $data);

    }
}