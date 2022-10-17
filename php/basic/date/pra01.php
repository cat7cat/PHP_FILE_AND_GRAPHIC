<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>練習一:計算日期間隔</h1>
<h2>設有兩次日期:
<div>2022-09-10 </div>
<div>2022-10-21 </div>
請計算間隔日數: 從開始日的00:00:00開始算到結尾日的23:59:59</h2>
<?php

$a='2022-09-10';
$b='2022-10-21';
$aa=strtotime($a."0:0:0");
$bb=strtotime($b."23:59:59")+1;

$ans1=($bb-$aa)/(24*60*60);
// 除以一天的秒數 24小時*60分*60秒=86400秒
$t=strtotime("+1 days");
echo "<hr>";

echo $ans1;

echo date("d H:i:s");
echo "<br>";
echo $t;
echo "<br>";



?>

<div>包含起始日:<?= $ans1 ?> 天</div>
<div>不包含起始日:<?= $ans1 ?> 天</div>
<div>不包含結束日:<?= $ans1 ?> 天</div>


</body>
</html>