<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./3.php" method="post">
<p>
    <label for="product_in_note">備註：</label>
    <input type="text" name="product_in_note" id="product_in_note">
</p>
<p>
    <input type="submit" value="送出">
    <input type="reset" value="清除">
</form>

<?php

// $productlist_number = $_POST['productlist_number'];
// $product_name = $_POST['product_name'];
// $product_format = $_POST['product_format'];
// $product_in_quantity = $_POST['product_in_quantity'];
// $product_in_price = $_POST['product_in_price'];
// $product_in_time = $_POST['product_in_time'];
// $product_in_note = $_POST['product_in_note'];

$A = $_POST['productlist_number'];
$B = $_POST['product_name'];
$C = $_POST['product_format'];
$D = $_POST['product_in_quantity'];
$E = $_POST['product_in_price'];
$F = $_POST['product_in_time'];
$G = $_POST['product_in_note'];


?>


<h1>進貨報表</h1>
    <table>
        <tr class="tr_mark">
            <td class="Atitle">NO.</td>
            <td class="Atitle">商品編號</td>
            <td class="Atitle">商品名稱</td>
            <td class="Atitle">商品規格</td>
            <td class="Atitle">進貨數量</td>
            <td class="Atitle">進貨價格</td>
            <td class="Atitle">進貨日期</td>
            <td class="Atitle">進貨廠商</td>
            <td class="Atitle">備註</td>
        </tr>
        <tr class="tr_mark">
            <td><?= $product_name; ?></td>
            <td><?= $productlist_number; ?></td>
            <td><?= $product_name; ?></td>
            <td><?= $product_format; ?></td>
            <td><?= $product_name; ?></td>
            <td><?= $product_in_quantity; ?></td>
            <td><?= $product_in_price; ?></td>
            <td><?= $product_in_time; ?></td>
            <td><?= $product_in_note; ?></td>
        </tr>
        
    </table>


</body>
</html>