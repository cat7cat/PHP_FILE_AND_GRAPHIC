<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)</h1>
<h1>例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]</h1>    
<?php

 $array=[2,4,6,1,8];
echo "原陣列 => [".join(',',$array)."]"."<br>";
 for($i=0;$i<count($array)/2;$i++){
    $t=$array[$i];
    $array[$i]=$array[count($array)-1-$i];
    $array[count($array)-1-$i]=$t;
 }


echo "反轉後 => [".join(',',$array)."]"."<br>";

// 判別如下~~
//  $i=0 ~
//  $T=$a[0]; $a[0]=$a[4] ; $a[4]=$T
//  0 => [8.4.6.1.2]

//  $i=1 ~
//  $T=$a[1]; $a[1]=$a[3] ; $a[3]=$T
//  1 => [8.1.6.4.2]

//  $i=2 ~
//  $T=$a[2]; $a[2]=$a[2] ; $a[2]=$T
//  2 => [8.1.6.4.2]

//  $i=3 ~
//  $T=$a[3]; $a[3]=$a[1] ; $a[3]=$T
//  2 => [8.4.6.1.2]

//  $i=4 ~
//  $T=$a[4]; $a[4]=$a[0] ; $a[4]=$T
//  2 => [2.4.6.1.8]

?>




</body>
</html>