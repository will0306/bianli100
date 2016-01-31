<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL auto_increment,
  `address_name` varchar(50) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `country` smallint(5) NOT NULL default '0',
  `province` smallint(5) NOT NULL default '0',
  `city` smallint(5) NOT NULL default '0',
  `district` smallint(5) NOT NULL default '0',
  `address` varchar(120) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('6','','13','aaa','aaa@qq.com','1','2','52','500','aaa','','1111','','','');");
E_D("replace into `ecs_user_address` values('7','','14','1','461617233@qq.com','1','3526','3640','0','111','','13999508620','111111','','');");
E_D("replace into `ecs_user_address` values('8','','20','1111','0@1.cn','1','3526','3636','3748','3333','','2222','','','');");

require("../../inc/footer.php");
?>