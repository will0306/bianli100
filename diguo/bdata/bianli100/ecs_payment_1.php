<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_payment`;");
E_C("CREATE TABLE `ecs_payment` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_payment` values('1','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','0','0','1');");
E_D("replace into `ecs_payment` values('2','bank','银行汇款/转帐','0','银行名称\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。','0','a:0:{}','0','0','0');");
E_D("replace into `ecs_payment` values('3','cod','货到付款','0','快捷方便滴体验爱尚便利网上超市带来的快乐','0','a:0:{}','1','1','0');");
E_D("replace into `ecs_payment` values('4','alipay','在线支付','1.2%','支持支付宝支付、以及个大银行快捷支付','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:17:\"wurituan@sina.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:32:\"dkyqzhndft4ha95q64crrlm6zkqg6t72\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:16:\"2088411253219109\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"2\";}}','1','0','1');");

require("../../inc/footer.php");
?>