<?php
include_once __DIR__ . "/Header.php"
?>
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card shopping-cart" style="border-radius: 15px;">
                    <div class="card-body text-black">

                        <div class="row">
                            <div class="col-lg-6 px-5 py-4">
                                <!-- <?php foreach($_SESSION['cart'] as $_SESSION['cart']):?> -->
                                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">sản phẩm của bạn</h3>
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-shrink-0">
                                        <img src="./img/<?= $_SESSION['cart']['image'] ?>" class="img-fluid" style="width: 150px;" alt="Generic placeholder image">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="text-primary"><?= $_SESSION['cart']['name'] ?></h5>
                                        <div class="d-flex align-items-center">
                                            <p class="fw-bold mb-0 me-5 pe-3"><?= $_SESSION['cart']['Price'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
                                <!-- <?php endforeach?> -->
                                <!-- <div class="d-flex justify-content-between px-x">
                  <p class="fw-bold">Discount:</p>
                  <p class="fw-bold">95$</p>
                </div> -->
                                <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                                    <h5 class="fw-bold mb-0">Tổng tiền:</h5>
                                    <h5 class="fw-bold mb-0"><?= $_SESSION['cart']['Price'] ?> Vnđ</h5>
                                </div>

                            </div>
                            <div class="col-lg-6 px-5 py-4">

                                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Địa chỉ giao hàng</h3>

                                <form class="mb-5">

                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeText">Họ và tên người nhận</label>
                                        <input name="fullname" type="text" id="typeText" class="form-control form-control-lg" siez="17" />
                                    </div>

                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeName">Địa chỉ nhận hàng</label>
                                        <input name="address" type="text" id="typeName" class="form-control form-control-lg" siez="17" />
                                    </div>
                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeName">Số điện thoại</label>
                                        <input name="phone" type="number" id="typeName" class="form-control form-control-lg" siez="17" />
                                    </div>
                                    <div class="form-outline mb-5">
                                        <label class="form-label" for="typeName">Địa chỉ email</label>
                                        <input name="email" type="email" id="typeName" class="form-control form-control-lg" siez="17" />
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Buy now</button>

                                    <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                                        <a href="#!"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                                    </h5>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once __DIR__ . "/Footer.php";
?>