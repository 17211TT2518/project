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
                <div class="card" style="width: 18rem; z-index: 400;">
                    <div class="picture">
                        <img class="card-img-top " src="./images/2.png" alt="responsive">
                        <div class="overlay">
                            <img class="card-img-top " src="./images/1.png" alt="responsive">
                            <ul class="icons">
                                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i></li>
                                <li><i class="fa fa-search-plus" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <a class="double" href="#">Backpack double strap</a>
                    </div>
                    <div class="color">
                        <a id="money" href="#">£10.00</a>
                        <div class="blue"></div>
                        <div class="black"></div>
                        <div><a href="#" style="position: absolute; z-index: 200;"><i class="fa fa-heart-o" aria-hidden="true"></i>select option</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <div class="picture">
                        <img class="card-img-top " src="./images/5.png" alt="responsive">
                        <div class="overlay">
                            <img class="card-img-top " src="./images/9.png" alt="responsive">
                            <ul class="icons">
                                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i></li>
                                <li><i class="fa fa-search-plus" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="double">Basic contrast sneakers</a>
                    </div>
                    <div class="color">
                        <a id="money" href="#">£10.00</a>
                        <div class="pink"></div>
                        <div class="brown"></div>
                        <div class="black"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <div class="hover">
                <div class="picture">
                        <img class="card-img-top " src="./images/6.png" alt="responsive">
                        <div class="overlay">
                            <img class="card-img-top " src="./images/7.png" alt="responsive">
                            <ul class="icons">
                                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i></li>
                                <li><i class="fa fa-search-plus" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                      
                    </div>
                    <div class="card-body">
                        <a href="#" class="double">Basic knit dress chest</a>
                    </div>
                    <div class="color">
                        <a id="money" href="#">£10.00</a>
                        <div class="blue"></div>
                        <div class="green"></div>
                        <div class="yellow"></div>
                        <div class="black"></div>
                    </div>
  
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                <div class="picture">
                        <img class="card-img-top " src="./images/4.png" alt="responsive">
                        <div class="overlay">
                            <img class="card-img-top " src="./images/3.png" alt="responsive">
                            <ul class="icons">
                                <li><i class="fa fa-heart-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-refresh" aria-hidden="true"></i></li>
                                <li><i class="fa fa-search-plus" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="#" class="double">Basic Korean-style coat</a>
                    </div>
                    <div class="color">
                        <a id="money" href="#">£10.00</a>
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