<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>萬年曆</title>
    <style>
        body{
            background-image: linear-gradient(-20deg, #8E354A 20%, #DB4D6D 100%);
            background-image: url(https://nipponcolors.com/images/texture.png);
            width: 100%;
            height: 100%;
            image-rendering: -webkit-optimize-contrast;
            
        }
        *{
            /* padding: 0px; */
            margin: auto;
            


        }
        .title{
            text-align: center;
            font-size: 36px;
            border-bottom: 5px double #000;
            font-weight: 500;
            width: 94%;
        }
        table,td{
            border: 4px double skyblue;
            text-align: center;
            border-radius: 10px;

        }
        table{
            width: 94%;

            background-color: lightskyblue;
            text-align: center;
            align-items: center;

            /* padding:5px; */

        }

        td{
            background-color: #fff;
            border: 2px double lightskyblue;
            height: 50px;
            /* margin: 10px;  */
            padding:10px;
            border-radius: 10px;
            box-shadow:1px 1px 3px darkblue;margin-right:8px;
        }

        td:hover {
            background-color: pink;
        }
        .weekdate {
            background-color: darkblue;
            color: #fff;
            /* border: 5px double #fff; */
            /* border: 1px solid #000; */
            height: 20px;
            font-weight: bold;
        }
        .ctitle {
            height: 20px;
            font-size: 36px;

        }

    </style>
</head>
<body>
    <div class="title">萬年曆</div>
    <br>

    <?php
    $cal=[];
    $month=(isset($_GET['m']))?$_GET['m']:date("m");
    // n - A numeric representation of a month, without leading zeros (1 to 12)
    $year=(isset($_GET['y']))?$_GET['y']:date("Y");
    // Y - A four digit representation of a year

    if($month<1){
        $month=12;
        $year=$year-1;
    }
    // 如果$month<1 就讓$month的數字變12  , 年的數字-1年
    if($month>12){
        $month=1;
        $year=$year+1;
    }
    // 如果$month>12 就讓$month的數字變1  , 年的數字+1年

    $nextMonth = $month + 1;
    // 超連結使用   下一個月份 該月份+1 
    $prevMonth = $month - 1;
    // 超連結使用   上一個月份 該月份-1    

    $nextYear = $year + 1;
    // 超連結使用   下一個年份 該年份+1 
    $prevYear = $year - 1;
    // 超連結使用   上一個年份 該年份-1  
    
    $firstDay=$year."-".$month."-1";
    // echo $firstDay; echo "<br>"; 
    //會抓電腦日期該月份的第一天

    
    $firstDayWeek=date("N",strtotime($firstDay));
    // echo $firstDayWeek; echo "<br>";
    //N	ISO-8601 格式数字表示的星期中的第几天 	1（表示星期一）到 7（表示星期天）
    
    $monthDays=date("t",strtotime($firstDay));
    // echo $monthDays ; echo "<br>";
    //t	指定的月份有几天	28 到 31

    $lastDay=$year.'-'.$month.'-'.$monthDays;
    // echo $lastDay; echo "<br>";
    //找出該月份的最後一天是哪一天(日期顯示)

    $spaceDays=$firstDayWeek-1;
    // echo $spaceDays; echo "<br>";
    //找出該月份第一周的第一天前面有幾天 第一天-1 即可

    $weeks=ceil(($monthDays+$spaceDays)/7);
    // echo $weeks; echo "<br>";
    // 找出該月份 (該月的天數+第一天前的天數)/除7天
    // 用意是把該月每七天就換行(換第二周)用表格方式完整化 

    for($i=0;$i<$spaceDays;$i++){
        $cal[]='';
    }
    // 第一周的第一天前面有幾天 $cal都給空值

    for($i=0;$i<$monthDays;$i++){
        $cal[]=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
    }
    // 利用 DATE和迴圈 $i=0;1++  列印出 小於該月的天數  


    // echo "第一天".$firstDay."星期".$firstDayWeek;
    // echo "<br>";
    // echo "該月共".$monthDays."天,最後一天是".$lastDay;
    // echo "<br>";
    // echo "月曆天數共".($monthDays+$spaceDays)."天，".$weeks."周";
    





    ?>

    
    <table>
        <tr>
            <td colspan="7" class="ctitle">
                <div class="ckickdateY">
                <a href="?y=<?= $prevYear ?>&m=<?= $month ?>">
                <i class="fa-solid fa-left-long"></i></a>
                <?=$year?>年
                <a href="?y=<?= $nextYear ?>&m=<?= $month ?>"><i class="fa-solid fa-right-long"></i></a>
                
                </div>
                
              
                <div class="ckickdateM">
                <a href="?y=<?= $year ?>&m=<?= $prevMonth ?>"><i class="fa-solid fa-left-long"></i></a>
                <?=$month?>月
                <a href="?y=<?= $year ?>&m=<?= $nextMonth ?>"><i class="fa-solid fa-right-long"></i></a>
                </div>
            </div>
            </td>
        </tr>
        <tr>
            <td class='weekdate'>星期一</td>
            <td class='weekdate'>星期二</td>
            <td class='weekdate'>星期三</td>
            <td class='weekdate'>星期四</td>
            <td class='weekdate'>星期五</td>
            <td class='weekdate'>星期六</td>
            <td class='weekdate'>星期日</td>
        </tr>
    <?php
    foreach($cal as $i => $day){
        if($i%7==0){
            echo "<tr>";
        }  
            echo "<td>$day</td>";
            if($i%7==6){
                echo "</tr>";
        }
    }
?>
    </table>




</body>
</html>