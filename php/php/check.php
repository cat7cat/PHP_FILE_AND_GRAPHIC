

<?php 

$name='chris';
$pw='321321';

$formName=$_POST['$name'];
$formPW=$_POST['$pw'];

if($name==$formName && $pw==$formPW){
    // echo "帳密正確";
    header("location:login.php?result=success");
}else {
    // echo "帳密錯誤";
    header("location:login.php?result=fail");
}



?>


