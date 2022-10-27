<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算</title>
    <style>
        div {
            margin: 10px;
            padding: 10px;
            
        }
        /* hr{
            
        } */
        .title {
            background-color: skyblue;
        }
        .container {
            background-color: #eee;
        }
    </style>
</head>
<body>
<h1>BMI計算</h1>

<div class="title">BMI測試</div>
<div class="container">說明：
世界衛生組織建議以身體質量指數（Body Mass Index, BMI）來衡量肥胖程度，其計算公式是以體重（公斤）除以身高（公尺）的平方。 國民健康署建議我國成人BMI應維持在18.5（kg/㎡）及24（kg/㎡）之間，太瘦、過重或太胖皆有礙健康。 研究顯示，體重過重或是肥胖（BMI≧24）為糖尿病、心血管疾病、惡性腫瘤等慢性疾病的主要風險因素；而過瘦的健康問題，則會有營養不良、骨質疏鬆、猝死等健康問題。</div>
<hr>
<form action="resuit.php" method="post" class="bmiform">

<div>
身高：<input type="number" name="height" id="height">
體重：<input type="number" name="weight" id="weight">
<input type="submit" value="計算BMI結果">
</div>

</form>

<hr>
<div class="menu"><a href="./index.php">回首頁</a></div>



</body>
</html>