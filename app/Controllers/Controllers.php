<?php

namespace App\Controllers;

class Controllers
{
    /** function view: render giao diện
     * @date: dữ liệu gửi vào view
     * @path: đường dẫn tới view
    */ 
    public function view($path, $data = [])
    {   
        extract($data);
        include_once __DIR__ . '/../../views/' . $path . '.php';
    }
}