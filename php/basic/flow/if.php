
<H3>if..else.. 來查看學生分數及格或不及格</H3>

<?php
$score=66;
if($score >= 60){
    echo "及格";
}else{
    echo "不及格";
}
?>
<br /><br /><br /><br /><br />



<H3>if..elseif.. 辦別成績須在0-100之間</H3>
<?php
$score=-66;

if ($score >= 0 && $score <= 100)
{
if($score >= 60){
    echo "及格";
}else{
    echo "不及格";
}
}else{
    echo "辦別成績須在0-100之間,請重新查看";
}
?>

<br />

<H3>if..elseif.. 來查看學生分數來分類甲乙丙丁等級</H3>

<?php
$score=20;
if($score >= 80)
    echo "甲等";
    elseif($score <= 80 && $score >= 60)
    echo "乙等";
    elseif($score <= 60 && $score >= 40)
    echo "丙等";
    elseif($score <= 40 && $score >= 20)
    echo "丁等";

?>