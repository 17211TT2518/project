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

        <!-- SALE -->
        <div id="sale">
            <div class="row">
                <div class="col-md-6 drop">
                    <div class="three-dis">
                        <ul>
                            <li class="three">
                                <a href="#" id="des">sale/</a>
                            </li>
                            <li class="three">
                                <a href="#" id="rev">terms & conditions/</a>
                            </li>
                            <li class="three">
                                <a href="#" id="ship">privacy policy</a>
                            </li>
                        </ul>
                    </div>
                    <button data-toggle="collapse" data-target="#demo">Collapsible</button>

                    <div id="demo" class="collapse">
                        Lorem ipsum dolor text....
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