<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 5px solid #CCC;
        }

        td {
            font-size: 20px;
            color: #FFF;
            border: 1px solid #CCC;
            background-color: #999;
            text-align: center;
            padding: 10px;
            
        }
    </style>
</head>

<body>
    <table>
        <h3>舉例1 製作一個學生成績表陣列 </h3>
        <?php


       
        $scores = [ ['姓名', '國文', '英文', '數學', '地理', '歷史'],
            ['judy', 95, 64, 70, 90, 84],
            ['amo', 45, 74, 76, 99, 80],
            ['john', 65, 84, 78, 98, 64],
            ['peter', 75, 94, 38, 57, 86],
            ['hebe', 85, 99, 40, 96, 44]
        ];
        
        echo "<table>";

        for ($i = 0; $i < count($scores); $i++) {
            echo "<tr>";
            for ($j = 0; $j < count($scores[$i]); $j++) {
                echo "<td>".$scores[$i][$j]."</td>";                
            }echo "</tr>";
        }
       
        echo "</table>";

        ?>




</body>

</html>