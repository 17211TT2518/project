<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">

    <!--menu-->

    <div class="menu">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="brand"><img src="./images/logo-bg.png" alt="" class="img-logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li> <a href="#" id="des">Description</a></li>
                        <li> <a href="#" id="rev">Reviews(0)</a></li>
                        <li> <a href="#" id="ship">Shipping & Delivery</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
    <div class="container">
    <div class="collas">
    <div id="footwear" class="style-all">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="temp">tempus consectetur</h3>
                        <p class="dis">Ac dis vestibulum ut primis eleifend at neque at ornare mus nostra non senectus magna natoque porta scelerisque molestie taciti lobortis torquent ullamcorper a ullamcorper. Hac suspendisse varius ut et consectetur eu in nisi vestibulum consectetur ultricies in dictum consectetur
                            eu hendrerit ante tortor sagittis etiam porta scelerisque molestie ostra non senectus magna natoque .</p>
                        <p class="dis">Vestibulum volutpat inceptos augue maecenas vehicula curae fringilla ridiculus consectetur tincidunt sit suspendisse rutrum facilisis nibh id ad scelerisque feugiat. Suspendisse habitasse aenean a at enim quis in congue a vestibulum lacinia tortor nam ridiculus. Dictum consectetur eu hendrerit ante tortor
                            sagittis etiam. Hac suspendisse varius ut et consectetur eu porta scelerisque molestie.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="temp">find your sizeof</h3>
                        <div>
                            <table>
                                <tr>
                                    <th class="title">size</th>
                                    <th class="title">chest</th>
                                    <th class="title">waist</th>
                                    <th class="title">hips</th>
                                    <th class="title">height</th>
                                    <th class="title">age</th>
                                </tr>

                                <tr>
                                    <td class="number">
                                        <strong>S</strong>
                                    </td>
                                    <td class="number">6-7</td>
                                    <td class="number">64.5-66</td>
                                    <td class="number">59.5-61.5</td>
                                    <td class="number">68.5-71</td>
                                    <td class="number">122-128</td>
                                </tr>

                                <tr>
                                    <td class="number">
                                        <strong>M</strong>
                                    </td>
                                    <td class="number">8-9</td>
                                    <td class="number">66-69</td>
                                    <td class="number">61.5-65</td>
                                    <td class="number">71-74.5</td>
                                    <td class="number">128-137</td>
                                </tr>

                                <tr>

                                <tr>
                                    <td class="number">
                                        <strong>L</strong>
                                    </td>
                                    <td class="number">10-12</td>
                                    <td class="number">69-75</td>
                                    <td class="number">65-69</td>
                                    <td class="number">74.5-79.5</td>
                                    <td class="number">137-147</td>
                                </tr>
                                <td class="number">
                                    <strong>XL</strong>
                                </td>
                                <td class="number">14-16</td>
                                <td class="number">75-81.5</td>
                                <td class="number">69-72.5</td>
                                <td class="number">79.5-84.5</td>
                                <td class="number">147-158</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- reviews -->

            <div id="review" class="style-rev">
                <div class="row">
                    <div class="col-md-6 yet">
                        <h4 class="review">Reviews</h4>
                        <p class="no-yet">There are no reviews yet.</p>
                    </div>
                    <div class="col-md-6 condimen">
                        <h4 class="find">Be the first to reviews "Yparturient condimen"</h4>
                        <p class="line">Your email address will not be published. Required fields are marked</p>
                        <div class="rate">
                            <p class="line-two">Your rating:&nbsp;&nbsp;</p>
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        <p class="line">Your reviews <span>*</span></p>
                        <div class="form-group">
                            <textarea class="form-control" id="Textarea" rows="6"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name <span>*</span></p>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>Email <span>*</span></p>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check"> &nbsp;
                            <label class="save">Save my name, email, and website in this browser for the next time I comment</label>
                        </div>
                        <button type="button" class="btn-sub">SUBMIT</button>
                    </div>
                </div>
            </div>

            <!-- shipping -->
            <div id="deliver" class="style-ship">
                <div class="row">
                    <div class="col-md-3 ">
                        <img class="img-responsive" src="./images/shipping.png" alt="responsive">
                    </div>
                    <div class="col-md-9">
                        <p class="comm">Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui adipiscing
                            convallis bulum parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque adipiscing a vestibulum hendrerit et pharetra fames.Consequat net
                        </p>
                        <p class="comm">Vestibulum parturient suspendisse parturient a.Parturient in parturient scelerisque nibh lectus quam a natoque adipiscing a vestibulum hendrerit et pharetra fames.Consequat netus.</p>
                        <p class="comm">Scelerisque adipiscing bibendum sem vestibulum et in a a a purus lectus faucibus lobortis tincidunt purus lectus nisl class eros.Condimentum a et ullamcorper dictumst mus et tristique elementum nam inceptos hac vestibulum amet elit</p>
                    </div>
                </div>
            </div>
            </div>
</div>
        </div>