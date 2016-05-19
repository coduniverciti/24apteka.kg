<h2 style="text-align: center;margin-top: 20px;">Обратная связь</h2>
<?
if($_POST['ab']){
 	$name =$_POST['name']; 
    $email =$_POST['email']; 
    $massege =$_POST['massege'];
    db_connect();
    $query = mysql_query("INSERT INTO about(name,s_name,messages) VALUES ('$name','$email','$massege')"); 
}
?>
<div style="width: 300px;margin: 40px 0 0 340px;height: 300px;">	
<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
	<label>Ваш имя:</label><input type="text" name="name" style='float: right;'><br><br>
	<label>Ваш E-mail:</label><input type="text" name="email"style='float: right;'><br><br>
	<textarea rows='5'cols='40'name='massege'placeholder='Сообщения...'></textarea><br><br>
	<input type="submit" name="ab"value="Отправить">
</form>
</div>