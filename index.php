<?header("Content-type:text/html;charset=utf-8;");?>
<!DOCTYPE html>
<html>
<head>
<title>Айыке-Фарм</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div class="main_content">
    <div class="menu">
        <ul>
            <li><a href="#">Главный</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">О нас</a></li>
        </ul>
        <form class="forma" action="#" method="post">
            <label><input type="text" name="search_to_tovar"size='30'placeholder='Поиск'></label>
            <label><input type="submit" value='Поиск' name="tovar"></label>
        </form>
        <a href="#">
            <img src="images/logo_korzina.png" class="logo_korzina">
        </a>
    </div>
    <!--Слайдер-->
    <div id="container">
        <div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
            <div id="slider">
                <ul>
                    <li><img src="images/headerBackground.jpg" width="800" height="280" alt="Image One" /></li>
                    <li><img src="images/banner.jpg" width="800" height="280" alt="Image Two" /></li>
                    <li><img src="images/banner-1.jpg" width="800" height="280" alt="Image Three" /></li>
                    <li><img src="images/banner-2.jpg" width="800" height="280" alt="Image Four" /></li>
                </ul>
            </div>
        <div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
        <ul id="pagination" class="pagination">
            <li onclick="slideshow.pos(0)"></li>
            <li onclick="slideshow.pos(1)"></li>
            <li onclick="slideshow.pos(2)"></li>
            <li onclick="slideshow.pos(3)"></li>
        </ul>
    </div>

<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
    id:'slider',
    auto:4,
    resume:false,
    vertical:false,
    navid:'pagination',
    activeclass:'current',
    position:0,
    rewind:false,
    elastic:true,
    left:'slideleft',
    right:'slideright'
});
</script>
    <!--Слайдер-->
    <div class="content">

        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>

        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
        
        

        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
        <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>

         <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
         <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>
         <div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/1.jpg">
            </div>
            <div class="tovar_link">
                <h3>Назик спр/назал. флакон 10мл №1</h3>
            </div>
            <div class="tovar_price">
                <p>700.00 Сом</p>
            </div>
        </div>


    </div>

        <div style="height: 100px;"></div>

    <div class="footer">
    <br>        <p>&copy;2016 г  Айыке-Фарм</p>
    </div>
</div>
</body>
</html>
