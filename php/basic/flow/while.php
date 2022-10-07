<H1>while / do…while</H1>
<p>/*
 *和for迴圈的最大不同在於while沒有明確的次數，
 *while的條件式必須要有能明確結束的語句，否則會形成無窮迴圈
 *必要時可以在把中斷的語法寫在程式碼區段中
 */</p>

 <p>舉例:
    <li>1. 考上公務人員 考上為止</li>
    <li>2. 運動減肥到達到標準體重</li>
 </p>
<?php
 $score=44;
 while($score<60){
    $score=$score+1;
 }
 echo "成績為".$score;

 ?>
