<?php
include_once __DIR__ . "/../Frontend/Header.php"
?>
<form action="" method="post" class="loginfrom">
    <div class="form-outline mb-4">
        <label class="form-label" for="registerName">Tên tài khoản</label>
        <input name="username" type="text" id="registerName" class="form-control" />
        <span class="erros"><?= $erros['username'] ?? '' ?></span>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="registerEmail">Email</label>
        <input name="email" type="email" id="registerEmail" class="form-control" />
        <span class="erros"><?= $erros['email'] ?? '' ?></span>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="registerPassword" >Mật khẩu</label>
        <input name="password" type="password" id="registerPassword" class="form-control" />
        <span class="erros"><?= $erros['password'] ?? '' ?></span>
    </div>
    <button type="submit" class="btn btn-primary btn-block mb-3">Đăng kí</button>
    <div class="form-check d-flex justify-content-center mb-4">
    <span>Bạn đã có tài khoản <a href="./login"> Đăng nhập</a></span>
    </div>
</form>
<?php
include_once __DIR__ . "/../Frontend/Footer.php"
?>