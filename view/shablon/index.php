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
            <li><a href="index.php">Главный</a></li>
            <li><a href="index.php?view=news">Новости</a></li>
            <li><a href="index.php?view=onas">О нас</a></li>
        </ul>
        <form class="forma" action="index.php?view=search_prod" method="post">
            <label><input type="text" name="search_to_tovar"size='30'placeholder='Поиск'></label>
            <label><input type="submit" value='Поиск' name="tovar"></label>
        </form>
        <!--лого Корзина-->
        <a href="index.php?view=carzina">
            <img src="images/logo_korzina.png" class="logo_korzina">
        </a>
        <span style="position: absolute;left: 710px;font-size: 18px;color: white;top: 16px;"><?=$_SESSION['total_items'];?> Товара</span>
        <!--лого Корзина-->
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
    

    <!--Контент-->
    <div class="content">
    <?
        include($_SERVER[DOCUMENT_ROOT].'/view/stranisy/'.$view.'.php');
    ?>
    </div>
    <!--Контент-->

        <div style="height: 100px;"></div>

    <div class="footer">
    <br>        <p>&copy;2016 г  Айыке-Фарм <a href="index.php?view=about" style="color: #fff;">Обратная связь</a></p>
    </div>
</div>
</body>
</html>
