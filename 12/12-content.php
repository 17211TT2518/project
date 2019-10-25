<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-12">
    <div class="container">
        <div class="row">
            <div class="col-md-6 item-left">
                <div style="height: 500px;">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-3.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-4.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-5.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-7.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-8.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-9.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-10.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-22.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-111.jpg)"></div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(./images/shoes-product-3.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-4.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-5.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-7.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-8.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-9.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-10.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-22.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/shoes-product-111.jpg)"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <!-- name -->
                <div class="pro-name">
                    <h4>Yleo vestibulum</h4>
                </div>
                <!-- infor -->
                <div class="pro-inf">
                    <h4 class="price">£579.00</h4>
                    <span class="detail">Maecenas per ac facilisi ultricies nec condimentum purus sit felis parturient
                        habitant arcu ipsum eros consectetur a malesuada scelerisque lacus penatibus consectetur viverra
                        parturient vulputate magnis ante at at. Conubia sociosqu at habitasse a habitasse parturient
                        molestie enim massa ultrices vel ultrices turpis elit parturient nullam et a.</span><br><br>
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus">
                        <input type="number" step="1" min="0" max="" name="quantity" value="0" title="Qty"
                            class="input-text qty text" size="4" pattern="" inputmode="" id="input-number">
                        <input type="button" value="+" class="plus">
                    </div>
                    <div class="addCart">
                        <button type="submit" name="add to cart" class="btn-cart">ADD TO CART</button>
                    </div>
                    <div class="wishlist">
                        <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
                    </div>
                    <div class="compare">
                        <a href="#"><i class="fa fa-retweet"> Compare</i></a>
                    </div>
                    <div class="category">
                        <span class="posted_in" style="font-weight: bold">Category: <a href="#">Boots</a></span>
                    </div>
                    <div class="share">
                        <span class="share-title" style="font-weight: bold">Share: </span>
                        <ul class="social-icons">
                            <li class="social-facebook">
                                <a href="#" class=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#" class=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="social-email">
                                <a href="#" class=""><i class="fa fa-envelope"></i></a>
                            </li>
                            <li class="social-pinterest">
                                <a href="#" class=""><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li class="social-linkedin">
                                <a href="#" class=""><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>