<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><h1>for迴圈</h1></p>

<?php
for($i=0; $i<=10; $i++){
    echo $i;
    echo " , ";
}
echo '<br />$i的最終值為:',$i;

?>
<p>
<H1>作業
使用for迴圈來產生以下的數列</h1></p>

<p><H2>題目一: 1,3,5,7,9……n</H2></p>
<?php
for ($p=1; $p<100;$p=$p+2 ){
    echo $p;
    echo " , ";
}

?>
<br />
<p><H2>題目二:10,20,30,40,50,60……n</H2></p>
<?php
$m=100;
for ($p=10; $p<=$m; $p=$p+10){
    echo $p . " , ";
}
?>
<p>or 另一種寫法</p>
<?php
$m=10;
for ($p=1; $p<=$m; $p++){
    echo $p*10 . " , ";
}

?>

<br />
<p><H2>題目三:請列出100內的質數 3,5,7,11,13,17……97</H2></p>
<?php
$k=100;
for($i=3;$i<=$k;$i++){
    $chk=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $chk=false;
        }
    }    
    if($chk==true){
        echo $i."=質數";
        echo " , ";
        
    }

}


?>

</body>
</html>