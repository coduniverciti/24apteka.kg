<?
$products=get_products();
foreach ($products as $item):?>
<div class="tovar">
            <div class="tovarimg">
                <a href="index.php?view=product&id=<?=$item['id']?>"><img src="tovar_image/<?=$item['img']?>"></a>
            </div>
            <div class="tovar_link">
                <h3><a href="index.php?view=product&id=<?=$item['id']?>"><?=$item['name']?></a></h3>
            </div>
            <div class="tovar_price">
                <span><?=$item['price']?> Сом</span>
            </div>
        </div>
<?endforeach;?>