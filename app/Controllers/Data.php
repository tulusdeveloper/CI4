<?php

namespace App\Controllers;
use CodeIgniter\Controller;
// use \Table;

class Data extends Controller{
    public function index()
    {
        $table = new \CodeIgniter\View\Table();
        $data = [
            ['Name', 'City', 'State'],
            ['Joram', 'Nairobi', 'Kenya'],
            ['Mary', 'Eldoret', 'Kenya'],
            ['Fred', 'Mombasa', 'Kenya'],
        ];
        echo $table->generate($data);
    }
}