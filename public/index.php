<?php
session_start();
include_once __DIR__ . "/../app/config.php";

use App\Controllers\UserController;
use App\Controllers\BillController;
use App\Controllers\CategoriesController;
use App\Controllers\ProductController;
use App\Controllers\DashboadController;
use App\Router;

include_once __DIR__ . "/../vendor/autoload.php";

$router = new Router();
Router::get('/', [DashboadController::class, 'index']);
Router::get('/product', [ProductController::class, 'index']);
Router::get('/add-product', [ProductController::class, 'addproduct']);
Router::post('/add-product', [ProductController::class, 'store']);
Router::get('/update-product', [ProductController::class, 'show']);
Router::post('/update-product', [ProductController::class, 'update']);
Router::get('/del-product', [ProductController::class, 'delete']);
Router::get('/categories', [CategoriesController::class, 'index']);
Router::get('/detail-categori', [CategoriesController::class, 'categoriesdetail']);
Router::get('/add-categories', [CategoriesController::class, 'add']);
Router::post('/add-categories', [CategoriesController::class, 'store']);
Router::get('/del-categories', [CategoriesController::class, 'delete']);
Router::get('/update-categories', [CategoriesController::class, 'show']);
Router::post('/update-categories', [CategoriesController::class, 'update']);
Router::get('/bill', [BillController::class, 'index']);
Router::get('/bill-detail', [BillController::class, 'billdetail']);
Router::get('/user',[Usercontroller::class, 'index']);
Router::get('/adduser',[Usercontroller::class, 'adduser']);
Router::post('/adduser',[Usercontroller::class, 'store']);
Router::get('/update-pass',[Usercontroller::class, 'show']);
Router::post('/update-pass',[Usercontroller::class, 'update']);
// Router::get('/user-deltail',[Usercontroller::class, 'userdetail']);
Router::get('/index-front',[ProductController::class, 'indexfront']);
Router::get('/product-front',[ProductController::class, 'productfront']);
Router::get('/login',[UserController::class, 'viewSignIn']);
Router::get('/register',[UserController::class, 'viewRegister']);
Router::post('/register',[UserController::class, 'register']);
Router::post('/login',[UserController::class, 'signIn']);
Router::get('/logout',[UserController::class, 'signOut']);
Router::get('/cart',[BillController::class, 'showcart']);
Router::post('/cart',[BillController::class, 'addcart']);
$router->resolve();
