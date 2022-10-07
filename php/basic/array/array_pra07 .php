<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旋轉陣列</title>
</head>
<body>

<h1>旋轉陣列</h1>
<h3>給定一個陣列有K個元素及旋轉N的次數,回傳旋轉完成後的陣列</h3>
<?php

$array=[3,2,1,5,6];
$n=3;
$t=0;
$k=count($array);
for($i=0;$i<$n;$i++){
    $t=$array[$k-1];
    for($j=0;$j<$K;$j++){
        $array[$k-1]=$array[$k-2];
    }
} echo $t;



?>
    
</body>
</html>