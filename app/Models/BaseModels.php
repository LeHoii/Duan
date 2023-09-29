<?php

namespace App\Models;

use PDO;
use PDOException;

class BaseModels
{
    protected $conn;
    protected $tablename;
    protected $sqlBuilder;

    // đặt tên khóa chính của bảng 
    protected $id = 'id';

    public function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=localhost;dbname=assignmentphp2;charset=utf8",
                "root",
                ""
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "có lỗi kết nốt Cở sở dữ liệu:<br>" . $e->getMessage();
        }
    }
    /**
     * * method function all
     * * lấy toàn bộ dữ liệu
     */
    public static function all()
    {
        $models = new static;
        $models->sqlBuilder = "SELECT * FROM $models->tablename";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    /*
    * method find truy cập vào 1 phần tử (1 bản ghi)
    */
    public static function find($id)
    {
        $models = new static;
        $models->sqlBuilder = "SELECT * FROM $models->tablename WHERE $models->id = $id";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if ($result) {
            return $result[0];
        } else {
            return [];
        }
    }
    /*
     * function insert: thêm 1 bản ghi vào bảng tableName
     * @arr: mảng các phần tử của cột 
     */
    public function insert($arr)
    {
        $this->sqlBuilder = "INSERT INTO $this->tablename(";
        $cols = "";
        $params = "";
        foreach ($arr as $key => $value) {
            $cols .= "`$key`, ";
            $params .= ":$key, ";
        }
        $cols = rtrim($cols, ", ");
        $params = rtrim($params, ", ");
        $this->sqlBuilder .= $cols . ") Value(" . $params . ")";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($arr);
    }
    /**
     * function cập nhật dữ liệu vào bảng table
     * @arr : mảng dữ liệu cập nhật có key và value
     */
    public function update($id,$arr)
    {
        $this-> sqlBuilder = "UPDATE $this->tablename SET ";
        foreach ($arr as $key => $value){
           $this->sqlBuilder .= "`$key`=:$key, ";
        }
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", ");
        $this->sqlBuilder .= " WHERE $this->id=:$this->id";

        // thêm id vào arr 
        $arr [$this->id] = $id;

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($arr);
    }
    public function destroy($id)
    {
        $this->sqlBuilder = "DELETE FROM $this->tablename WHERE $this->id = $id";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
    }
    /**
     * function where: tọa câu lệnh có điều kiện
     */
    public function where($columName,$condition,$value)
    {
        $this->sqlBuilder = "SELECT * FROM $this->tablename WHERE $columName $condition 
        '$value'";
        return $this;
    }
    /**
     * function and where : thêm điều kiện and vào câu lệnh
     */
    public function andwhere($columName,$condition,$value)
    {
        $this->sqlBuilder .= " AND $columName $condition '$value'";
        return $this;
    }
    /**
     *  function or where : thêm điều kiện or vào câu lệnh sql 
     */
    public function orwhere($columName,$condition,$value)
    {
        $this->sqlBuilder .= " OR $columName $condition '$value'";
        return $this;
    }
    /**
     * function get thực thi và lấy dữ liệu function câu lệnh có điều điện
     */
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt -> execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
