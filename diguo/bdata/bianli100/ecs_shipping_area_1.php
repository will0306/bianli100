<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping_area`;");
E_C("CREATE TABLE `ecs_shipping_area` (
  `shipping_area_id` smallint(5) unsigned NOT NULL auto_increment,
  `shipping_area_name` varchar(150) NOT NULL default '',
  `shipping_id` tinyint(3) unsigned NOT NULL default '0',
  `configure` text NOT NULL,
  PRIMARY KEY  (`shipping_area_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping_area` values('9','白天配送','11','a:2:{i:0;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:2:\"50\";}i:1;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:0:\"\";}}');");
E_D("replace into `ecs_shipping_area` values('8','晚上配送','10','a:4:{i:0;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:1:\"0\";}i:1;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:2:\"50\";}i:2;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:0:\"\";}i:3;a:2:{s:4:\"name\";s:7:\"pay_fee\";s:5:\"value\";s:0:\"\";}}');");

require("../../inc/footer.php");
?>