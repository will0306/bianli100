<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart`;");
E_C("CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `session_id` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_sn` varchar(60) NOT NULL default '',
  `goods_name` varchar(120) NOT NULL default '',
  `market_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `rec_type` tinyint(1) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `can_handsel` tinyint(3) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  `is_shipping` tinyint(1) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=827 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart` values('826','0','a1d2e2cad033b5442d84e12a15939631','88','KLMY000088','白箭口香糖5片装/支 ','1.65','1.50','2','','1','','0','0','0','0','','0','0');");

require("../../inc/footer.php");
?>