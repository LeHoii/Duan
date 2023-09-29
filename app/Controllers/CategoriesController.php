<?php

namespace App\Controllers;

use App\Controllers\Controllers;
use App\Models\CategoriesModels;
use App\Models\ProductModels;
use App\request;

class CategoriesController extends Controllers
{
    public function index()
    {
        $title = 'Danh mục sản phẩm';
        $categories = CategoriesModels::all();
        $this->view('/admin/categories/categories-list', ['title' => $title, 'categories' => $categories]);
    }
    public function add()
    {
        $title = 'Thêm mới danh mục sản phẩm';
        $this->view('/admin/categories/Add-categories', ['title' => $title]);
    }
    public function store(request $request)
    {
        $data = $request->body();
        if ($data['categoryName'] == '') {
            $erros['categoryName'] = 'Bạn chưa nhập tên danh mục';
        }
        if (!isset($erros)) {
            $categories = new CategoriesModels();
            $categories->insert($data);
            header('location:./categories');
            die;
        }
        $title = "Thêm sản phẩm";
        return $this->view(
            'admin/categories/Add-categories',
            [
                'title' => $title,
                'erros' => $erros
            ]
        );
    }
    public function show(request $request)
    {
        $id = $request->body()['id'];
        $title = 'Thêm mới danh mục';
        $categories = CategoriesModels::find($id);
        $this->view('/admin/categories/update-categories', ['title' => $title, 'categories' => $categories]);
    }

    public function update(request $request)
    {
        $data = $request->body();
        $categories = new CategoriesModels;
        $categories->update($data['id'], $data);
        header('location:./categories');
        die;
    }
    public function delete(request $request)
    {
        $id = $request->body()['id'];
        $categories = new CategoriesModels();
        $categories->destroy($id);
        header('location:./categories');
    }
    public function categoriesdetail(request $request)
    {
        $id = $request->body()['id'];
        $categories = CategoriesModels::find($id);
        $product = new ProductModels();
        $products=$product->where("cate_id", "=", $id)->get();
        $title = 'Sản phẩm theo danh mục';
        $this->view('/admin/categories/detail-categori', ['title' => $title, 'products' => $products, 'categories' => $categories]);
    }
}
