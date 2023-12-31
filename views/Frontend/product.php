<?php
include_once __DIR__ . "/Header.php"
?>
<section class="product_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Sản phẩm của chúng tôi
      </h2>
    </div>
    <div class="row">
      <?php foreach ($product as $product) : ?>
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="./img/<?= $product->image ?>" alt="">
              <a href="./cart" class="add_cart_btn">
                <span>
                  Thêm vào giỏ hàng
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                <?= $product->name ?>
              </h5>
              <div class="product_info">
                <h5>
                  <?= $product->Price ?><span> vnđ</span>
                </h5>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>
<?php
include_once __DIR__ . "/Footer.php";
?>