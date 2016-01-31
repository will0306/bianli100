<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shipping`;");
E_C("CREATE TABLE `ecs_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL auto_increment,
  `shipping_code` varchar(20) NOT NULL default '',
  `shipping_name` varchar(120) NOT NULL default '',
  `shipping_desc` varchar(255) NOT NULL default '',
  `insure` varchar(10) NOT NULL default '0',
  `support_cod` tinyint(1) unsigned NOT NULL default '0',
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) default NULL,
  `config_lable` text,
  `print_model` tinyint(1) default '0',
  `shipping_order` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shipping` values('11','fpd','白天配送','配送时间（北京时间）09:00—21:00<br>配送电话：18609905225','0','0','1','','','','2','0');");
E_D("replace into `ecs_shipping` values('10','flat','晚上配送','配送时间（北京时间）21:00—09:00<br>配送电话：18609905225','0','1','1','','','','2','0');");

require("../../inc/footer.php");
?>