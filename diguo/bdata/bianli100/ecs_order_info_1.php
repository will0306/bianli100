<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_info`;");
E_C("CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_sn` varchar(20) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `country` smallint(5) unsigned NOT NULL default '0',
  `province` smallint(5) unsigned NOT NULL default '0',
  `city` smallint(5) unsigned NOT NULL default '0',
  `district` smallint(5) unsigned NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `postscript` varchar(255) NOT NULL default '',
  `shipping_id` tinyint(3) NOT NULL default '0',
  `shipping_name` varchar(120) NOT NULL default '',
  `pay_id` tinyint(3) NOT NULL default '0',
  `pay_name` varchar(120) NOT NULL default '',
  `how_oos` varchar(120) NOT NULL default '',
  `how_surplus` varchar(120) NOT NULL default '',
  `pack_name` varchar(120) NOT NULL default '',
  `card_name` varchar(120) NOT NULL default '',
  `card_message` varchar(255) NOT NULL default '',
  `inv_payee` varchar(120) NOT NULL default '',
  `inv_content` varchar(120) NOT NULL default '',
  `goods_amount` decimal(10,2) NOT NULL default '0.00',
  `shipping_fee` decimal(10,2) NOT NULL default '0.00',
  `insure_fee` decimal(10,2) NOT NULL default '0.00',
  `pay_fee` decimal(10,2) NOT NULL default '0.00',
  `pack_fee` decimal(10,2) NOT NULL default '0.00',
  `card_fee` decimal(10,2) NOT NULL default '0.00',
  `money_paid` decimal(10,2) NOT NULL default '0.00',
  `surplus` decimal(10,2) NOT NULL default '0.00',
  `integral` int(10) unsigned NOT NULL default '0',
  `integral_money` decimal(10,2) NOT NULL default '0.00',
  `bonus` decimal(10,2) NOT NULL default '0.00',
  `order_amount` decimal(10,2) NOT NULL default '0.00',
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `confirm_time` int(10) unsigned NOT NULL default '0',
  `pay_time` int(10) unsigned NOT NULL default '0',
  `shipping_time` int(10) unsigned NOT NULL default '0',
  `pack_id` tinyint(3) unsigned NOT NULL default '0',
  `card_id` tinyint(3) unsigned NOT NULL default '0',
  `bonus_id` smallint(5) unsigned NOT NULL default '0',
  `invoice_no` varchar(255) NOT NULL default '',
  `extension_code` varchar(30) NOT NULL default '',
  `extension_id` mediumint(8) unsigned NOT NULL default '0',
  `to_buyer` varchar(255) NOT NULL default '',
  `pay_note` varchar(255) NOT NULL default '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL default '0',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `discount` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_info` values('11','2009051264945','0','3','0','0','林小姐','1','2','52','500','中关村海兴大厦','','135474510','','linzi@116.com','','','','3','城际快递','2','银行汇款/转帐','','','','','','','','3800.00','10.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','3810.00','0','管理员添加','1242144250','1242144363','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('20','2009091353308','0','3','0','0','123456','1','28','345','2939','1123','','123456','','belladndy82@126.com','','','','3','城际快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','280.00','10.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','290.00','0','本站','1252861123','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('21','2009112683787','0','3','0','0','11111111111','1','25','321','2704','12222222222','11111111','123456','','b123@123.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','1850.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','1865.00','0','本站','1259244783','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('22','2010082858269','0','3','0','0','11111111','1','3','37','411','11111111','','11111111111111','','11@125.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','4.60','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.60','0','本站','1282997634','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('23','2010082821275','0','3','0','0','1111111','1','3','38','419','11111111','','1111111111','','11@125.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','4.60','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.60','0','本站','1282997886','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('26','2013112228828','0','3','0','0','1111','1','2','52','501','1111','','13856644111','','121232@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','13.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','28.00','0','本站','1385099323','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('27','2013112546750','0','3','0','0','111','1','5','65','627','11111','','12345678911','','111@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','58.50','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','73.50','0','本站','1385362746','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('28','2013112681296','0','3','0','0','1111','1','9','123','0','11111','','111111','','11111@qq.com','','','','5','申通快递','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','115.00','15.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','130.00','0','本站','1385447669','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('29','2014112556659','0','3','0','0','1111','1','29','360','3065','克拉玛依区 克拉玛依区昆仑路51-3号文化创意产业园内','111111','18609901617','18609905225','369523617@qq.com','是发顺丰','是的法师','','3','城际快递','3','货到付款','等待所有商品备齐后再发','','','','','','','42.46','10.00','0.00','5.00','0.00','0.00','0.00','0.00','0','0.00','0.00','57.46','0','本站','1416863732','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('30','2014112581947','0','3','0','0','1','1','3526','3640','3752','111','阿斯蒂芬斯蒂芬','0990-6912898','阿萨德法师','18609904515@qq.com','阿斯蒂芬','暗示法士大夫','','3','白天配送','2','银行汇款/转帐','等待所有商品备齐后再发','','','','','','','7.96','10.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','17.96','0','本站','1416866600','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('31','2014112822429','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','62.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','62.00','0','本站','1417114360','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('32','2014112878598','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','62.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','62.00','0','本站','1417114752','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('33','2014112874279','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','62.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','62.00','0','本站','1417114785','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('34','2014112802327','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','62.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','62.00','0','本站','1417115101','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('35','2014112820953','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','90.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','90.00','0','','1417117497','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('36','2014112821778','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','28.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','28.00','0','','1417117533','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('37','2014112853725','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','28.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','28.00','0','','1417117971','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");
E_D("replace into `ecs_order_info` values('38','2014112892520','20','0','0','0','1111','1','3526','3636','3748','3333','','2222','','0@1.cn','','','','11','','4','支付宝（手机版）','等待所有商品备齐后再发','','','','','','','28.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','28.00','0','本站','1417120635','0','0','0','0','0','0','','','0','','','0','','0.00','0','0','0.00');");

require("../../inc/footer.php");
?>