<?
function db_connect(){
	$host='localhost';
	$user='admin';
	$pswd='admin12345';
	$db='apteka';

	$connection=mysql_connect($host,$user,$pswd);
	if(!$connection || !mysql_select_db($db,$connection)){
		return fasle;
	}
	return $connection;
}

function db_result_to_array($result){
	$res_array=array();
	$count=0;
	while ($row=mysql_fetch_array($result)) {
		$res_array[$count]=$row;
		$count++;
	}
	return $res_array;
}

function get_products(){
	db_connect();
	$query="SELECT * FROM tovar";
	$result=mysql_query($query);
	$result=db_result_to_array($result);
	return $result;
}

function get_product($id){
	db_connect();
        
        $query = ("SELECT * FROM tovar WHERE id='$id' ");
        
        $result = mysql_query($query);
        
        $row = mysql_fetch_array($result);
        
        return $row;
}
//Добавления в корзину
function add_to_cart($id)
    {
        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]++;
            return true;
        }
        else
        {
            $_SESSION['cart'][$id] = 1;
            return true;
        }
        return false;
    }

function update_cart()
    {
        foreach($_SESSION['cart'] as $id => $qty)
        {
            if($_POST[$id] == '0')
            {
                unset($_SESSION['cart'][$id]);
            }
            else
            {
                $_SESSION['cart'][$id] = $_POST[$id];
            }
        }
    }
    
    function total_items($cart)
    {
        $num_items = 0;
        
        if(is_array($cart))
        {
            foreach($cart as $id => $qty)
            {
                $num_items = $num_items + $qty;
            }
        }
        
        return $num_items;           
    }