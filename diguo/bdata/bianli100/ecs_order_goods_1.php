<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_sn` varchar(60) NOT NULL default '',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `market_price` decimal(10,2) NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL default '0',
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('13','11','23','诺基亚N96','ECS000023','1','4440.00','3800.00','附加配件: 原装电池 [+100]','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('32','20','20','三星BC01','ECS000020','1','336.00','280.00','颜色:黑色 \n','0','1','','0','0','194','0');");
E_D("replace into `ecs_order_goods` values('33','21','24','P806','ECS000024','1','2400.00','1850.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('34','22','64','福临门 天然谷物调和油5L/桶','ECS000064','1','5.52','4.60','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('35','23','63','金龙鱼 清香玉米油1.8L/桶','ECS000063','1','5.52','4.60','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('42','26','59','乐棒棒 山椒凤爪70g/袋','ECS000059','1','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('43','26','58','奇多 日式牛排味干杯脆25g','ECS000058','1','6.00','3.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('44','26','57','乐事 美国经典原味80g/袋','ECS000057','1','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('45','26','56','黄飞红 麻辣花生210g/包','ECS000056','1','1.20','1.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('46','26','55','喜福来 喜蛋35g/个 ','ECS000000','1','1.20','1.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('47','27','118','招牌卤肉饭','ECS000118','1','14.00','10.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('48','27','119','宫保鸡丁','ECS000119','1','14.00','10.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('49','27','133','太子奶 发酵型乳酸菌奶饮品180ml','ECS000133','1','6.00','5.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('50','27','115','【推荐】水蒸蛋','ECS000115','1','4.00','3.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('51','27','116','蒸芋头↑借的图：没辣椒','ECS000116','1','3.00','2.50','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('52','27','117','鱼香肉丝便当','ECS000117','1','10.00','8.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('53','27','57','乐事 美国经典原味80g/袋','ECS000057','3','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('54','27','56','黄飞红 麻辣花生70g','ECS000056','1','1.20','1.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('55','27','58','奇多 日式牛排味干杯脆25g','ECS000058','1','6.00','3.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('56','27','59','乐棒棒 山椒凤爪70g/袋','ECS000059','1','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('57','28','121','梅菜扣肉便当','ECS000121','2','18.00','13.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('58','28','122','鲜引力 美白养颜即食柠檬片16g','ECS000122','2','6.00','2.50','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('59','28','120','姜子鸭【呕血推荐】','ECS000120','2','16.00','11.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('60','28','119','宫保鸡丁','ECS000119','2','14.00','10.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('61','28','118','招牌卤肉饭','ECS000118','2','14.00','10.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('62','28','56','黄飞红 麻辣花生70g','ECS000056','3','1.20','1.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('63','28','117','鱼香肉丝便当','ECS000117','1','10.00','8.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('64','28','58','奇多 日式牛排味干杯脆25g','ECS000058','1','6.00','3.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('65','28','57','乐事 美国经典原味80g/袋','ECS000057','1','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('66','28','59','乐棒棒 山椒凤爪70g/袋','ECS000059','1','6.00','4.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('67','29','66','新疆西域春牛奶老酸奶0添加','KLMY000066','1','4.37','3.98','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('68','29','67','新疆西域春酸奶（草莓味）放心奶 健康奶 50年的品质 纯正酸牛奶','KLMY000067','1','2.72','2.48','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('69','29','9','百雀羚 面霜草本润白滋养精华霜50g 滋润美白保湿 ','ECS000009','1','39.60','36.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('70','30','66','新疆西域春牛奶老酸奶0添加','KLMY000066','2','4.37','3.98','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('71','31','10','百雀羚防晒霜正品女士美白防晒乳 保湿防紫外线 清爽不油腻 ','ECS000010','1','68.20','62.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('72','32','10','百雀羚防晒霜正品女士美白防晒乳 保湿防紫外线 清爽不油腻 ','ECS000010','1','68.20','62.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('73','33','10','百雀羚防晒霜正品女士美白防晒乳 保湿防紫外线 清爽不油腻 ','ECS000010','1','68.20','62.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('74','34','10','百雀羚防晒霜正品女士美白防晒乳 保湿防紫外线 清爽不油腻 ','ECS000010','1','68.20','62.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('75','35','10','百雀羚防晒霜正品女士美白防晒乳 保湿防紫外线 清爽不油腻 ','ECS000010','1','68.20','62.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('76','35','11','百雀羚 洗面奶 保湿亮白洁面膏95g保湿润泽 白皙透亮 ','ECS000011','1','30.80','28.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('77','36','11','百雀羚 洗面奶 保湿亮白洁面膏95g保湿润泽 白皙透亮 ','ECS000011','1','30.80','28.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('78','37','11','百雀羚 洗面奶 保湿亮白洁面膏95g保湿润泽 白皙透亮 ','ECS000011','1','30.80','28.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('79','38','11','百雀羚 洗面奶 保湿亮白洁面膏95g保湿润泽 白皙透亮 ','ECS000011','1','30.80','28.00','','0','1','','0','0','','0');");

require("../../inc/footer.php");
?>