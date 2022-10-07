<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>
    

<H1>
    PHP DAY04
</H1>
<H2>
    PHP的陣列宣告方式
</H2>

<hr>
<h3>空陣列宣告</h3>
<?php
$a=[];

if(is_array($a)){
    echo '$a是陣列';
}else{
    echo '$a不是陣列';
}

?>
$a=array( ); <br>
$a=[ ];      <br>
<hr>
<p>
<h3>PHP陣列的特性</h3>
<li>如果不是純索引的型式，那就一定是key-value</li>
<li>陣列中的元素資料型態不必相同</li>
<li>陣列的長度是動態可變的</li>
</p>

<hr>
<h3>宣告時給值 </h3>
$a[1]=“A”;                      <br>
<?php 
echo "<h3>舉例1 </h3>";
$a=['星期一','星期二','星期三','星期四','星期五','星期六','星期日']; 


//判別陣列是否為真 真就印$a是陣列  假就印$a不是陣列 
if(is_array($a)){
    echo '$a是陣列' ; 
    echo "<HR>";
    print_r($a);  // print_r 只是拿來用來檢測陣列 真的要用請用FOR迴圈
    echo "<HR>";
    //echo $a[1];
    echo '印出該$a變數的陣列值為'.$a[3];
    echo "<HR>";
    for($i=0;$i<count($a);$i++){
        echo $a[$i]."<br>";
    }
}else{
    echo '$a不是陣列';
}
echo "<HR>";
echo array_search("星期三",$a);
echo "<HR>";
echo serialize($a);
?>
?>

<br>
<?php 
echo "<h3>舉例2 </h3>";
$a=['星期一','星期二','星期三','星期四','星期五','星期六','星期日']; 


//判別陣列是否為真 真就印$a是陣列  假就印$a不是陣列 
if(is_array($a)){
    echo '$a是陣列' ; 
    print_r($a);  // print_r 只是拿來用來檢測陣列 真的要用請用FOR迴圈
    echo "<br>";
    echo '使用迴圈的方式';
    echo '印出該$a變數的陣列值為<br>';
    for ($i=0;$i<count($a);$i++){
        echo $a[$i]."<br>";
    }
} else{
    echo '$a不是陣列' ; 
}
?>

<br>
<?php 
echo "<h3>舉例3 </h3>";
$a=['day1'=>'星期一',
    'day2'=>'星期二',
    'day3'=>'星期三',
    'day4'=>'星期四',
    'day5'=>'星期五',
    'day6'=>'星期六',
    'day7'=>'星期日']; 

    if(is_array($a)){
        echo '$a是陣列';
        echo "<HR>";
        print_r($a);
        echo "<br>";
        //echo $a['day1'];
        for($i=1;$i<=count($a);$i++){
            echo $a['day'.$i]."<br>";
        }
    }else{
        echo '$a不是陣列';
    }
    
    echo "<HR>";
    echo array_search("星期四",$a);
    

// is_array()	檢查是否為陣列 //判別陣列是否為真 真就印$a是陣列  假就印$a不是陣列 
echo "<h3>is_array()	檢查是否為陣列</h3>";
echo "<hr>";

if(is_array($a)){
    echo '$a是陣列' ; 
    print_r($a);  // print_r 只是拿來用來檢測陣列 真的要用請用FOR迴圈
    echo "<br>";
    echo '使用迴圈的方式';
    echo '印出該$a變數的陣列值為<br>';
    
    for ($i=1;$i<count($a);$i++){
        echo $a['day'.$i]."<br>";
    }
} else{
    echo '$a不是陣列' ; 
}




//in_array() 檢查某值是否在陣列中  只會給你是或否
echo "<h3>in_array() 檢查某值是否在陣列中  只會給你是或否</h3>";
echo "<hr>";

//sort()	排序陣列
echo "<h3>sort()	排序陣列</h3>";
echo "<hr>";

//rsort()	反序排序陣列
echo "<h3>rsort()	反序排序陣列</h3>";
echo "<hr>";

//array_fill()	在陣列中填滿某值
echo "<h3>array_fill()	在陣列中填滿某值</h3>";
echo "<hr>";

//array_search() 在陣列中尋找某值  會幫你找到該值
echo "<h3>array_search() 在陣列中尋找某值  會幫你找到該值</h3>";
echo "<hr>";
echo array_search("DAY4",$a);

//serialize()	    序列化/字串化陣列
echo "<h3>serialize() 序列化/字串化陣列</h3>";
echo "<hr>";

// unserialize()	反序列化/陣列化字串
echo "<h3>unserialize()	反序列化/陣列化字串</h3>";
echo "<hr>";
// implode()	    以字串或符號把陣列轉為字串
echo "<h3>implode()	以字串或符號把陣列轉為字串</h3>";
echo "<hr>";

?>



<?php 
echo "<h3>舉例4 製作一個學生成績表陣列 </h3>";
$scores=[
['姓名'=>'judy','國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84],
['姓名'=>'amo','國文'=>45,'英文'=>74,'數學'=>76,'地理'=>99,'歷史'=>80],
['姓名'=>'john','國文'=>65,'英文'=>84,'數學'=>78,'地理'=>98,'歷史'=>64],
['姓名'=>'peter','國文'=>75,'英文'=>94,'數學'=>38,'地理'=>97,'歷史'=>86],
['姓名'=>'hebe','國文'=>85,'英文'=>99,'數學'=>40,'地理'=>96,'歷史'=>44]
];
// $names=['judy','amo','john','peter','hebe'];
 

    if(is_array($a)){
        echo '$a是陣列';
        echo "<HR>";
        print_r($a);
        echo "<br>";
        //echo $a['day1'];
        for($i=1;$i<=count($a);$i++){
            echo $a['day'.$i]."<br>";
        }
    }else{
        echo '$a不是陣列';
    }
    
    echo "<HR>";
    echo array_search("星期四",$a);
<br><br><br><br><br>
$a[]=“A”;                       <br>

$a=[“A”,”B”,”C”];               <br>
$a=[1=>”A”,2=>”B”,3=>”C”];      <br>    
$a=array(“A”,”B”,”C”);          <br>     
<hr>

<br><br><br><br><br>
<h3>多維陣列</h3>

$a=[                             <br>           
     [22,33,44,55],             <br>
     [29,12,33,77],              <br>   
     [98,22]                    <br>            
   ];                               <br>
                                    <br>
$a=[                                <br> 
    '數學'=>[                       <br>
                [                   <br>
                    '姓名'=>'小明', <br>
                    '成績'=>98      <br>
                ],                  <br>
                [                   <br>
                    '姓名'=>'小美', <br>
                    '成績'=>22       <br>   
                ],                  <br>
                [                   <br>
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '國文'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>58
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>73
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>90
                ]
        
            ]
];


</body>
</html>