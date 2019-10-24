<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="new">
            <h1 class="newshoe">New collection shoes</h1>
            <h1 class="shoesell"><strong>Shoes best sellers</strong></h1>

            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#venenatis">VENENATIS</a></li>
                <li><a data-toggle="pill" href="#gravida">GRAVIDA</a></li>
                <li><a data-toggle="pill" href="#curabitur">CURABITUR</a></li>
            </ul>

            <div class="tab-content">
                <div id="venenatis" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-7" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-5" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                            
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-4" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-111" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-22" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-3" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="gravida" class="tab-pane fade">
                 <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-8" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-9" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                            
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-7" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-5" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-4" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-111" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="curabitur" class="tab-pane fade">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-8" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-9" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                            
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-10" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-111" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                              
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image">
                                <img class="card-img-top" src="images/shoes-product-22" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image">
                                <img class="card-img-top" src="images/shoes-product-3" alt="Card image cap">
                                <div class="overlay"> 
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </div>                               
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Yleo vestibulum</h5>
                                <p class="card-text">£ 579.00</p>
                            </div>
                        </div>
                    </div>                   
                </div>

            </div>
        </div>
    </div>
</div>