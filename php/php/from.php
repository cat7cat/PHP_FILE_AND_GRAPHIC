<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET的傳送方式</title>
</head>
<body>
<h1>POST & GET的傳送方式</h1>
<br>
<H1>GET</H1>
<li>明碼，會顯示在網址上</li>
<li>適合較無隱私的資料</li>
<li>可直接放在網址中傳遞(query string)</li>
<li>資料長度較短</li>
<li>類似明信片的概念，寄送地址和訊息都是公開的</li>

<form action="" method="get">
<input type="text" name="cname" id="cname">
<input type="text" name="phone" id="phone">
<input type="submit" value="送出">

<hr>

<h1>POST</h1>
<li>經過編碼傳輸，不會顯示在網址上</li>
<li>資料長度較長</li>
<li>可透過表單方式傳送資料</li>
<li>類似信封寄信的概念，信封上只有傳遞的地址及收件人名稱，但訊息的內容放在信封內，不會被一般人看見。</li>


<form action="" method="post" >
<input type="text" name="cname" id="cname">
<input type="text" name="phone" id="phone">
<input type="submit" value="送出">

</form>

<hr>

使用 POST 傳送，並且有檔案上傳
<form action='api/get/book/1' method='POST' enctype='multipart/form-data'>
    <input type='text' name='book' value=''>
    <input type='submit' value='送出'>
</form>



</body>
</html>