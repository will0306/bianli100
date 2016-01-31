<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(10) NOT NULL default '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL default '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) default NULL,
  `title_pic` varchar(255) default NULL,
  `base_style` char(6) default NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','夏新优惠大酬宾','<p>夏新产品优惠开始了</p>','1241107200','1782748800','O:8:\"stdClass\":1:{s:7:\"default\";a:16:{i:0;s:11:\"夏新N7|17\";i:1;s:19:\"恒基伟业G101|16\";i:2;s:15:\"飞利浦9@9v|8\";i:3;s:14:\"诺基亚E66|9\";i:4;s:14:\"索爱C702c|10\";i:5;s:19:\"摩托罗拉A810|12\";i:6;s:28:\"诺基亚5320 XpressMusic|13\";i:7;s:17:\"三星SGH-F258|19\";i:8;s:13:\"三星BC01|20\";i:9;s:13:\"金立 A30|21\";i:10;s:20:\"多普达Touch HD|22\";i:11;s:7:\"P806|24\";i:12;s:18:\"摩托罗拉E8 |31\";i:13;s:15:\"诺基亚N85|32\";i:14;s:18:\"诺基亚5800XM|14\";i:15;s:15:\"诺基亚N96|23\";}}','','','','','','','','');");

require("../../inc/footer.php");
?>