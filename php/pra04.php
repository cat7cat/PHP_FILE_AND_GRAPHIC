<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫三角形</title>
</head>
<body>

<p align="center">
<h2>正三角形</h2>
<?php

for($j=1;$j<=5;$j++){
    for($i=1;$i<=$j;$i++){
        echo "＊";
    }
    echo "<br>";
}
?>

<h2>正三角形</h2>
<?php

for($j=5;$j>=1;$j--){
    for($i=5;$i>=$j;$i--){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>倒三角形</h2>
<?php

for($j=1;$j<=5;$j++){
    for($i=5;$i>=$j;$i--){
        echo "*";
    }
    echo "<br>";
}
?>

<h2>正三角形置中</h2>
<style>
    * {font-family:'Courier New',monospace}
    </style>
<?php

for($i=1;$i<=5;$i++){
    for($K=5-$i;$K>0;$K--){
            
        echo "&nbsp;";
    }

    for($j=1;$j<=($i*2-1);$j++){
            
        echo "*";
    }
    echo "<br>";
}

?>

<h2>倒菱形 </h2>
<style>
    * {font-family:'Courier New',monospace}
    </style>
<?php

for($i=1;$i<=5;$i++){
    for($K=5-$i;$K>0;$K--){
        echo "&nbsp;";
    }

    for($j=1;$j<=($i*2-1);$j++){
        echo "*";
    }
    echo "<br>";
}
for($i=1;$i<=4;$i++){
    for($K=1;$K<=$i;$K++){
        echo "&nbsp;";
    }
    for($j=1;$j<=((5-$i)*2-1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>
</p>
<p>

<h2>菱形2 縮短程式碼的寫法</h2>
<?php
$scale=9;
$scale=($scale%2==0)?$scale+1:$scale;
$mid=($scale-1)/2;
for($i=0;$i<$scale;$i++){
    if($i<=$mid){
        $spaces= $mid-$i; 
        $stars= $i*2+1;
    }else{
        $spaces= $i-$mid; 
        $stars= ($mid-$spaces)*2+1;
    }

    for($j=0;$j<$spaces;$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<$stars;$k++){
        echo "*";
    }
    echo "<br>";
}


?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</p>

</body>
</html>