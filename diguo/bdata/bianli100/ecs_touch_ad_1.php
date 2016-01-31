<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_ad`;");
E_C("CREATE TABLE `ecs_touch_ad` (
  `ad_id` smallint(5) unsigned NOT NULL auto_increment,
  `position_id` smallint(5) unsigned NOT NULL default '0',
  `media_type` tinyint(3) unsigned NOT NULL default '0',
  `ad_name` varchar(60) NOT NULL default '',
  `ad_link` varchar(255) NOT NULL default '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `link_man` varchar(60) NOT NULL default '',
  `link_email` varchar(60) NOT NULL default '',
  `link_phone` varchar(60) NOT NULL default '',
  `click_count` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_ad` values('1','1','0','1','','http://demo.0769web.net/ecshop/ecshop0521/data/afficheimg/1413170548513320919.jpg','1396339200','1525161600','','','','14','1');");
E_D("replace into `ecs_touch_ad` values('2','1','0','2','','http://demo.0769web.net/ecshop/ecshop0521/data/afficheimg/1413170536683133647.jpg','1396339200','1525161600','','','','16','1');");
E_D("replace into `ecs_touch_ad` values('3','1','0','3','','http://demo.0769web.net/ecshop/ecshop0521/data/afficheimg/1413169926987404478.jpg','1396339200','1525161600','','','','11','1');");

require("../../inc/footer.php");
?>