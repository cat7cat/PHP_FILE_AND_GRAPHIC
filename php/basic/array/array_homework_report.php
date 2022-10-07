<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>大數據報表</title>
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

        tr:hover td {
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

        p {
            padding: 10px;
            margin: 2px;
            
        }
        p:hover {
            background-color: lightblue;
            color: #000;
            padding: 10px;
            margin: 2px;
            border-radius: 10px;
            font-weight: bold;
            
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

    <form action="./array_homework_report.php" metdod="GET">


        <!-- ID','品名','進貨價格','進貨日期','進貨數量','備註' -->

        <h1>進貨 - 填單</h1>
<!-- 
        <p> 
            <input type="hidden" name="product_num" id="product_num">
        </p> -->
        <p>
            <label for="productlist_number">商品編號：</label>
            <input type="text" name="productlist_number" id="productlist_number" placeholder="請輸入商品編號">
        </p>
        <p>
            <label for="product_name">商品名稱：</label>
            <input type="text" name="product_name" id="product_name" placeholder="請輸入商品名稱">
        </p>
        <p>
            <label for="product_format">商品規格：</label>
            <input type="text" name="product_format" id="product_format" placeholder="請輸入商品規格">
        </p>
        <p>
            <label for="product_in_quantity">進貨數量：</label>
            <input type="number" name="product_in_quantity" id="product_in_quantity"></p>
        <p>
            <label for="product_in_price">進貨價格：</label>
            <input type="text" name="product_in_price" id="product_in_price" placeholder="請輸入進貨價格">
        </p>
        <p>
            <label for="product_in_time">進貨日期：</label>
            <input type="date" name="product_in_time" id="product_in_time">
        </p>
        <p>
            <label for="product_in_note">備註：</label>
            <input type="text" name="product_in_note" id="product_in_note"">
        </p>
        <p>
            <input type="submit" value="送出">
            <input type="reset" value="清除">
        </p>
    </form>

    <?php
    
    // $product_num = $_GET['product_num'];
    $productlist_number = $_GET['productlist_number'];
    $product_name = $_GET['product_name'];
    $product_format = $_GET['product_format'];
    $product_in_quantity = $_GET['product_in_quantity'];
    $product_in_price = $_GET['product_in_price'];
    $product_in_time = $_GET['product_in_time'];
    $product_in_note = $_GET['product_in_note'];




    ?>
    <h1>進貨報表</h1>
    <table>
        <tr class="tr_mark">
            <!-- <td class="Atitle">NO.</td> -->
            <td class="Atitle">商品編號</td>
            <td class="Atitle">商品名稱</td>
            <td class="Atitle">商品規格</td>
            <td class="Atitle">進貨數量</td>
            <td class="Atitle">進貨價格</td>
            <td class="Atitle">進貨廠商</td>
            <td class="Atitle">進貨日期</td>
            <td class="Atitle">備註</td>
        </tr>
        <tr class="tr_mark">
            <!-- <td><?= $productlist_number; ?></td> -->
            <td><?= $productlist_number; ?></td>
            <td><?= $product_name; ?></td>
            <td><?= $product_format; ?></td>
            <td><?= $product_in_quantity; ?></td>
            <td><?= $product_name; ?></td>
            <td><?= $product_in_price; ?></td>
            <td><?= $product_in_time; ?></td>
            <td><?= $product_in_note; ?></td>
        </tr>
        
    </table>


    <div>
        for($i=1;$i<=8;){

        }
    </div>
</body>

</html>
