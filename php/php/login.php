<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>


    
<h1>會員登入</h1>


<?php
// echo $fromName;echo $fromPW;

$showform=true;

if(isset($_GET['result'])){
    switch($_GET['result']){
        case 'success':
            echo "<div style='color:green'>";
            echo "您的帳密正確，登入成功!";
            echo "</div>";
            $showform=false;
        break;
        case 'fail':
            echo "<div style='color:red'>";
            echo "您的帳密錯誤，登入失敗!";
            echo "</div>";
        break;
    }
}

?>

<?php
if($showform){
?>

<form action="check.php" method="post">
<div>帳號:<input type="text" name="name" id=""></div>
<div>密碼:<input type="text" name="pw" id=""></div>
<div><input type="submit" value="登入" id=""></div>
</form>
<?php
}

?>

</body>
</html>