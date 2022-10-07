<?php

$a=10;  //宣告b變數
$b=20;  //宣告b變數
$book=33;

print "a=".$a;   //印出a變數
echo "<br />";    //換行使用 <br />

print "b=".$b.$a;   //印出變數b+a
echo "<br />";    //換行使用 <br />

echo "a=".$a;    //印出a變數
echo "<br />";  //換行使用 <br />

echo "b=".$b;    //印出b變數
echo "<br />";  //換行使用 <br />

echo "book" . $book;    //印出字串book+變數數值
echo "<br/>"  ;         //換行使用 <br />
echo $c=$a*6 + $b/2;    //顯示變數的加減乘除 

echo "<br/>"  ;   //換行使用 <br />

$name="周杰倫";  //宣告 變數name 
echo "我的名字是" . $name;

$second=60*60*24;     //計算式
echo "<br />";
echo "一天有多少".$second."秒";
echo "<br />";

// 常數宣告
define("COMPANY","泰山職訓局");
echo COMPANY.$a;
echo "<br />";
echo COMPANY.$name;
echo "<br />";

// 區域變數
$d=66;
function test(){
    $d=99;
    echo $d;
}
echo "<br />";
echo $d;
echo "<br />";


//運算子
$op=false;
echo !$op;  // 真為1 假為0
echo "<br />";

$price=51;
$mod=$price%4;
$avg=($price-$mod)/4;
echo "平均每個人分".$avg;
echo "<br />";
echo "還有".$mod."元還有沒有被分配";
echo "<br />";

//陣列
//['A'=>"100"]
echo "<br />";echo "<br />";


//比較運算子 == . != . >. <=
$k=100;
$j=50;

echo "1:".$k and $j ;    //不一樣為F 不印
echo "<br />";      
echo "2:".$k == $j ;     //等於為F 不印
echo "<br />";
echo "3:".$k != $j ;     //不等於 為T 印
echo "<br />";
echo "4:".$k > $j ;      //大於為T  印
echo "<br />";
echo "5:".$k < $j ;      //小於為F  不印
echo "<br />";
echo "6:".$k <= $j ;


// 給定兩個變數 如何交換兩個變數的值
// $a=10; $b=50; 交換後 $a=50; $b=10;
// 作業
$a=10; $b=50;
$tmp=$a;
$a=$b;
$b=$tmp;
echo "變數的值交換";
echo "<br />";
echo '$a='.$a;
echo "<br />";
echo '$b='.$b;



?>
IF .....
