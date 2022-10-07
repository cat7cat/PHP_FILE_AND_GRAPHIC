<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>員工資料登錄</title>
    <style>
        table,tr,td{
            font-size: 16px;
        }
        table{
            width: 75%;
        }
        th{
            font-size: 20px;
        }
        .keyin{
            width: 98%;
        }
        h1{
            background-image: url('https://picsum.photos/id/1041/300/300');
            background-size: cover;
        }
    </style>
</head>
<body>
<h1>新進員工_資料登錄</h1>

<?php
if(isset($_POST['send'])){
    $name=$_POST['Name'];
    $id=$_POST['cid'];
    echo "<p style='color:red;'>";
    echo "員工編號： $id ， $name 資料登錄完成。";
    echo "</p>";
}
?>

<form action="" method="post">
<table border="5" align="center">
    <tr>
        <th>員工ID</td>
        <td>
            <input type="number" name="cid" id="cid" class="keyin" value="987654321" readonly>
        </td>
    </tr>
    <tr>
        <th>Email<font color="red">*</font></td>
        <td>
            <input type="email" name="email" id="email" class="keyin" placeholder="email即為帳號" required>
        </td>
    </tr>
    <tr>
        <th>密碼<font color="red">*</font></td>
        <td>
            <input type="password" name="pwd" id="pwd" class="keyin" maxlength="20" minlength="8" placeholder="請輸入8-20位數英數混合密碼" required>
        </td>
    </tr>
    <tr>
        <th>確認密碼<font color="red">*</font></td>
        <td>
            <input type="password" name="repwd" id="repwd" class="keyin" maxlength="20" minlength="8" placeholder="請輸入8-20位數英數混合密碼" required>
        </td>
    </tr>
    <tr>
        <th>照片上傳</td>
        <td>
            <input type="file" name="userImg" id="userImg">
        </td>
    </tr>
    <tr>
        <th>中文全名<font color="red">*</font></td>
        <td>
            <input type="text" name="Name" id="chName" class="keyin" required>
        </td>
    </tr>
    <tr>
        <th>英文全名<font color="red">*</font></td>
        <td>
            <input type="text" name="userName" id="enName" class="keyin" required>
        </td>
    </tr>
    <tr>
        <th>性別<font color="red">*</font></td>
        <td>
            <input type="radio" name="sex" id="m" required>
            <label for="m">男性</label>
            <input type="radio" name="sex" id="f" required>
            <label for="f">女性</label>
        </td>
    </tr>
    <tr>
        <th>生日<font color="red">*</font></td>
        <td>
            <input type="date" name="BRD" id="brd" required>
        </td>
    </tr>
    <tr>
        <th>身分證字號<font color="red">*</font></td>
        <td>
            <input type="text" name="twid" id="twid" maxlength="10" minlength="10" class="keyin" required>
        </td>
    </tr>
    <tr>
        <th>手機號碼<font color="red">*</font></td>
        <td>
            <input type="tel" name="phone" id="phone" maxlength="10" minlength="10" class="keyin" required>
        </td>
    </tr>
    <tr>
        <th>可輪班時間</td>
        <td>
            <input type="checkbox" name="conTime" id="1" checked>
            <label for="conTime">早班</label>
            <input type="checkbox" name="conTime" id="2" checked>
            <label for="conTime">晚班</label>
            <input type="checkbox" name="conTime" id="3" checked>
            <label for="conTime">夜班</label>
        </td>
    </tr>
    <tr>
        <th>戶籍地址<font color="red">*</font></td>
        <td>
            <input type="text" name="address" id="address" class="keyin" required>
        </td>
    </tr>
    <tr>
        <th>通訊地址</td>
        <td>
            <input type="checkbox" name="conTime" id="1">
            <label for="conTime">同上</label>
            <input type="text" name="address" id="address" class="keyin">
        </td>
    </tr>
    <tr>
        <th>其他備註</td>
        <td>
            <textarea name="info" id="info" cols="98%" rows="10"></textarea>
        </td>
    </tr>
    <tr align="center">
        <td colspan="2">
            <input type="reset" value="重填資料">
            <input type="submit" name="send" value="確認登錄">
            <!-- <a href="#"><button>確認註冊</button></a> -->
        </td>
        <!-- <td></td> -->
    </tr>
</table>
</form>

</body>
</html>