<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1478">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="class1">
                    <h5 class="ques">Questions? Call us!</h5>
                    <h3> 1- 001-234-5678 </h3>
                    <div class="class2">
                        Monday to Friday from 9am to 9pm.
                        <br>
                        <div> UK local time. International call.</div>
                        <br>
                        <br>
                        <div> Customer support</div>
                    </div>
                    <h4>info@dream-theme.com</h4>
                    <div class="class3">
                        <div>Do you have any questions?</div>

                        <div>Send us an e-mail and we will reply to you as soon as possible.</div>
                        <br>
                        <br>
                        <div>Main office address</div>
                    </div>
                    <h4>9157 Albany St. Everett, MA 02149</h4>
                    <div>Correspondence address. Please call us prior your visit.</div>
                    <br>
                    <a class="fac1">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a class="fac2">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a class="fac3">
                        <i class="fab fa-youtube-square"></i>
                    </a>
                    <a class="fac4">
                        <i class="fab fa-pinterest-square"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

    </div>
</div>