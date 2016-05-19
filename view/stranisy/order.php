<h2 style="text-align: center;margin-top: 20px;">Оформление заказа.</h2>
<?
if($_SESSION['cart'] && !isset($_POST['zakaz']))
{
?>
<form action="index.php?view=order" method="post">
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
                <td style="width: 20px;"><?=$quantity;?></td>
                <td><?=$product['price'];?> Сом</td>
                <td><p><?=$product['price'] * $quantity;?> Сом</p></td>
            </tr>
            <?endforeach;?>
            
    </table>
    <p style="text-align: center;margin-top: 20px; font-size: 17px;">Общая сумма заказа: <span><?=number_format($_SESSION['total_price'],2);?> Сом</span></p><br>
				<div class="order">
				     <label>Ваше Имя:</label><input type="text" name="name"><br><br>
				     <label>Ваша Фамилия:</label><input type="text" name="s_name"><br><br>
				     <label>Ваш E-mail:</label><input type="text" name="e_mail"><br><br>
				     <label>Ваш город:</label><input type="text" name="gorod"><br><br>
				     <label>Телефон:</label><input type="text" name="telefon"><br><br>
				     </div>

     <p style="text-align: center;"><input type="submit" name="zakaz" value="Заказать" /></p>
</form>
<?
}
if($_SESSION['cart'] && isset($_POST['zakaz'])){
    $name =$_POST['name']; 
    $s_name =$_POST['s_name']; 
    $e_mail =$_POST['e_mail']; 
    $gorod =$_POST['gorod']; 
    $telefon =$_POST['telefon']; 
    
    $date = date('Y-m-d');
    $time = date('H:i:s');


    	foreach($_SESSION['cart'] as $id => $quantity):
	    $product = get_product($id);
	        $query = mysql_query("INSERT INTO orderss(name,s_name,email,gorod,telefon,datee,timee,prod_name,prod_id,price,qty) VALUES ('$name','$s_name','$e_mail','$gorod','$telefon','$date','$time','{$product['name']}','{$product['id']}','{$product['price']}','$quantity')");
	    endforeach;	
 
			echo "<p align='center' style='color: #000; margin-top:30px; font-size:15px;'><b>Ваш заказ успешно принят! Спасибо за покупку!</b></p>";
}