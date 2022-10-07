<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
</head>
<body>
    
<h1>九九乘法表</h1>
<?php

// 1的乘法
for ($i=1;$i<9;$i++){

echo 1;
echo "*";
echo $i;
echo "=";
echo 1*$i;
echo "<br />";
}
?>
<hr>
<?php

// 1的乘法

for ($j=1;$j<10;$j++){
    for ($i=1;$i<10;$i++){
        echo $j . "*" . $i . "=" . ($j*$i);
        echo "<br>";
    }
}

?>
<hr>
<table border=1>
 
<?php
// 9X9乘法表
for ($j=1;$j<10;$j++){
    echo "<tr>";
    for ($i=1;$i<10;$i++){
        echo "<td>";
        echo $i . "*" . $j . "=" .($i*$j);
        echo "</td>";
    }
    echo "</tr>";
}

?>

</table>
<hr>
<table border=1>
 
<?php
// 9X9乘法表

$jjj=9;
$kkk=9;
for ($j=$jjj;$j<=$jjj;$j++){
    echo "<tr>";
            for ($i=1;$i<=9;$i++){
                if($i==1){
                    echo "<td>";
                    echo ($i++);
                }else{
            echo "<td>";
            echo ($i*$j);
            echo "</td>";
    }}
    echo "</tr>";
}


?>
</table>

<h1>迴圈在生活中的範例</h1>
<li>火車時刻表</li>
<li>火車票價表</li>
<li>月曆</li>



</body>
</html>
