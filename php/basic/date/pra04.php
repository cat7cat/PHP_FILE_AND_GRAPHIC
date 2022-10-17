<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>利用迴圈來計算連續五個週一的日期</h1>

<p>今天是<?= date("y-m-d l" ); ?></p>
<p>接下來的連續五個週一為:</p>
<?php
for($i=1;$i<=5;$i++){
    $sec=strtotime("+".($i)."week");
    echo date ("Y-m-d l",$sec)."<br>";
}
echo "<hr>";

echo "<h3>使用N來處理</h3>";
// 用W 算出來會有問題 暫時用N 

$w=(date("N")==0)?7:date("N");

$diff=1-$w;
echo (1-1)."<br>";
echo (1-2)."<br>";
echo (1-3)."<br>";
echo (1-4)."<br>";
echo (1-5)."<br>";
echo (1-6)."<br>";
echo (1-7)."<br>";
echo $diff."<br>";

$firstDay=strtotime("+$diff days");
echo date("Y-m-d",$firstDay);
echo "<hr>";
for($i=0;$i<5;$i++){
    $sec=strtotime("+".($i+1)." week",$firstDay);
    echo date("Y-m-d l",$sec)."<br>";
}
?>
</body>
</html>