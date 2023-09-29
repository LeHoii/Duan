<?php

namespace App\Controllers;

use App\Controllers\Controllers;
use App\Models\UserModels;
use App\Request;

class UserController extends Controllers
{
    public function index()
    {
        $title = "Danh sách người dùng";
        $user = UserModels::all();
        return $this->view('/admin/user/user-list', ['title' => $title, 'user' => $user]);
    }
    public function adduser()
    {
        $title = "Thêm mới người dùng";
        return $this->view('/admin/user/add-user', ['title' => $title]);
    }
    public function store(Request $request)
    {
        $data = $request->body();
        $user = UserModels::all();
        // validate form 
        if ($data['username'] == '') {
            $erros['username'] = 'Bạn chưa nhập tên tài khoản';
        }
        foreach ($user as $user) {
            if ($data['username'] == $user->username) {
                $erros['username'] = 'Tài khoản đã có người sử dụng ';
            }
        }
        if ($data['password'] == '') {
            $erros['password'] = 'Bạn chưa nhập mật khẩu';
        }
        if ($data['email'] == '') {
            $erros['email'] = 'Bạn chưa nhập email';
        }

        if ($data['email'] == $user->email) {
            $erros['email'] = 'Email đã có người sử dụng';
        }

        if (!isset($erros)) {
            // insert data và csdl
            $user  = new UserModels();
            $user->insert($data);
            header('location: ./user');
            die;
        }
        $title = "Thêm mới Người dùng";
        return $this->view(
            'admin/User/add-user',
            [
                'title' => $title,
                'erros' => $erros
            ]
        );
    }
    // public function userdetail(Request $request){
    //     $id = $_SESSION['user']['id'];
    //     $title = 'Chi tiết người dùng';
    //     $user = UserModels::find($id);
    //     return $this->view('/admin/user/User-detail', ['title' => $title, 'user' => $user]);
    // }
    public function show(Request $request)
    {
        $id = $request->body()['id'];
        $title = "Đổi mật khẩu";
        $user = UserModels::find($id);
        return $this->view('/admin/user/User-pass', ['title' => $title, 'user' => $user]);
    }
    public function update(Request $request)
    {
        $data = $request->body();
        $user = new UserModels;
        $user->update($data['id'], $data);
        header("location:./user");
    }
    public function viewRegister()
    {
        $title = 'Đăng kí';
        return $this->view('/login/register', ['title' => $title]);
    }

    public function register(Request $request)
    {
        $data = $request->body();

        if (!$data['username']) {
            $erros['username'] = 'username không được để trống';
        }
        if (!$data['email']) {
            $erros['email'] = 'email không được để trống';
        }
        if (!$data['password']) {
            $erros['password'] = 'password không được để trống';
        }

        $users = UserModels::all();
        foreach ($users as $user) {
            if ($user->username === $data['username']) {
                $erros['username'] = 'username đã tồn tại';
            }
            if ($user->email === $data['email']) {
                $erros['email'] = 'email đã có người sử dụng';
            }
        }

        if (!$erros) {
            $user = new UserModels();
            $user->insert($data);
            header('location:'.ROOT_PUBLIC.'login');
            die;
        }

        $title = 'Đăng kí';
        return $this->view('/login/register', ['title' => $title, 'erros' => $erros]);
    }

    public function viewSignIn()
    {
        if (!empty($_SESSION['user'])) {
            header('location: ./');
            die;
        }
        $title = 'Đăng nhập';
        return $this->view('/login/login', ['title' => $title]);
    }

    public function signIn(Request $request)
    {

        $data = $request->body();
        $users = UserModels::all();
        foreach ($users as $user) {
            if ($user->username !== $data['username'] || $user->password !== $data['password']) {
                $erros['signin'] = 'Tài khoản hoặc mật khẩu không đúng';
            }
            else if ($user->role == '1') {
                $user = new UserModels();
                $username = $data['username'];
                $password = $data['password'];
                $user = $user->where('username', '=', "$username")->andWhere('password', '=', "$password")->get();
                $_SESSION['user']['username'] = $user[0]->username;
                $_SESSION['user']['role'] = $user[0]->role;
                $_SESSION['user']['id'] = $user[0]->id;
                header('location: ./index-front');
                die;
            }
            else if ($user->role == '0') {
                $user = new UserModels();
                $username = $data['username'];
                $password = $data['password'];
                $user = $user->where('username', '=', "$username")->andWhere('password', '=', "$password")->get();
                $_SESSION['user']['username'] = $user[0]->username;
                $_SESSION['user']['role'] = $user[0]->role;
                $_SESSION['user']['id'] = $user[0]->id;
                header('location: ./');
                die;
            }
        }

        $title = 'Sign in';
        return $this->view('login/login', ['title' => $title, 'erros' => $erros]);
    }


    public function signOut()
    {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
        header('location: ./index-front');
    }
}
