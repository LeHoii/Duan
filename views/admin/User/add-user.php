<?php
include_once __DIR__ . "/../Header.php";
?>

<form action="" class="form-product" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Tên đăng nhập</label> <br>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên đăng nhập" name="username">
        <span class="erros"><?= $erros['username'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mật khẩu</label> <br>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mật khẩu" name="password">
        <span class="erros"><?= $erros['password'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label> <br>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
        <span class="erros"><?= $erros['email'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Chức vụ</label> <br>
        <input type="radio" checked ="checked" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Chức vụ" name="role" value="0">
        <label for="exampleInputEmail1">Admin</label>
        <input type="radio" class="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Chức vụ" name="role" value="1">
        <label for="exampleInputEmail1">Người dùng</label>
        <span class="erros"><?= $erros['categoryName'] ?? '' ?></span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once __DIR__ . "/../Footer.php";
?>