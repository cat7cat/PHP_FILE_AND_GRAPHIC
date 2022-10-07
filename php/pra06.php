<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<Style>

* {
    font-family: 'Courier New', Courier, monospace;
}
    

.pic00 {
    width: 100px;  
    height: 100px; 
     background-color:"red";  /*這功能沒用 */
    border: 10px solid yellow;
    background-image: url(https://images.pexels.com/photos/7864434/pexels-photo-7864434.jpeg?auto=compress&cs=tinysrgb&w=100&h=180&dpr=1);
}

.pic01 {
    width: 100px;  
    height:  100px; 
    background-color:"green" ;  
    border: 10px solid blue;
}


</Style>
</head>
<body>
    
<?php
echo "<h1>直角三角形</h1>";
$n=5;
for ($i=0;$i<$n;$i++){
    for ($j=0;$j<=$i;$j++){
    echo"*";
    }echo "<br>";
}
?>

<?php
echo "<h1>倒直角三角形</h1>";
$n=5;
for ($i=0;$i<$n;$i++){
    for ($j=0;$j<$n-$i;$j++){
    echo"*";
    }echo "<br>";
}
?>

<?php
echo "<h1>正直角三角形</h1>";
$n=5;
for ($i=1;$i<=$n;$i++){
    for ($k=$n-$i; $k>0 ;$k--){
        echo"&nbsp;";
    }for ($j=1;$j<=$i*2-1;$j++){
    echo"*";
    }
    echo "<br>";
}
?>


<?php
echo "<h1>菱形</h1>";
$n=5;
for ($i=1;$i<=$n;$i++){
    for ($k=$n-$i; $k>0 ;$k--){
        echo"&nbsp;";
    }for ($j=1;$j<=$i*2-1;$j++){
    echo"*";
    }
    echo "<br>";
}
for ($i=1;$i<=$n-1;$i++){
    for ($k=1; $k<=$i ;$k++){
        echo"&nbsp;";
    }for ($j=1;$j<=($n-$i)*2-1;$j++){
    echo"*";
    }
    echo "<br>";
}
?>


<?php
echo "<h1>菱形</h1>";
$n= 9 ;
$n= ($n % 2 == 0) ? $n+1 : $n ;
$mid = ($n-1)/2 ;






?>









<h1>照片放進div</h1>
<div class="pic00">
    
</div>
<div>
    <img src="./img/1920x1080/1920x1920 (1).jpg" class="pic01" alt="">
</div>


</body>
</html>