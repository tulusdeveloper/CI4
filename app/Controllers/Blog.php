<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Blog extends Controller{
    public function index()
    {
        $data = [
            "page_title" => "ci4",
            "page_heading" => "CI4 VIEWS",
            "subject" => ['HTML','CSS','BOOTSTRAP','JAVASCRIPT','AJAX','JSON','JQUERRY','PHP','MYSQL','CODEIGNITER','LARAVEL']
        ];
        echo view("myview", $data);

    }
}