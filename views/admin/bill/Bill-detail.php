<?php
include_once __DIR__ . "/../Header.php";
?>
<div class="">
    <!-- BEGIN INVOICE -->
    <div class="col-xs-12">
        <div class="grid invoice">
            <div class="grid-body">
                <div class="invoice-title">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="http://vergo-kertas.herokuapp.com/assets/img/logo.png" alt="" height="35">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2>Hóa đơn<br>
                                <span class="small">đặt hàng số#<?= $bill->id ?></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Thanh toán cho:</strong><br>
                            <!-- <?php foreach ($categories as $cate) {
                                        echo ($cate->id === $product->cate_id) ? $cate->categoryName : '';
                                    } ?> -->
                            <?= $bill->fullname ?><br>
                            <p title="Phone">Số điện thoại :<?= $bill->phone ?></p>
                            <p title="Phone">Địa chỉ email : <?= $bill->email ?></p>
                        </address>
                    </div>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Được giao đến địa chỉ</strong><br>
                        <?= $bill->address ?><br>
                        <abbr title="Phone">P:</abbr> <?= $bill->phone ?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Ngày đặt hàng:</strong><br>
                        <?= $bill->create_at ?>
                    </address>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Sản phẩm đã đặt</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr class="line">
                                    <td><strong>#</strong></td>
                                    <td class="text-center"><strong>Thông tin sản phẩm</strong></td>
                                    <td class="text-center"><strong>Số lượng</strong></td>
                                    <td class="text-right"><strong>Đơn giá</strong></td>
                                    <td class="text-right"><strong>Tổng giá</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong><?php foreach ($product as $pro) {
                                                    echo ($pro->id === $billdetail->product_id) ? $pro->name : '';
                                                } ?></strong><br>
                                                <?php foreach ($product as $pro) {
                                                    echo ($pro->id === $billdetail->product_id) ? $pro->detail : '';
                                                } ?>
                                            </td>
                                    <td class="text-center"><?=$billdetail->quantity?></td>
                                    <td class="text-center"><?php foreach ($product as $pro) {
                                                    echo ($pro->id === $billdetail->product_id) ? $pro->Price : '';
                                                } ?></td>
                                    <td class="text-right"><?=$billdetail->total_price?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END INVOICE -->
</div>
<?php
include_once __DIR__ . "/../Footer.php";
?><div class="container">