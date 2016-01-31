<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_payment`;");
E_C("CREATE TABLE `ecs_touch_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL auto_increment,
  `pay_code` varchar(20) NOT NULL default '',
  `pay_name` varchar(120) NOT NULL default '',
  `pay_fee` varchar(10) NOT NULL default '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL default '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_payment` values('4','alipay_wap','支付宝（手机版）','0','支付宝（手机版）网站(www.alipay.com) 是国内先进的网上支付平台。','0','a:3:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:11:\"1111@qq.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:13:\"rrr8111zjq911\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:9:\"111111843\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('5','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','1','0','1');");

require("../../inc/footer.php");
?>