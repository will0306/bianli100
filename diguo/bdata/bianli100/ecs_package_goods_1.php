<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_package_goods`;");
E_C("CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_package_goods` values('5','6','1','1','0');");
E_D("replace into `ecs_package_goods` values('5','5','1','1','0');");
E_D("replace into `ecs_package_goods` values('6','4','1','1','0');");
E_D("replace into `ecs_package_goods` values('6','7','1','1','0');");
E_D("replace into `ecs_package_goods` values('6','32','1','1','0');");
E_D("replace into `ecs_package_goods` values('5','31','1','1','0');");

require("../../inc/footer.php");
?>