<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>
<body>
<h1>三角形</h1>
    <?php
         for($a=0;$a<5;$a++){
            for($b=0;$b<=$a;$b++){
            echo "*";
    }echo "<br>";
    }
    ?>

<h1>倒三角形</h1>
    <?php
         for($a=0;$a<5;$a++){
            for($b=4;$b>=$a;$b--){
            echo "*";
    }echo "<br>";
    }
    ?>

<h1>正三角形(置中印空白欄位)</h1>


<style>
    * {font-family:'Courier New',monospace}
    </style>
<?php


$c=5; // 幾層

for($i=1;$i<=$c;$i++){
    for($K=$c-$i;$K>0;$K--){
        echo "q";
    }
    for($j=1;$j<=($i*2-1);$j++){
        echo "*";
    }
    echo "<br>";
}
?>


<h1>正三角形(置中印空白欄位)</h1>
<?php

$n=5;// 幾層

for($a=1;$a<=$n;$a++){
    for($b=$n-$a;$b>=1;$b--){
        echo "&nbsp;";
    }
    for($c=1;$c<=$a*2-1;$c++){
    echo "*";
    }echo "<br>";
}
?>
<h1>倒三角形(置中印空白欄位)</h1>
<?php

$n=5;// 幾層

for($a=$n;$a>=1;$a--){
    for($b=$n-$a;$b>=1;$b--){
        echo "&nbsp;";
    }
    for($c=1;$c<=$a*2-1;$c++){
    echo "*";
    }echo "<br>";
}



?>
<h1>菱形</h1>

<?php
$n=5;

for($a=1;$a<=$n;$a++){
    for($b=$n-$a;$b>=1;$b--){
        echo "&nbsp;";
    }   
    for($c=1;$c<=$a*2-1;$c++){ 
        echo "*";
    }echo "<br>";
}
for($a=$n-1;$a>=1;$a--){
    for($b=$n-$a;$b>=1;$b--){
        echo "&nbsp;";
    }   
    for($c=1;$c<=$a*2-1;$c++){ 
        echo "*";
    }echo "<br>";
}
?>
<h1>矩形</h1>
<?php

$n=7;
for($a=1;$a<=$n;$a++){
    echo "*";
    }echo "<br>";

    for($d=1;$d<=$n-2;$d++){
        for($b=1;$b<=$n-6;$b++){
        echo "*";
        }
        for($b=2;$b<=$n-1;$b++){
        echo "&nbsp;";
    }echo "*<br>";
}
 
    for($a=1;$a<=$n;$a++){
        echo "*";
        }echo "<br>";

?>
        <h1>矩形 (中間要X)</h1>
<?php

// $n=7;
// $m=$n-($n-1)
// for($a=1;$a<=$n;$a++){
//     echo "*";
//     }echo "<br>";

//     for($d=1;$d<=$n-2;$d++){
//         for($b=1;$b<=$n-6;$b++){
//         echo "*";
//         }
//         for($b=2;$b<=$n-1;$b++){
//         echo "a";
//     }echo "*<br>";
// }
 
//     for($a=1;$a<=$n;$a++){
//         echo "*";
//         }echo "<br>";
   
?>

<?php 

$n=9;
for($a=1;$a<=$n;$a++){
    for($b=1;$b<=$n;$b++){
        echo"*";

    }echo"<br>";
}


?>
<br><br><br>

</body>
</html>