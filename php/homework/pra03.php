<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列操作練習</title>
    <style>
        * {
            font-family: Microsoft JhengHei;
        }

        table,
        tr {
            border: 3px solid #666;
            width: 100%;
            padding: 0px;
            text-align: center;
            /* border-collapse: collapse; */
            border-radius: 5px;
        }

        tr,
        td:hover {
            background-color: lightblue;
            color: #000;
        }

        td {
            border: 2px solid #ddd;
            /* width: 15%; */
            text-align: center;
            background-color: #999;
            color: #FFF;
            padding: 6px;
            margin: 6px;
            border-radius: 5px;
        }

        /* td :hover {
    background-color: lightblue;
    color:#000;
} */
        .Atitle {
            color: while;
            font-weight: bold;
            background-color: #666;
        }
    </style>

</head>
<body>

<h1>設計一個陣列(一維或多維)來存放學生的成績資料</h1>
<?php 
$title=['名字','國文','英文','數學','地理','歷史'];
$a=['judy',95,64,70,90,84];
$b=['amo',88,78,54,81,71];


echo "<table>";
echo "<tr>"; 
$n=5;
for($i=0;$i<=$count($title);$i++){
    // echo "<tr>";
    for($j=0;$j<=($n-$i);$i++){
        echo "<td>.$a.</td>";
    }echo "</tr>";
}echo "</table>";



?>
</body>
</html>