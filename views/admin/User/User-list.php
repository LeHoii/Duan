
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"><?=$title?></h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <th><button class="action"><a href="./adduser">Thêm người dùng</a></button></th>
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên Tài khoản</th>
                                <th>Mật khẩu</th>
                                <th>email</th>
                                <th>Chức vụ</th>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $user) : ?>
                                    <tr>
                                        <td><?= $user->id ?></td>
                                        <td><?= $user->username ?></td>
                                        <td><?= $user->password ?></td>
                                        <td><?= $user->email ?></td>
                                        <td><?php
                                        if($user->role== '0'){
                                            echo 'admin';
                                        }else{
                                            echo "người dùng";
                                        }
                                        ?></td>
                                        <td>
                                            <button class="action"><a href="./update-pass?id=<?= $user->id ?>">Đổi mật khẩu và role</a></button>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>