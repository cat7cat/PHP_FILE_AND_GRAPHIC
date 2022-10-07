<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>閏年判斷</title>
</head>
<body>



<?php
// 公元年分除以4 不可以整除  為平年 
$year=3200;
if(($year%4==0 && $year%100!=0) || $year%400==0){
    //true 判斷式 放一起要小心 有可能會前面為Ture 後面不一定為Ture  可參考短路求值(短路運算)
    echo $year."是閏年";
}else{
    //false
    if($year%400==0){
        echo $year."是閏年";
    }else{
        echo $year."不是閏年";
    }
}
?>


</body>
</html>