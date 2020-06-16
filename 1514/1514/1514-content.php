<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1514">
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="your">
                    <h4>Your order</h4>
                    <div class="s1">Futuristic sunglassas <a class="so">x 1</a></div>
                    <div class="bx">
                        $25.00
                    </div>
                    <hr>
                    <div class="s1"> Coton jacket <a class="so">x 1</a></div>
                    <div class="ax">
                        Color: White
                        <br>
                        Clothing size: UK 6
                    </div>
                    <div class="bx">
                        $20.00
                    </div>
                    <hr>
                    <div class="s1">Black leather boots - 5.5 <a class="so">x 1</a></div>
                    <div class="bx">
                        $350.00
                    </div>
                    <hr>
                    <div class="s1"> Coton jacket <a class="so">x 1</a></div>
                    <div class="bx">
                        $20.00
                    </div>
                    <hr>
                    <div class="s1">Low glossy leather boots <a class="so">x 1</a></div>
                    <div class="ax">
                        Color: White
                        <br>
                        Clothing size: UK 6
                    </div>
                    <div class="bx">
                        $20.00
                    </div>
                    <hr>
                    <div class="sub">
                        Subtotal
                    </div>
                    <div class="cx">
                        $441.00
                    </div>
                    <hr>
                    <div class="sub">
                        Shipping
                    </div>
                    <div class="cx">
                        Flat rate: $20.00
                    </div>
                    <hr>
                    <div class="sub">
                        Total
                    </div>
                    <h4>$461.00 </h4>
                    <hr>

                    <form>
                        <input name="dir" type="radio" value="" /> <a class="abc">Direct bank transfer</a>
                        <p class="make">Make your payment directly into our bank account.
                            Please use your Order ID as the payment reference.
                            Your order will not be shipped until the funds have cleared in our account.</p>
                        <input name="dir" type="radio" value="" /> <a class="abc">Cash on delivery</a>
                    </form>
                    <br>
                    <form>
                        <input type="checkbox"> <a class="iha">I HAVE READ AND AGREE TO THE WEBSITE <u class="term">TERM AND CONDITIONS</u> *</a>
                    </form>
                    <br>
                    <button class="button">Place order</button>
                </div>
            </div>
        </div>
    </div>
</div>