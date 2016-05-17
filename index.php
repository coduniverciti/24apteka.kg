<?
header("Content-type:text/html;charset=utf-8;");

include 'functions.php';
session_start();

if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
    $_SESSION['total_items'] = 0;
    $_SESSION['total_price'] = '0.00';
}

if($_GET['view']==='add_to_cart'){
	$id = $_GET['id'];
        $add_item = add_to_cart($id);
        header('Location: index.php?view=product&id='.$id);
        exit;
}
if($_GET['view']==='update_cart'){
	update_cart();
        $_SESSION['total_items'] = total_items($_SESSION['cart']);
        header('Location: index.php?view=cart');
}


$view =empty($_GET['view'])?'tovar_main' : $_GET['view']; 
include($_SERVER[DOCUMENT_ROOT].'/view/shablon/index.php');