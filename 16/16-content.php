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
        <div class="row mule">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/2.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-brown">Go somewhere</a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="color">
                        <h5 class="card-title">£12.00-£15.00</h5>
                        <div class="blue"></div>
                        <div class="black"></div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/5.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-brown">Go somewhere</a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="color">
                        <h5 class="card-title">£10.00</h5>
                        <div class="pink"></div>
                        <div class="brown"></div>
                        <div class="black"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/6.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-brown">Go somewhere</a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="color">
                        <h5 class="card-title">£10.00</h5>
                        <div class="blue"></div>
                        <div class="green"></div>
                        <div class="yellow"></div>
                        <div class="black"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./images/4.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="#" class="btn btn-brown">Go somewhere</a>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="color">
                        <h5 class="card-title">£219.00</h5>
                        <div class="blue"></div>
                        <div class="brown"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="type-16">
    <div class="container">
        <div class="mule">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="card" style="width: 20rem;">
                        <img class="img-responsive" src="./images/2.png" alt="responsive">
                        <div class="card-body">
                            <a href="#" class="btn btn-light">Backpack double strap</a>
                            <div class="color">
                                <h5 class="card-title">£12.00-£15.00</h5>
                                  <div class="blue"></div>
                                <div class="black"></div>
                            
                            </div>
                            <div class="cart">
                            <a href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="select">Select options</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="card" style="width: 20rem;">
                        <img class="img-responsive" src="./images/5.png" alt="responsive">
                        <div class="card-body">
                            <a href="#" class="btn btn-light">Basic contrast sneakers</a>
                            <div class="color">
                                <h5 class="card-title">£10.00</h5>
                                <div class="black"></div>
                                <div class="brown"></div>
                                <div class="pink"></div>
                            </div>
                            <div class="cart">
                            <a href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="select">Select options</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="card" style="width: 18rem;">
                        <img class="img-responsive" src="./images/6.png" alt="responsive">
                        <div class="card-body">
                            <a href="#" class="btn btn-light">Basic knit dress chest</a>
                            <div class="color">
                                <h5 class="card-title">£10.00</h5>
                                <div class="black"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                                <div class="blue"></div>
                            </div>
                            <div class="cart">
                            <a href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="select">Select options</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="card" style="width: 18rem;">
                        <img class="img-responsive" src="./images/4.png" alt="responsive">
                        <div class="card-body">
                            <a href="#" class="btn btn-light">Basic Korean-style coat</a>
                            <div class="color">
                                <h5 class="card-title">£219.00</h5>
                                <div class="brown"></div>
                                <div class="blue"></div>
                            </div>
                            <div class="cart">
                            <a href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="select">Select options</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->