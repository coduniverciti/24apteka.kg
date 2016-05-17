<?
$id=$_GET['id'];
$product=get_product($id);
?>
<div class="tovar">
            <div class="tovarimg">
                <img src="tovar_image/<?=$product['img']?>">
            </div>
            <div class="tovar_link">
                <h3><?=$product['name']?></h3>
            </div>
            <div class="tovar_price">
                <span><?=$product['price']?> Сом</span>
            </div>
            <div style="margin: 10px 10px; font-size: 16px;">
                <p style="">Артикул : <?=$product['artikul']?></p>
                <p style="">Производитель : <?=$product['proizvoditel']?></p>
            </div>
            
        </div>
        <div style="width:100px;position: absolute; margin: 30px 0 0 300px;">
            <a href="#" style="background-color: #0080FF;color:#fff;border-radius: 5px;padding: 5px;}">Заказать</a>
        </div>