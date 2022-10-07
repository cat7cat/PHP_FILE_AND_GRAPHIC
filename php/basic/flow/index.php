<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>克利斯作品</title>
    <link rel="stylesheet" href="from.css">
</head>

<body>
    <!-- logo  -->
    <div class="logo">
        <a href="home.html"><img src="img/logo.jpg" alt="logo"></a></img>
    </div>

    <!-- menu list -->
    <div class="menu">
        <ul>
            <li><a href="home.html">首頁</a></li>
            <li><a href="about.html">關於我們</a></li>
            <li><a href="product.html">商品介紹</a></li>
            <li><a href="service.html">服務和支援</a></li>
            <li><a href="contect.html">聯絡我們</a></li>
        </ul>
    </div>

    <!-- banner_item -->
    <div class="banner">
        <a href="#">
            <img src="img/banner1.jpg" alt="logo" width="100%"></img>
        </a>
        <!-- <a href="#"> 
            <img src="img/banner2.jpg" alt="logo" width="1920"></img>
        </a>
        <a href="#">
            <img src="img/banner3.jpg" alt="logo" width="1920"></img>
        </a>
        <a href="#">
            <img src="img/banner4.jpg" alt="logo" width="1920"></img>
        </a>-->
    </div>

    <br>
    <br>
    <!-- 表單  -->
    <!-- 快速鍵 form:get>input:text*3>input:submit>input:clear -->

    <!-- input name=name 會對應到label的for name  -->
    <!-- method="post" 網址上不會出現帶出的資料  -->
    <!-- method="get" 網址上會出現帶出的資料  -->


    <form action="/member_register.php">
        <!-- w3school fieldset -->
        <H1>會員註冊</H1>
        <fieldset>
            <legend>Member Register：</legend>

            <label for="name">姓名：</label>
            <input type="text" name="mumber_name" id="mumber_name" placeholder="請輸入您的姓名">
            </P>
            <P>
                <label for="mumber_phone">頭照：</label>
                <input type="file" accept="image/jpeg,image/png,image/gif" name="" id="">
            </P>
            <P>
                <label for="mumber_phone">電話：</label>
                <input type="text" name="mumber_phone" id="mumber_phone" placeholder="請輸入您的電話">
            </P>
            <P>
                <label for="mumber_money">收入：</label>
                <input type="number" name="mumber_money" id="mumber_money" placeholder="請輸入您的收入">
            </P>
            <P>
                <label for="mumber_birthday">生日：</label>
                <input type="date" name="mumber_birthday" id="mumber_birthday">
            </P>
            <P>
                <label for="mumber_mail">信箱：</label>
                <input type="text" name="mumber_mail" id="mumber_mail" placeholder="請輸入您的信箱">
            </P>
            <P>
                <label for="mumber_getZone">居住地：</label>

                <select type="text" name="mumber_getZone" id="mumber_getZone">
                    <option value="KL">基隆市</option>
                    <option value="TP">台北市</option>
                    <option value="TPC">新北市</option>
                    <option value="TYC">桃園市</option>
                    <option value="HC">新竹市</option>
                    <option value="HCC">新竹縣</option>
                    <option value="MLC">苗栗縣</option>
                    <option value="TC">台中市</option>
                    <option value="CHC">彰化縣</option>
                    <option value="NTCT">南投縣</option>
                    <option value="YLC">雲林縣</option>
                    <option value="CY">嘉義市</option>
                    <option value="CYC">嘉義縣</option>
                    <option value="TN">台南市</option>
                    <option value="KH">高雄市</option>
                    <option value="PTC">屏東縣</option>
                    <option value="TTCT">台東縣</option>
                    <option value="HLC">花蓮縣</option>
                    <option value="LC">宜蘭縣</option>
                    <option value="PHC">澎湖縣</option>
                    <option value="KMC">金門縣</option>
                    <option value="MZC">連江縣</option>
 
        </select>
        </P>
        <P>
            <label for="mumber_interest">興趣：</label>
            <input type="checkbox" name="
mumber_interest" id="mumber_interest">看電影
            <input type="checkbox" name="
mumber_interest" id="mumber_interest">旅遊
            <input type="checkbox" name="
mumber_interest" id="mumber_interest">玩遊戲
            <input type="checkbox" name="
mumber_interest" id="mumber_interest">購物
        </P>
        <p>
            <input type="submit" value="送出資料">
            <input type="reset" value="清除">
        </p>


    </fieldset>
    </form>





</body>

</html>