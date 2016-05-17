<?
header("Content-type:text/html;charset=utf-8;");

include 'functions.php';

$view =empty($_GET['view'])?'tovar_main' : $_GET['view']; 
include($_SERVER[DOCUMENT_ROOT].'/view/shablon/index.php');