<H1>成績判斷1</H1>
<?php
$level="A";
echo "您的成績等級:".$level;
echo "<hr>";

switch($level){
case "A":
    echo "表現優良，請繼續保持";
break;
case "B":
    echo "值得肯定，還有進步空間";
break;
case "C":
    echo "需要更多的練習";
break;
case "D":
    echo "需要加強基本功";
break;
default:
    echo "資料有誤或無心學業";
}
?>

<br><hr><br>

<H1>成績判斷2</H1>
<?php
$score=40;
echo "您的成績:".$score;
echo "<hr>";

if($score < 0  || $score > 100){
    $level="Z";
}elseif($score <= 60 ){
    $level="E";
}elseif($score >= 70){
    $level="D";
}elseif($score >= 80){
    $level="C";
}elseif($score >= 90){
    $level="B";
}elseif($score <= 100){
    $level="A";
}
echo "您的成績等級:".$level;
echo "<hr>";

switch($level){
case "A":
    echo "表現優良，請繼續保持";
break;
case "B":
    echo "值得肯定，還有進步空間";
break;
case "C":
    echo "需要更多的練習";
break;
case "D":
    echo "需要加強基本功";
break;
case "E":
    echo "需要刻苦加強努力練習";
break;
default:
    echo "資料有誤?";
}
?>