<?php
require_once('common.php');

show_top('社員情報の更新');
$id = $_GET["id"];
$menber = $db -> delete($id);
show_update($menber);
show_down(true);
?> 