<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- <img src="./images/logo.png" alt="responsive" class="img-responsive logo"> -->
                    <img src="./images/5.png" alt="responsive" class="img-responsive">
                    <div class="text">
                        <h1 class="lobor">
                            consectetur lobortis meacenas risus mi lacus cond consequat.
                        </h1>
                        <p class="varius">
                            Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a
                            praesent enim libero ultrices a amet suscipit. A tempus iaculis habitasse
                        </p>
                        <div class="all-icon">
                            <a href="#"><i id="icon" class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-envelope-o" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./images/4.png" alt="responsive" class="img-responsive">
                    <div class="text">
                        <h1 class="lobor">
                            consectetur lobortis meacenas risus mi lacus cond consequat.
                        </h1>
                        <p class="varius">
                            Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a
                            praesent enim libero ultrices a amet suscipit. A tempus iaculis habitasse
                        </p>
                        <div class="all-icon">
                            <a href="#"><i id="icon" class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-envelope-o" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./images/6.png" alt="responsive" class="img-responsive">
                    <div class="text">
                        <h1 class="lobor">
                            consectetur lobortis meacenas risus mi lacus cond consequat.
                        </h1>
                        <p class="varius">
                            Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a
                            praesent enim libero ultrices a amet suscipit. A tempus iaculis habitasse
                        </p>
                        <div class="all-icon">
                            <a href="#"><i id="icon" class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-envelope-o" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="#"><i id="icon" class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
</div>