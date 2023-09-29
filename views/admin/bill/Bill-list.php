<?php
include_once __DIR__ . "/../Header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"><?=$title?></h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên Người nhận</th>
                                <th>Số điện thoại</th>
                                <th>email</th>
                                <th>Địa chỉ</th>
                                <th>Tổng số tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <?php foreach ($bill as $bill) : ?>
                                    <tr>
                                        <td><?= $bill->id ?></td>
                                        <td><?= $bill->fullname ?></td>
                                        <td><?= $bill->phone ?></td>
                                        <td><?= $bill->email ?></td>
                                        <td><?= $bill->address ?></td>
                                        <td><?= $bill->total_price ?></td>
                                        <td><?= $bill->create_at?></td>
                                        <td><?= $bill->status?></td>
                                        <td>
                                            <button class="action"><a href="./bill-detail?id=<?= $bill->id ?>">Chi tiết hóa đơn</a></button>
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
<?php
include_once __DIR__ . "/../Footer.php";
?>