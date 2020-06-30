<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1564">
	<div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 		<div class="container-fluid">
 			<!-- Brand and toggle get grouped for better mobile display -->
                        	<div class="navbar-header navbar-center img-logo">
 				<a class="navbar-brand" href="#">
                                    <img src="images/logO.PNG" alt="logo" class="img-fluid">
 				</a>
 			</div>
 			<div class="navbar-header">
 				<div class="navbar">
  <a href="#home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Decoration 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Lighting</a>
      <a href="#">Borosil Akhand Diya</a>
      <a href="#"> Tealight holder </a>
       <a href="#">Wall Sconce Holder Pack </a>
       
      <a href="#">Tea Light Silver Candle </a>
    </div>
    
      
  </div>
     <a href="#home">Shop</a>
      <a href="#home">About</a>
        <a href="#home">Contack</a>
           <a href="#home">Blog</a>
         
</div>
 			</div>
 		
 			<div class="navbar-header navbar-right">
 				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
 				
 				<a class="navbar-brand" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <select class="currencies_src" id="currencies">
  
  
  <option data-currency="USD" selected="" value="USD">USD</option> 
  
  
  
  <option data-currency="EUR" value="EUR">EUR</option> 
  
  
  
  <option data-currency="GBP" value="GBP">GBP</option> 
  
  
  
  <option data-currency="AUD" value="AUD">AUD</option> 
  
  
  
  <option data-currency="INR" value="INR">INR</option> 
  
   
  
  <option data-currency="JPY" value="JPY">JPY</option> 
  
  
  
  <option data-currency="CAD" value="CAD">CAD</option> 
  
  
  
  <option data-currency="CNY" value="CNY">CNY</option> 
  
  
  
  <option data-currency="AED" value="AED">AED</option> 
  
  
  
  <option data-currency="RUB" value="RUB">RUB</option> 
  
</select>
                                <i class="fa fa-cog"></i>
                        </div>
                        
                        
 		</div>
            <img src="images/hinh123.PNG" alt="logo" class="img-fluid">
 	</nav>
    </div>
</div>
