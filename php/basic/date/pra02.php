<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>練習二:計算自己生日距離現在還有幾天</h1>
<hr>
<h2>
    第一種的寫法
</h2>
<?php
$birth='2022/11/7';
$now=strtotime('now');
//echo strtotimae($birth).'-'.$now;
$diff=$now-strtotime($birth);
$days=abs(floor($diff/86400));
$hours=abs(floor(($diff%86400)/3600));
$min=abs(floor(($diff%3600)/60));
$sec=abs($diff%60);

?>
<?php 
if($diff>0){
?>
<h3>我的生日 11/7 已經過了<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}else{
?>
<h3>距離我的生日 11/7 還有<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}
?>
<hr>
<h2>
    第二種的寫法
</h2>
<form action="pra02" method="get">
<input type="date" name="mybirth" id="mybirth">
<input type="submit" value="送出">
</form>
<?php
$birth=$mybirth;
$now=strtotime('now');
//echo strtotimae($birth).'-'.$now;
$diff=$now-strtotime($birth);
$days=abs(floor($diff/86400));
$hours=abs(floor(($diff%86400)/3600));
$min=abs(floor(($diff%3600)/60));
$sec=abs($diff%60);

?>
<?php 
if($diff>0){
?>
<h3>我的生日 <?=$mybirth;?> 已經過了<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}else{
?>
<h3>距離我的生日 11/7 還有<?=$days;?> 天 <?=$hours;?>小時<?=$min;?>分<?=$sec;?>秒</h3>
<?php
}
?>




</body>
</html>