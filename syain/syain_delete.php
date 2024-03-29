<?php
require_once('common.php');

show_top('社員情報の削除');
$id = $_GET["id"];
$menber = $db -> delete($id);
var_dump($id);
exit;
show_delete($menber);
show_down(true);
?> 