<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-19">
    <div class="container collas">
        <div class="three-dis">
            <ul>
                <li class="three">
                    <a href="#" id="des">sale/</a>
                </li>
                <li class="three">
                    <a href="#" id="rev">terms and conditions/</a>
                </li>
                <li class="three">
                    <a href="#" id="ship">privacy policy</a>
                </li>
            </ul>
        </div>

        <!-- SALE -->
        <div id="sale">
        <div class="row">
                <div class="col-md-6 drop">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">I haven't received my item. What can i do?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body">
                           <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ipsum ac erat cursus rutrum parturient a a nostra?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ad a dui a lacinia nec nec non volutpat?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ask">
                    <h3 class="bol">Ask a Question</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab neque fugiat ea a repellat similique, tempora molestias id assumenda commodi?
                        Dolores aspernatur ex omnis, quas pariatur eveniet unde voluptates iusto!</p>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Your Name(required)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <button type="button" class="btn">ASK A QUESTION</button>
                </div>
            </div>
        </div>
        <!-- reviews -->
        <div id="review">
        <div class="row">
                <div class="col-md-6 drop">
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">I haven't received my item. What can i do?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body">
                           <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ipsum ac erat cursus rutrum parturient a a nostra?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ad a dui a lacinia nec nec non volutpat?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ask">
                    <h3 class="bol">Ask a Question</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab neque fugiat ea a repellat similique, tempora molestias id assumenda commodi?
                        Dolores aspernatur ex omnis, quas pariatur eveniet unde voluptates iusto!</p>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Your Name(required)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <button type="button" class="btn">ASK A QUESTION</button>
                </div>
            </div>
        </div>


        <!-- shipping -->
        <div id="shipping">
            <div class="row">
                <div class="col-md-6 drop">
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">I haven't received my item. What can i do?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        </div>
                        <div class="panel-body">
                           <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ipsum ac erat cursus rutrum parturient a a nostra?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ad a dui a lacinia nec nec non volutpat?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dui nisi in cum augue adipiscing nibh taciti mollis condimentum risus?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tellus ridiculus non tempus laoreet nec diam eleifend id ullamcorper?</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <p>
                           Sed primis eu conubia erat ut nam vitae a habitant dui adipiscing a dignissim eu a ad venenatis. Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque 
                           consectetur eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                            <br>
                            <br>
                           <p>
                           Non vivamus enim himenaeos porta id morbi montes ut sem scelerisque in litora id scelerisque consectetur 
                           eget cras hac nascetur sociis in feugiat mi platea odio pretium ullamcorper.
                           </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 ask">
                    <h3 class="bol">Ask a Question</h3>
                    <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab neque fugiat ea a repellat similique, tempora molestias id assumenda commodi?
                        Dolores aspernatur ex omnis, quas pariatur eveniet unde voluptates iusto!</p>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Your Name(required)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <button type="button" class="btn">ASK A QUESTION</button>
                </div>
            </div>
        </div>
    </div>
</div>