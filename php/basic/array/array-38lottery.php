<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>威力彩選號不重複</h1>
<?php

$a1=[];
$a2=rand(1,8);

// for($i=0;$i<6;$i++){
//     $a1[]=rand(1,38);
// }
// 判別不重複  

// 使用while迴圈  當撈出六顆球之後就不跑了

// while(count($a1)<6){
//     $num=rand(1,38);
    
    // $chk=false;
    // for($i=1;$i<=count($a1);$i++){
    //     if($a1[$i]==$num){
    //         $chk=true;
    //     }
    // }

    // if($chk==false){
    //     $a1[]=$num;
    // }

    //in_array 檢查落下的球有沒有重複
    //in_array()

    while(count($a1)<6){
        $num=rand(1,38);
    
    // if(in_array($num,$a1)){

    // } else{
    //     $a1[]=$num;
    // }
// 或
    if(!in_array($num,$a1)){
        $a1[]=$num;
    }


}

echo "<hr>";
echo "第一區:";
echo join(",",$a1);
echo "<br>";
echo "第二區:".$a2;




$num2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];

for($i=0;$i<6;$i++){
    $index=rand(0,count($num2)-1);
    $num=$num2[$index];
    $C1[]=$num;
    // unset($num1[array_search($num,$num1)]);  不能用因為值會被刪除且會重複
    // array_splice()
    array_splice($num2,array_search($num,$num2),1);
    //array_splice 取出一個值 然後刪掉N個自己後面的數值

}
echo "<hr>";
echo "第一區:";
echo join(",",$C1);
echo "<br>";
echo "第二區:".$a2;
// echo "<pre>";
// print_r($num1);
// echo "</pre>";
// echo "<hr>";



// $num7 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];

// for($j=0;$j<6;$j++){
//     $index00=rand(0,count($num7)-1);
//     $kkk00=$unm7[$index00];

// }



$num38 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38];

shuffle($num38);

$KK2=rand(1,6);
$KK1=array_slice($num38,0,6);

echo "<hr>";
echo "<h2>再次精簡</h2>"; 
echo "第一區:".join(",",array_slice($num38,0,6));
echo "<br>";
echo "第二區:".rand(1,6);




echo "<hr>";
echo "第一區:".join(",",array_slice($num38,0,6));
echo "<br>";
echo "第二區:".$KK2;

?>

</body>
</html>