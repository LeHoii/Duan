<?php

namespace App\Controllers;

use App\Models\BillDetailModel;
use App\Models\BillModels;
use App\Models\ProductModels;
use App\request;

class BillController extends Controllers
{
    public function index()
    {
        $title = 'Hóa đơn thanh toán';
        $bill = BillModels::all();
        $this->view('/admin/bill/Bill-list', ['bill' => $bill, 'title' => $title]);
    }
    public function billdetail(request $request)
    {
        $id = $request->body()['id'];
        $title = 'Hóa đơn thanh toán';
        $product = ProductModels::all();
        $bill = BillModels::find($id);
        $billdetail = BillDetailModel::find($id);
        $this->view('/admin/bill/Bill-detail', ['bill' => $bill, 'product' => $product, 'title' => $title, 'billdetail' => $billdetail]);
    }
    public function showcart(request $request){
        $title = 'Giỏ hàng';
        $this->view('/Frontend/cart',['title' => $title]);
    }
    public function addcart(request $request){
        $data = $request->body();
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] = [];
        }else {
            $_SESSION ['cart'] = $_SESSION['cart'];
        }
        array_push($_SESSION['cart'],$data);
        $title = 'Giỏ hàng';
        $this->view('/Frontend/cart',['title' => $title]);
    }
}
