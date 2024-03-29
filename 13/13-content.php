<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
  <div class="container">
    <!-- Demo styles -->
  <style>
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
  <!-- Swiper -->
  <h1 style="text-align:center;">Product</h1>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay1.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay2.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay3.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay4.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay5.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay6.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay7.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay8.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay9.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
      <div class="swiper-slide">
      <figure class="card card-product">
                    <div class="img-wrap">
                    <img src="images/giay10.jpg" style="width:300px;height:300px;">
                        <ul class="font-awe">
                            <li>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <div class="hover-img">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="price-wrap">
                            <div class="wrap-swap">
                                <span class="price-new">£12.00 - £15.00</span>
                                <div class="select-option">
                                    <a href="#">🛒Select Options</a>
                                </div>
                            </div>
                            <!-- <del class="price-old">$1980</del> -->
                        </div>
                    </figcaption>
                </figure>
    </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <br>
    <br>
    <div class="swiper-button-next" style="top: 147px;right: -1px;"></div>
    <div class="swiper-button-prev" style="top: 147px;right: -1px;"></div>
  </div>

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  </div>
</div>