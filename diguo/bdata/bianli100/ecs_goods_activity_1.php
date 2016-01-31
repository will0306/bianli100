<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL auto_increment,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','夺宝奇兵之诺基亚N96','新一轮的夺宝开始了\n本期是 诺基亚n96','0','23','诺基亚N96','1242107580','1242193980','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}','0');");
E_D("replace into `ecs_goods_activity` values('2','夺宝奇兵之夏新N7','本期的夺宝奖品是 夏新N7','0','17','夏新N7','1242107820','1250661420','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}','0');");
E_D("replace into `ecs_goods_activity` values('9','诺基亚 原装蓝牙 BH-104','仅团100台！1099元包邮即享市场价1960元的... ','1','90','诺基亚 原装蓝牙 BH-104','1300032000','1773763200','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:900;}}s:15:\"restrict_amount\";i:101111;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}','0');");
E_D("replace into `ecs_goods_activity` values('4','拍卖活动——索爱C702c','','2','10','索爱C702c','1242144000','1242403200','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:0;s:9:\"end_price\";i:0;s:9:\"amplitude\";d:20;s:6:\"no_top\";i:1;}','0');");
E_D("replace into `ecs_goods_activity` values('5','摩托罗拉E8 大礼包','礼包大优惠','4','31','摩托罗拉E8 ','1242110400','1252046400','0','a:1:{s:13:\"package_price\";s:4:\"1430\";}','0');");
E_D("replace into `ecs_goods_activity` values('6','诺基亚N85大礼包','诺基亚N85超值大礼包','4','32','诺基亚N85','1242110760','1248936360','0','a:1:{s:13:\"package_price\";s:4:\"3150\";}','0');");
E_D("replace into `ecs_goods_activity` values('7','拍卖活动——索爱C702c(第2期)','拍卖活动————索爱C702c （第2期）','2','10','索爱C702c','1241712000','1274803200','0','a:5:{s:7:\"deposit\";d:50;s:11:\"start_price\";d:0;s:9:\"end_price\";i:0;s:9:\"amplitude\";d:50;s:6:\"no_top\";i:1;}','0');");
E_D("replace into `ecs_goods_activity` values('10','拍卖活动名称','拍卖活动描述','2','56','黄飞红 麻辣花生210g/包','1337356800','1874160000','0','a:5:{s:7:\"deposit\";d:10;s:11:\"start_price\";d:10;s:9:\"end_price\";d:1110;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','0');");

require("../../inc/footer.php");
?>