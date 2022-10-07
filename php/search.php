<H1>尋找字元</H1>
<li>給定一個字串句子</li>
<li></li>
<li></li>
<li>印出尋找到的單字或字母所在句子中的位置</li>
<div>比如:</div>
<div>$str=Today is a good day!</div>
<div>$search="i"</div>
<div>結果: i=>7;</div>
<div>如果找不到 顯示"查無結果";</div>
<?php
$str=Today is a good day!;
$search="i";
$chk=false;
$pos=0;

while($chk==false){
    if($str[$pos]==$search){
        $chk=true;
    }
    $pos=$pos+1;
}

if($chk==true){
    echo "你要找的字元是".$search;
    echo "在位置".($pos-1);
}

?>



A
B 
C

<!-- PHP 程式是 C演化來的  -->
