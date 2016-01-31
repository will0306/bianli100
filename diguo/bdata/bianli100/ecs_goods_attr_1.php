<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `attr_id` smallint(5) unsigned NOT NULL default '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=387 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('247','59','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('245','58','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('242','57','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('240','55','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('239','56','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('255','63','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('253','62','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('251','61','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('249','60','211','120G','0');");
E_D("replace into `ecs_goods_attr` values('382','59','213','河南','0');");
E_D("replace into `ecs_goods_attr` values('381','59','212','无糖饼干糕点','0');");
E_D("replace into `ecs_goods_attr` values('380','60','214','有机休闲食品','0');");
E_D("replace into `ecs_goods_attr` values('379','60','213','四川','0');");
E_D("replace into `ecs_goods_attr` values('378','60','212','无糖冲饮','0');");
E_D("replace into `ecs_goods_attr` values('377','61','214','有机乳制品','0');");
E_D("replace into `ecs_goods_attr` values('376','61','213','湖北','0');");
E_D("replace into `ecs_goods_attr` values('375','61','212','无糖冲饮','0');");
E_D("replace into `ecs_goods_attr` values('374','62','214','有机休闲食品','0');");
E_D("replace into `ecs_goods_attr` values('373','62','213','新疆','0');");
E_D("replace into `ecs_goods_attr` values('372','62','212','无糖冲饮','0');");
E_D("replace into `ecs_goods_attr` values('371','63','214','有机乳制品','0');");
E_D("replace into `ecs_goods_attr` values('370','63','213','上海','0');");
E_D("replace into `ecs_goods_attr` values('369','63','212','无糖饼干糕点','0');");
E_D("replace into `ecs_goods_attr` values('383','59','214','有机乳制品','0');");
E_D("replace into `ecs_goods_attr` values('384','57','212','无糖饼干糕点','0');");
E_D("replace into `ecs_goods_attr` values('385','57','213','香港','0');");
E_D("replace into `ecs_goods_attr` values('386','57','214','有机休闲食品','0');");

require("../../inc/footer.php");
?>