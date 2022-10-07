<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<H1>function 函式的使用</H1>

<!-- strpos() 返回某字元在字串中首次出現的位置 -->

<h3>字串的取代</h3>

<!-- 可以使用字的每一個字的字數用*去取代 -->
<?php 

$str="adsad342";
//第一種寫法 
$str=str_replace('a','*',$str);
$str=str_replace('d','*',$str);
$str=str_replace('s','*',$str);
$str=str_replace('3','*',$str);
$str=str_replace('4','*',$str);
$str=str_replace('2','*',$str);
//第二種寫法 
$str=str_replace(['a','d','s',3,4,2],'*',$str);
//第三種寫法 
for($i=0;$i<mb_strlen($str);$i++)
{
    echo "*";
}
echo str_repeat("*",mb_strlen($str));

echo "<HR>";

$array1=explode(",","this,is,a,book");
// 把逗號做成分割
print_r($array1); //分離
echo join(" ",$array1); //組合
echo "<HR>";

// $array2=implode(" ","this is a book");
// // 把逗號做成分割
// print_r($array2);
// echo join(" ",$array2);
// 



//第一種寫法 
$str3= "The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str3,0,10)."...";
//第二種寫法 
// echo mb_substr($str3,0,10).str_repeat(".","why");
?>
</body>
</html>