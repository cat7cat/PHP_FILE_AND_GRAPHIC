<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width',' initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>找到天干地支年的對應</H1>

<?php

echo "<H1>練習一</H1>";
    //$天干年=$a
    //$地支年=$b

    //陣列的KEY值不能重複,重複的話會被取代掉

$a=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$b=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$years=[];

for($i=0;$i<60;$i++){
    $years[$a[$i%10]][$b[$i%12]]=$i;
}
echo "</hr>";
echo "<pre>";
print_r($years);
echo "</pre>";

echo "</hr>";
echo "丁亥".$years['丁']['亥'];


echo "<H1>練習二</H1>";

$years2=[];
for($j=0;$j<60;$j++){
    $years2[$a[$j%10].$b[$j%12]]=$j;
}
echo "</hr>";
echo "<pre>";
print_r($years2);
echo "</pre>";
echo "</hr>";
echo "丁亥".$years2['丁亥'];

echo "<H1>練習三</H1>";
$years3=[];
for($k=0;$k<60;$k++){
    $years3[$k]=[$a[$k%10].$b[$k%12]];
}
echo "</hr>";
echo "<pre>";
print_r($years3);
echo "</pre>";

echo "<H1>練習四</H1>";

$years4=[];
$startYear=1024;
$inputYear=2416;

for($p=0;$p<60;$p++){
    $years4[$p]=[$a[$p%10].$b[$p%12]];
}

$years4=[];
$startYear=1024;
$inputYear=98;

for($i=0;$i<60;$i++){
    $years4[$i]=$a[$i%10].$b[$i%12];
}


// echo "<pre>";
// print_r($years4);
// echo "</pre>";

// echo "</hr>";
// echo "<pre>"; 
// print_r($years3);
// echo "</pre>";

// echo "輸入的西元{$inputyear}年份為:天干地支年的";
// echo $yeats4[($inputyear-$startyear%60)]."年";
// 輸入年份要扣掉 1024年 再去算 餘數年
echo "西元{$inputYear}年是".$years4[($inputYear-$startYear)%60]."年";

 ?>

</body>
</html>