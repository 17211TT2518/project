<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
    <div class="container">
    <p class="maga">Magazine & Blog</p>
    <div class="row">
    
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay1.jpg" width="100%" height="350px">
            <div class="hnhn">
            <span>24</span>
            <span>JUN</span>
            </div>
        </div>
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <p style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</p>
            
            <a href="#">Read More</a>
       
    </div>
    </div>
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay3.jpg" width="100%" height="350px">
            <div class="hnhn">
            <span>24</span>
            <span>JUN</span>
            </div>
        </div>
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <p style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</p>
            
            <a href="#">Read More</a>
        
    </div>
    </div>
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay3.jpg" width="100%" height="350px">
            <div class="hnhn">
            <span>24</span>
            <span>JUN</span>
            </div>
        </div>
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <p style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</p>
            
            <a href="#">Read More</a>
        
    </div>
    </div>
</div>
</div>

</div>