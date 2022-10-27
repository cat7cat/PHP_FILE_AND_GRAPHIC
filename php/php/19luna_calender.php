<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        * {
            box-sizing: border-box;
            margin: auto;
        }

        .container {
            width: 100%;
            height: 300px;
            text-align: center;
            padding: 10px;
        }


        table {
            border-top: 3px double;
            margin: 20px auto;
        }


        th {
            /* background-color: lightgoldenrodyellow; */
            font-size: 1.6rem;
            width: 55px;
            height: 70px;
        }

        td {
            font-size: 1.2rem;
            height: 55px;
        }

        td:hover {
            border: 1px none;
            border-radius: 50%;
            background-color: lemonchiffon;
        }

        a {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <?php

    $cal = [];
    $year = (isset($_GET['y'])) ? $_GET['y'] : date("Y");
    $month = (isset($_GET['m'])) ? $_GET['m'] : date("n");

    if ($year > 0 && $month >= 0) {

        if ($month > 12) {
            $year = $year + floor($month / 12);
            // if ($month % 12 == 0) {
            //     $month = 12;
            // } else {
            $month = $month % 12;
            // }
        } elseif ($month == 0) {
            $year = $year - 1;
            $month = 12;

            // if ($month % 12 == 0) {
            //     $month = 12;
            // }
        }

        // 一旦 $month = 13，就會進入第一個if & 第二層的else
        // 使 $month 強制成為 1，$nextMonth 就會成為 2
        // 下一個月就會從 $month = 2 開始
        // 所以 => $month 不會超過 13
        // ==> 10/26 00:20 
        //     *發現第二層的 if 其實不用設，
        //      因為 $month 不會有 12 以外 $month % 12 == 0 的狀況*


        // 一旦 $month = 0，就會進入第一層的 elseif
        // 使 $month 強制成為 12，$prevMonth 就會成為 11
        // 前一個月就會從 $month = 11 往前推
        // 所以 => $month 不會 < 0 
        // ==> 10/26 00:07
        //     *發現 elseif 的內層判斷式不需要，
        //      從根本上與 else if 判斷的功能一致*


        $prevMonth = $month - 1;
        $nextMonth = $month + 1;

        $prevYear = $year - 1;
        $nextYear = $year + 1;



        $firstDay = $year . "-" . $month . "-1";
        $firstDayWeek = date("N", strtotime($firstDay));
        $monthDays = date("t", strtotime($firstDay));
        $lastDay = $year . '-' . $month . '-' . $monthDays;
        $spaceDays = $firstDayWeek - 1;
        $weeks = ceil(($monthDays + $spaceDays) / 7);
        $today = date("d", strtotime("today"));
        // echo $today;

        for ($i = 0; $i < $spaceDays; $i++) {
            $cal[] = '';
        }

        for ($i = 0; $i < $monthDays; $i++) {
            $cal[] = date("j", strtotime("+$i days", strtotime($firstDay)));
        }

        // print_r($cal);
    ?>
        <div class="container">

            <div style="display:flex ;width:70%;justify-content: space-between;">

                <!-- ? =>表示為當前頁面 -->
                <div>
                    <a href="?y=<?= $prevYear ?>&m=<?= $month ?>">上一年度</a>
                    <br>
                    <a href="?y=<?= $year ?>&m=<?= $prevMonth ?>">上一個月</a>
                </div>
                <div>
                    <h1><?= $year ?> 年</h1>
                    <h1><?= $month ?>月</h1>
                </div>
                <div>

                    <a href="?y=<?= $nextYear ?>&m=<?= $month ?>">下一年度</a>
                    <br>
                    <a href="?y=<?= $year ?>&m=<?= $nextMonth ?>">下一個月</a>
                </div>
            </div>

            <table>
                <tr>
                    <th>一</th>
                    <th>二</th>
                    <th>三</th>
                    <th>四</th>
                    <th>五</th>
                    <th>六</th>
                    <th>日</th>
                </tr>
                <?php
                foreach ($cal as $i => $day) {
                    if ($i % 7 == 0) {
                        echo "<tr>";
                    }
                    // if ($today == $day) {
                    //     echo "<td style='color:orange'>$day</td>";
                    // } else {
                    echo "<td>$day</td>";
                    // }

                    if ($i % 7 == 6) {
                        echo "</tr>";
                    }
                }


                ?>
            </table>
        <?php
    } else {
        echo "<div style='color:red'>";
        echo "不要玩網址列!";
        echo "</div>";
    }
        ?>
        <br>
        <a href="./calendar_done.php">now</a>
        <br>
        <br>
        <hr>
        <a href="./index.php">回首頁</a>
        </div>

</body>

</html>