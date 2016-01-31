<?php


 require(dirname(__FILE__) . '/../includes/init.php');

 $goods_table = $ecs->prefix.'goods';
 $ret = $db->getAll("SELECT * FROM  `$thistable` WHERE `is_new` = 1 LIMIT 0 , 6"); 
 print_r($ret);