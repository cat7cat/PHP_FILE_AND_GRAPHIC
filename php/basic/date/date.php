<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>日期基礎函式</h1>
<h2>date()</h2>

<?php 
date_default_timezone_set("Asia/Taipei");
echo date("西元Y年m月d日 H:i:s l");
?>


<h2>strtotime()</h2>
<?php 
$now= strtotime('now');
$now=$now+(60*60*24)*10;
echo $now;
echo "<br>";
echo date("西元Y年m月d日 H:i:s l",$now);

?>
<hr>
    <h4>天數表示
        給定兩個日期 計算中間間格天數
    舉例: 10/17~10/27</h4>
    <div>兩個日期相減+1</div>
    <?php
    $tomorrow=strtotime("+1 days");
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s",$tomorrow);
    ?>
<hr>
<h4>年表示
    <div>兩個日期相減+1</div></h4>
    <?php
    $tomorrow=strtotime("-1 year");
    echo date("Y-m-d H:i:s");
    echo "<br>";
    echo date("Y-m-d H:i:s",$tomorrow);
    echo "<br>";
    $t=date("Y-m-d",$tomorrow);
    echo $t."&nbsp;";
    echo strtotime($t)."秒";

    echo date("d")."天";
echo date("H")."時";
echo date("i")."分";
echo date("s")."秒";
    ?>
<h2>練習</h2>
<ul>
    <li><a href="./pra01.php" >練習一:計算日期間隔</a></li>
    <li><a href="./pra02.php">練習二:計算自己生日距今還有幾天</a></li>
    <li><a href="./pra03.php">練習三:利用date()函式的格式化參數，完成以下的日期格式呈現</a></li>
    <li><a href="./pra04.php">練習四</a></li>
    <li><a href="./pra05.php">練習五</a></li>
</ul>

</body>
</html>