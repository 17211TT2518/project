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
        <div class="row">
            <div class="col-md-6">
                <img src="./images/about.png" alt="responsive" style="width: 100%; height: 100%;" class="img-responsive">
            </div>
            <div class="col-md-6 content">
                <h1 class="lobor">
                    consectetur lobortis meacenas risus mi lacus cond consequat.
                </h1>
                <p class="varius">
                    Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a praesent enim libero ultrices a amet suscipit. A tempus iaculis habitasse suspendisse
                    aenean parturient blandit a rutrum leo elementum purus a a et id non feugiat donec.
                </p>
                <img src="./images/austen.png" alt="responsive" class="img-responsive logo">
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
</div>