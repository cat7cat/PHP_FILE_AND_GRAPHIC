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

echo "<HR>";
echo "<h1>字串函式整合應用</h1>";
$str="學會PHP網頁程式設計,薪水會加倍,工作會好找";
$sub="<span style='font-size:24px; color:red'>".$target."</span>";
$resuit=str_replace($target,$sub,$str);
echo $str."<br>";
echo $resuit."<br>";

echo join($sub,explode($target,$str));
?>
<!-- 找的字要英文國字的話 要用mb_  -->
<!-- 單引號一定是字串-->

<ul>
    <li>1.使用substring 取出字串</li>
    <li>2.用strlen計算字串長度</li>
    <li>3.用陣列處理</li>
    <li></li>
    <li></li>
</ul>

// div 是行內標籤 所以會斷行
?>




?>
</body>
</html>