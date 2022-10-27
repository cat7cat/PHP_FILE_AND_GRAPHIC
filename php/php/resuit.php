<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 判別體重如果是GET 或POST 都可以送值成功 如果沒輸入或輸入錯誤就會跳去錯誤提示 -->
<?php 
if(!empty($_GET)){
    $height=$_GET['height'];
    $weight=$_GET['weight'];
}else if(!empty($_POST)){
    $height=$_POST['height'];
    $weight=$_POST['weight'];
}else {
    echo "資料輸入錯誤,請回表單重新輸入";
    echo "<a href='./bmi.php'>回到表單</a>";
    exit(); 
}

$bmi=round($weight/(($height/100)*($height/100)),1);
// echo $bmi;
if ($bmi<18.5){
    $level="體重過輕";
} else if ($bmi<24){
    $level="健康體位";
} else if ($bmi<27){
    $level="過重";
} else if ($bmi<30){
    $level="輕度肥胖";
} else if ($bmi<35){
    $level="中度肥胖";
} else {
    $level="重度肥胖";
}




echo "<h2>您的BMI計算結果 $bmi </h2>";
echo "<div>身高為: $height </div>";
echo "<div>體重為: $weight </div>";
echo "<div>您的體位判定為: $level </div>";
?>
<a href="./bmi.php"></a>
<hr>
<a href="./bmi.php">重新測量</a>

</body>
</html>