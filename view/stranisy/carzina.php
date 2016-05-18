<h2 style="text-align: center;margin-top: 20px;">Ваша корзина.</h2>
<?
if($_SESSION['cart'])
{
?>
<form action="index.php?view=update_cart" method="post">
	<table  cellpadding="0" cellspacing="0" class="tovar_cars">
            <th>Товар</th>
            <th>Названия</th>
            <th>Количество</th>
            <th>Цена</th>
            <th>Всего</th>
            
            <? foreach($_SESSION['cart'] as $id => $quantity):
                 $product = get_product($id);
              ?>
            <tr>
            	<td><img src="tovar_image/<?=$product['img'];?>"></td>
                <td><p style="overflow: hidden; width: 120px;"><?=$product['name'];?></p></td>
                <td style="width: 20px;"><input type="text" size="2" name="<?=$id;?>" maxlength="2" value="<?=$quantity;?>"></td>
                <td><?=$product['price'];?> Сом</td>
                <td><p><?=$product['price'] * $quantity;?> Сом</p></td>
            </tr>
            <?endforeach;?>
            
    </table>
    <p style="text-align: center;margin-top: 20px; font-size: 17px;">Общая сумма заказа: <span><?=number_format($_SESSION['total_price'],2);?> Сом</span></p><br>
     <p style="text-align: center;"><input type="submit" name="update" value="Обновить" /></p>
</form>
<p style="text-align: center;margin-top: 40px;"><a href="index.php?view=order" style="text-decoration: none;padding: 5px;border-radius: 5px;background-color: #0080FF;color: white;">Оформить заказ</a></p>
<?
}
else
{
    echo "<h3 style='margin-left:50px;'>Ваша корзина пуста!</h3>";
}
?>