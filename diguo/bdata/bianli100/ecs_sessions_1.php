<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('6c03371dc60297d05f4c37b4035ffbd3','1428256361','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a4cbc8c0ddddacb15f9c0acb5c4703ac','1428256357','0','0','127.0.0.1','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('0ff02bfddb495a08761a0d1e63986d1d','1428256356','0','0','127.0.0.1','0','0','0.00','0','a:1:{s:10:\"last_check\";i:1428227556;}');");
E_D("replace into `ecs_sessions` values('c457a0f54c4fcf9697d991438edf7528','1428256348','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1428227494;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('0c0a7da6b21f8428d5f0b296102fcbae','1428256286','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:61;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('314b911f969625adcecd38013d8d5d7c','1428256175','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1428227220;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('898a9cc76e232b94051d1b69fa9c96a5','1428255613','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1428226785;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('a0456325bb1df295ff5f6e4d03a04c5b','1428255570','0','1','127.0.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1428226714;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('d02b4fd927831a82b161df4d43560fab','1428255736','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a1d2e2cad033b5442d84e12a15939631','1428255483','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>