<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>利用date()函式的格式化參數，完成以下的日期格式呈現</h1>

<pre>
    2021/10/05
    10月5日 Tuesday
    2021-10-5 12:9:5
    2021-10-5 12:09:05
    今天是西元2021年10月5日 上班日(或假日)
</pre>   

<hr>

<?php

$date="2022/10/07 13:5:8";
echo "原始日期:".$date;
$sec=strtotime($date);

echo "<br>";
echo date("m月d日 l",$sec);
echo "<br>";
echo date("m月j日",$sec).(int)date("H",$sec).":".(int)date("i",$sec).":".(int)date("s",$sec);
echo "<br>";
echo "<br>";
echo "<br>";
echo "今天是西元".date("Y年m月j日",$sec);

echo (date('N',$sec)>5)?"假日":"工作日";

// if (date('N',$sec)>5){
//     echo "假日";
// }else{
//     echo "工作日";
// } 
?>
</body>
</html>