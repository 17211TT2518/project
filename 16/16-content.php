<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-16">
    <div class="container">
        <div class="row">
            <div class="colum col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="images/1.png" alt="responsive" class="img-responsive">
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
                            <img src="images/2.png" alt="responsive" class="img-responsive">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="black"></div>
                        <div class="blue"></div>
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
            <div class="col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="images/9.png" alt="responsive" class="img-responsive">
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
                            <img src="images/5.png" alt="responsive" class="img-responsive">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack sneaker</a>
                        <div class="black"></div>
                        <div class="brown"></div>
                        <div class="red"></div>
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
            <div class="col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="images/7.png" alt="responsive" class="img-responsive">
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
                            <img src="images/6.png" alt="responsive" class="img-responsive">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack dress</a>
                        <div class="black"></div>
                        <div class="yellow"></div>
                        <div class="green"></div>
                        <div class="blue"></div>
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
            <div class="col-md-3 col-sm-6">
                <figure class="card card-product">
                    <div class="img-wrap">
                        <img src="images/3.png" alt="responsive" class="img-responsive">
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
                            <img src="images/4.png" alt="responsive" class="img-responsive">
                        </div>
                    </div>
                    <figcaption class="info-wrap">
                        <a href="#" class="title">Backpack double strap</a>
                        <div class="brown"></div>
                        <div class="blue"></div>
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
    </div><!-- container // -->
</div>