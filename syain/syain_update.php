<?php
require_once('common.php');

show_top('社員情報の更新');

$old_id = $_POST["old_id"];
var_dump($old_id);
$id = $_GET["id"];
$menber = $db -> getsyain($id);
show_update($menber,$id);
show_down(true);
?> 