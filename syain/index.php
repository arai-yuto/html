<?php
require_once('common.php');

$menbers = $db -> getallsyain();
show_top();
show_syainlist($menbers);
show_down();

?> 