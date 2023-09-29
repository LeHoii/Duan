<?php
include_once __DIR__ . "/../Frontend/Header.php"
?>
<form action="" method="post" class="loginfrom">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example1">Tên tài khoản</label>
        <input name="username" type="text" id="form2Example1" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Mật khẩu</label>
        <input name="password" type="password" id="form2Example2" class="form-control" />
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <span class="erros"><?= $erros['signin'] ?? '' ?></span>
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Nhớ tài khoản mật khẩu </label>
            </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <!-- <a href="#!">Forgot password?</a> -->
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Bạn không có tài khoản <a href="./register">Đăng kí</a></p>
    </div>
</form>
<?php
include_once __DIR__ . "/../Frontend/Footer.php"
?>