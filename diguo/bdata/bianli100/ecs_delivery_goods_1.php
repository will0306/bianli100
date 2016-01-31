<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `extension_code` varchar(30) default NULL,
  `parent_id` mediumint(8) unsigned default '0',
  `send_number` smallint(5) unsigned default '0',
  `goods_attr` text,
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `product_sn` varchar(60) default NULL,
  PRIMARY KEY  (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','13','诺基亚5320 XpressMusic','诺基亚','ECS000013','1','','0','3','','0','');");
E_D("replace into `ecs_delivery_goods` values('2','1','14','诺基亚5800XM','诺基亚','ECS000014','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('3','2','24','P806','联想','ECS000024','1','','0','3','','0','');");
E_D("replace into `ecs_delivery_goods` values('4','2','9','诺基亚E66','诺基亚','ECS000009','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('5','3','24','P806','联想','ECS000024','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('6','3','8','飞利浦9@9v','飞利浦','ECS000008','1','','0','3','','0','');");
E_D("replace into `ecs_delivery_goods` values('7','4','12','摩托罗拉A810','摩托罗拉','ECS000012','1','','0','2','','0','');");
E_D("replace into `ecs_delivery_goods` values('8','5','24','P806','联想','ECS000024','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('9','6','61','统一 冰红茶250ml/盒','LOVO','ECS000061','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('10','6','57','乐事 美国经典原味80g/袋','喜瑞','ECS000057','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('11','7','63','金龙鱼 清香玉米油1.8L/桶','诺基亚','ECS000063','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('12','7','61','统一 冰红茶250ml/盒','LOVO','ECS000061','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('13','7','57','乐事 美国经典原味80g/袋','喜瑞','ECS000057','1','','0','1','','0','');");
E_D("replace into `ecs_delivery_goods` values('14','7','59','乐棒棒 山椒凤爪70g/袋','十一坊','ECS000059','1','','0','1','','0','');");

require("../../inc/footer.php");
?>