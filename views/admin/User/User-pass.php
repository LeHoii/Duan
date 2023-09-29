<?php
include_once __DIR__ . "/../Header.php";
?>

<form action="" class="form-product" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục sản phẩm</label> <br>
        <label for="exampleInputEmail1">Tài khoản đang đổi: <?= $user->username ?></label> <br>
        <label for="exampleInputEmail1">Đổi mật khẩu</label> <br>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mật khẩu" name="password">
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="<?= $user->id ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Đổi chức vụ</label> <br>
        <label for="exampleInputEmail1">Admin</label>
        <input type="radio" id="exampleInputEmail1" checked="checked" aria-describedby="emailHelp" placeholder="Tên danh mục sản phẩm" name="role" value="0">
        <label for="exampleInputEmail1">user</label>
        <input type="radio" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục sản phẩm" name="role" value="1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once __DIR__ . "/../Footer.php";
?>