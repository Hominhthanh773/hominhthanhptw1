<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1395">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/10-1.jpg">
                            <img class="pic-2" alt="i2" src="./images/10-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Casual mini dress</a></h3>
                                         <br>
                        <div class="price">
                            $235.00
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="j1" src="./images/10-3.jpg">
                            <img class="pic-2" alt="j2" src="./images/10-4.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                        <div class="product-content">
                        <h3 class="title"><a href="#">Cotton jacket</a></h3>
                       
                        <br>
                        <div class="price">
                           $20.00
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="k1" src="./images/10-5.jpg">
                            <img class="pic-2" alt="k2" src="./images/10-6.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                     <div class="product-content">
                        <h3 class="title"><a href="#">Fancy white dress</a></h3>
                       
                        <br>
                        <div class="price">
                            $63.50
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="l1" src="./images/10-7.jpg">
                            <img class="pic-2" alt="l2" src="./images/10-8.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                    </div>
                      <div class="product-content">
                        <h3 class="title"><a href="#">Knitted jumper</a></h3>
                      
                        <br>
                        <div class="price">
                            $63.50
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/10-9.jpg">
                            <img class="pic-2" alt="i2" src="./images/10-10.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Light maxi skirt</a></h3>
                        
                        <br>
                        <div class="price">
                            $63.50
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/10-11.jpg">
                            <img class="pic-2" alt="i2" src="./images/10-12.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Long sleeve crop top</a></h3>
                        
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/10-13.jpg">
                            <img class="pic-2" alt="i2" src="./images/10-14.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Medium length coat</a></h3>
                        
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/10-15.jpg">
                            <img class="pic-2" alt="i2" src="./images/10-16.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Mini denim skirt</a></h3>
                        
                        <br>
                        <div class="price">
                            $63.50
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

