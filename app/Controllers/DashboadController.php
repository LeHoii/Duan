<?php

namespace App\Controllers;

class DashboadController extends Controllers
{
    public function index()
    {
        $title = 'Dashboard';
        $this->view('admin/Dashboard',['title'=>$title]);
    }
}
