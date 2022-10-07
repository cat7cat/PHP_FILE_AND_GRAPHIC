<H1>foreach 迴圈</H1>
<p><H2> *foreach是針對陣列或是集合物件使用的語法
 *foreach會將陣列中的元素拆成key和value兩個變數
 *如果沒有特別指定，foreach會把陣列中的元素從頭到尾都取出來一次 </H2></p>

 <p><H2> foreach($array as $key => $value){</H2></p>
    //要重覆執行的程式碼
    // as 當成....使用

<H1>語法範例：</H1>
<p>$score=[60,22,72,10,80];</p>
<p>foreach($scroe as $idx => $val){</p>
    <p>echo '第' . $idx . '位同學的成績為' . $val . '<br>';</p>
}
</p>
