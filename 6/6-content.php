<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="container">
        <div class="row all-content">
            <div class="col-md-6 ">     
                    <h3 class="example">Subtitle text example</h3>
                    <h1 class="shoes">why our shoes ?</h1>
                    <p class="content">Cursus mollis justo dis a consectetur libero ac mollis justo quam fames.
                        Inceptos parturient convallis ut quisque morbi parturient. Vestibulum sed tincidunt.</p>
                    <p class="content-two">Vitae pulvinar ut iaculis et a condimentum morbi diam sodales non nam ut a mi praesent
                        a dignissim.Hendrerit dui condimentum eget a suspendisse ad.</p>
                <div class="btn-read">
                    <button type="button" class="btn">read more</button>
                </div>
            </div>
            <div class="col-md-6 images-two">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./images/shoes-story-1" alt="responsive" class="img-responsive" style="width: 292.5px; height: 337.5px;" >
                    </div>
                    <div class="col-md-6">
                        <img src="./images/shoes-story-2" alt="responsive"class="img-responsive" style="width: 292.5px; height: 337.5px;" >
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>