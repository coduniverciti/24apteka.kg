<?
//	Функция поиск принимает один параметр word
function search($word){
	if($word === '') return false;
	$query_search = '';
	$arrayWord = explode(' ',$word); 
	foreach ($arrayWord as $key => $value) {
		if(isset($arrayWord[$key - 1]))
			$query_search .=' OR ';
		$query_search .= '`name` LIKE "%'.$value.'%" OR `proizvoditel` LIKE "%'.$value.'%"';
	}
	$query = "SELECT * FROM tovar WHERE $query_search";
	$mysqli =new mysqli("localhost","admin",'admin12345','apteka');
	$result_set = $mysqli->query($query);
	$mysqli->close();
	
	$i = 0;
	while ($row = $result_set->fetch_assoc()){
		$results[$i] = $row;
		$i++;
	}
	return $results;
}

echo "<h1 style='text-align:center;border-bottom:1px solid #000;padding-bottom:10px;'>Результат поиска.</h1>";

if($_POST['tovar']){
	$word = trim(strip_tags((htmlspecialchars($_POST['search_to_tovar']))));
	$results =search($word);
}
if(isset($_POST['tovar'])){
	if($results === false){
		echo "<h2>Вы задали пустой запрос.</h2>";
		exit;
	}
	if(count($results) === 0)
		echo "<h2>Ничего не найдено.</h2>";
	else
		 for ($i=0; $i < count($results); $i++){
			 echo '<table>';
			        echo '<tr>';
              		echo "<td><img src='tovar_image/".$results[$i]['img']."'></td>";
              		echo "<td><h3><a href='index.php?view=product&id=".$results[$i]['id'].'\'>'.$results[$i]['name'].".".$results[$i]['proizvoditel']."</p></td>";
              		echo '</tr>';
            echo '</table>';
         }
}