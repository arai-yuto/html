<?php
require_once('common.php');

show_top('社員情報の削除');
$id = $_GET["id"];
$menber = $db -> getsyain($id);
var_dump($id);
show_delete($menber);
show_down(true);
?> 
