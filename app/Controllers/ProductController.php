<?php

namespace App\Controllers;

use App\Models\CategoriesModels;
use App\Models\Category;
use App\Models\ProductModels;
use App\Request;

class ProductController extends Controllers
{
    public function index()
    {
        $product = ProductModels::all();
        $categories = CategoriesModels::all();
        $title = 'Danh sách sản phẩm';
        return $this->view('admin/product/Product-list', ['product' => $product, 'title' => $title, 'categories' => $categories]);
    }
    public function indexfront()
    {
        $product = ProductModels::all();
        $categories = CategoriesModels::all();
        $title = 'Trang chủ';
        return $this->view('Frontend/index', ['product' => $product, 'title' => $title, 'categories' => $categories]);
    }
    public function productfront()
    {
        $product = ProductModels::all();
        $categories = CategoriesModels::all();
        $title = 'Danh sách sản phẩm';
        return $this->view('Frontend/product', ['product' => $product, 'title' => $title, 'categories' => $categories]);
    }
    public function addproduct()
    {
        $title = 'Thêm mới sản phẩm';
        $categories = CategoriesModels::all();
        return $this->view('admin/product/Add-product', ['categories' => $categories, 'title' => $title]);
    }
    public function store(request $request)
    {
        $data = $request->body();
        // validate form 
        if ($data['name'] == '') {
            $erros['name'] = 'Bạn chưa nhập tên sản phẩm';
        }
        if ($data['Price'] <= 0) {
            $erros['Price'] = 'Bạn chưa nhập giá sản phẩm';
        }
        if ($data['quantity'] <= 0) {
            $erros['quantity'] = 'Bạn chưa nhập số lượng sản phẩm';
        }
        if ($_FILES['image']['size'] > 0) {
            $image = $_FILES['image']['name'];
            $arr_img = ['jpg', 'jpeg', 'png', 'gif'];
            //lấy phẩn mở rộng của ảnh
            $ext = pathinfo($image, PATHINFO_EXTENSION);
            if (!in_array($ext, $arr_img)) {
                $erros['image'] = 'File không phải ảnh';
            }
        } else {
            $erros['image'] = 'File ảnh là bắt buộc';
        }
        if (!isset($erros)) {
            $data['image'] = $image;
            //upload lên sever
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $image);
            // insert data và csdl
            $product  = new ProductModels();
            $product->insert($data);
            header('location: ./product');
            die;
        }
        $categories = CategoriesModels::all();
        $title = "Thêm mới sản phẩm";
        return $this->view(
            'admin/product/Add-product',
            [
                'categories' => $categories,
                'title' => $title,
                'erros' => $erros
            ]
        );
    }
    public function update (Request $request){
        $data = $request->body();
        if ($_FILES['image']['size'] > 0) {
            $image = $_FILES['image']['name'];
            $data['image'] = $image;
            //upload lên sever
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $image);
        }
        $product = new ProductModels();
        $product->update($data['id'],$data);
        header("location: ./product");
        die;
    }   
    public function delete(Request $request)
    {
        $id = $request->body()['id'];
        $product = new ProductModels;
        $product->destroy($id);
        header('location: ./product');
        die;
    }
    public function show(Request $request)
    {
        $title = 'Cập nhật sản phẩm';
        $id = $request->body()['id'];
        $product = ProductModels::find($id);
        $categories = CategoriesModels::all();
        return $this->view('admin/product/Update-product', ['product' => $product, 'categories' => $categories, 'title' => $title]);
    }
}
