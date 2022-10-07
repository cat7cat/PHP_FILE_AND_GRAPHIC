<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<H1>利用程式來產生陣列</H1>";
echo "<h2>九九乘法表01</h2>";
$n=9    ;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$n;$j++){
        $ninenine[$i][$j]=$i*$j;
    }
}

echo "<hr>";
echo $ninenine[6][7];
echo "<hr>";

echo "<pre>" ;//以最原始的格式輸出 純文字
print_r($ninenine);
echo "</pre>";



echo "<h2>九九乘法表02</h2>";


foreach($ninenine as $i=>$array){
    foreach($ninenine as $j=>$value){
        echo $i."x".$j."="$i*$j; ; 
    }
    }


// 生活上例子 陣列用斷行來處理  每幾個就清空 : 
// 隊伍 每家一個 每六個一行   (餘數=0就斷行)
// 百貨公司 進入人數 計數器

$break=0;
foreach($ninenine as $key => $value){
    $break++;

    echo $key;

    print_r($value); //陣列
    // echo $key."=".$value;
    echo ($break%9==0)?"<br>":'';
}

?>




</body>
</html>