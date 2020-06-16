<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1473">
    <div class="col-md-5">
        <div class="ax">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img class="img" id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
        </div>

        <div class="row">
            <div class="column">
                <img src="./images/1.jpg" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="./images/2.jpg" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="./images/3.jpg" style="width:100%" onclick="myFunction(this);">
            </div>
        </div>
    </div>
    <div class="col-md-7"></div>
</div>

<script>

$(".img").mousemove(function(event){
  
  var mousex = event.pageX - $(this).offset().left;
  var mousey = event.pageY - $(this).offset().top;
  
  var imgx = (mousex - 300) / 40;
  var imgy = (mousey - 200) / 40;
  

  $(this).css("transform", "translate(" + imgx + "px," + imgy + "px)");
});

$(".img").mouseout(function(){
  $(this).css("transform", "translate(0px,0px)");
});
</script>