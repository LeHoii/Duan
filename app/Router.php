<?php
namespace App;
class router {
    protected static $routes = [];
    protected $request;
    public function __construct()
    {
        $this->request = new Request;
    }

    public static function get($path,$callback)
    {
        static::$routes['get'][$path] = $callback;
    }
    public static function post($path,$callback)
    {
        static::$routes['post'][$path] = $callback;
    }

    //hàm xử lí resolve
    public function resolve()
    {
        $method = $this->request->method();
        $path = $this->request->path();
        
        $callback = static::$routes[$method][$path] ?? false;

        if ($callback===false){
            echo "404 not found";
            die;
        }
        if (is_callable($callback)){
            return $callback();
        }
        if(is_array($callback)){
            $callback[0] = new $callback[0];
            return call_user_func($callback, $this->request);
        }
    }
}