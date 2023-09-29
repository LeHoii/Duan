<?php
include_once __DIR__ . "/Header.php"
?>
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  chào mừng bạn đến cửa hàng của chúng tôi
                </h1>
                <p>
                  ...
                </p>
                <a href="">
                  Đọc thêm
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="../views/Frontend/assets/images/slider-img.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end slider section -->
</div>


<!-- product section -->

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
              <form action="./cart" method="post">
                <input type="hidden" value="<?= $product->name ?>" name="name">
                <input type="hidden" value="<?= $product->image ?>" name="image">
                <input type="hidden" value="<?= $product->Price ?>" name="Price"> 
                <a href="" class="add_cart_btn">
                  <span><input class="cart" type="submit" value="Thêm vào giỏ hàng"></span>
                </a>
              </form>
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
</section>

<!-- end product section -->

<!-- about section -->

<section class="about_section">
  <div class="container-fluid  ">
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="detail-box pr-md-3">
          <div class="heading_container">
            <h2>
              Chúng tôi cung cấp tốt nhất cho bạn
            </h2>
          </div>
          <p>
            ....
          </p>
          <a href="">
            Đọc thêm
          </a>
        </div>
      </div>
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->

<!-- why us section -->

<section class="why_us_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Tại sao chọn chúng tôi
      </h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="box ">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              CHUYỂN PHÁT NHANH
            </h5>
            <p>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box ">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              MIỄN PHÍ VẬN CHUYỂN
            </h5>
            <p>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box ">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              CHẤT LƯỢNG TỐT NHẤT
            </h5>
            <p>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- info section -->
<section class="info_section ">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="info_contact">
          <h5>
            <a href="" class="navbar-brand">
              <span>
                Minics
              </span>
            </a>
          </h5>
          <p>
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            Trịnh văn bô - hà nội
          </p>
          <p>
            <i class="fa fa-phone" aria-hidden="true"></i>
            +84 96 101 4599
          </p>
          <p>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            hoilvph28942@fpt.edu.vn
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_info">
          <h5>
            Thông tin
          </h5>
          <p>
            ...
          </p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_links">
          <h5>
            Liên kết hữu ích
          </h5>
          <ul>
            <li>
              <a href="./index-front">
                Trang chủ
              </a>
            </li>
            <li>
              <a href="./product-front">
                sản phẩm
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info_form ">
          <h5>
            Bảng tin
          </h5>
          <form action="">
            <input type="email" placeholder="Enter your email">
            <button>
              Đăng kí
            </button>
          </form>
          <div class="social_box">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info_section -->


<!-- footer section -->
<?php
include_once __DIR__ . "/Footer.php";
?>