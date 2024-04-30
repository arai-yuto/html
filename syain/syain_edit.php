<?php
require_once('common.php');

show_top('社員情報');
$id = $_GET["id"];
$menber = $db -> getsyain($id);
show_edit($menber);
show_down(true);
?> 
