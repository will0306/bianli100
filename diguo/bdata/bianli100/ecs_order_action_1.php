<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `action_user` varchar(30) NOT NULL default '',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `action_place` tinyint(1) unsigned NOT NULL default '0',
  `action_note` varchar(255) NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','2','admin','1','0','2','0','[售后] 1132','1242142350');");
E_D("replace into `ecs_order_action` values('2','2','admin','1','1','2','0','已经发货，注意接收','1242142389');");
E_D("replace into `ecs_order_action` values('3','1','admin','1','1','2','0','已经发货，注意接收','1242142432');");
E_D("replace into `ecs_order_action` values('4','2','买家','1','2','2','0','','1242142449');");
E_D("replace into `ecs_order_action` values('5','1','买家','1','2','2','0','','1242142451');");
E_D("replace into `ecs_order_action` values('6','3','admin','1','1','2','0','已经发货了，注意接收','1242142589');");
E_D("replace into `ecs_order_action` values('7','3','买家','1','2','2','0','','1242142634');");
E_D("replace into `ecs_order_action` values('8','5','admin','1','3','2','0','','1242142869');");
E_D("replace into `ecs_order_action` values('9','6','admin','3','0','0','0','暂时缺货','1242143337');");
E_D("replace into `ecs_order_action` values('10','7','admin','1','0','0','0','','1242143454');");
E_D("replace into `ecs_order_action` values('11','1','admin','1','2','2','0','[售后] 售后','1242143773');");
E_D("replace into `ecs_order_action` values('12','2','admin','4','0','0','0','质量问题','1242144185');");
E_D("replace into `ecs_order_action` values('13','12','buyer','2','0','0','0','用户取消','1242576313');");
E_D("replace into `ecs_order_action` values('14','13','admin','1','1','0','0','11','1242576445');");
E_D("replace into `ecs_order_action` values('15','14','admin','1','3','2','0','','1242976715');");
E_D("replace into `ecs_order_action` values('16','14','admin','1','1','2','0','已经发货，请接收','1242976740');");
E_D("replace into `ecs_order_action` values('17','15','admin','1','0','0','0','','1245044587');");
E_D("replace into `ecs_order_action` values('18','15','admin','1','0','2','0','已经付款','1245044644');");
E_D("replace into `ecs_order_action` values('19','15','admin','1','4','2','0','','1245044964');");
E_D("replace into `ecs_order_action` values('20','15','admin','1','4','2','0','北京供货商','1245045061');");
E_D("replace into `ecs_order_action` values('21','3','admin','4','0','0','0','不喜欢这个颜色','1245045334');");
E_D("replace into `ecs_order_action` values('22','15','admin','1','1','2','0','','1245045443');");
E_D("replace into `ecs_order_action` values('23','15','admin','4','0','0','0','退货','1245045515');");
E_D("replace into `ecs_order_action` values('24','16','admin','1','4','2','0','上海供货','1245045723');");
E_D("replace into `ecs_order_action` values('25','17','admin','1','1','2','0','','1245048189');");
E_D("replace into `ecs_order_action` values('26','17','admin','4','0','0','0','退货','1245048212');");
E_D("replace into `ecs_order_action` values('27','19','admin','1','1','2','0','','1245384050');");
E_D("replace into `ecs_order_action` values('28','25','admin','1','0','2','0','1111','1337485436');");
E_D("replace into `ecs_order_action` values('29','25','admin','1','3','2','0','111111111','1337485439');");
E_D("replace into `ecs_order_action` values('30','25','admin','5','5','2','0','1111111111111','1337485443');");
E_D("replace into `ecs_order_action` values('31','25','admin','1','1','2','1','11111','1337485450');");
E_D("replace into `ecs_order_action` values('32','25','admin','5','2','2','0','11111111111','1337485460');");
E_D("replace into `ecs_order_action` values('33','24','admin','1','0','2','0','11111111','1337485467');");
E_D("replace into `ecs_order_action` values('34','24','admin','1','3','2','0','11111111','1337485469');");
E_D("replace into `ecs_order_action` values('35','24','admin','5','5','2','0','1111111','1337485474');");
E_D("replace into `ecs_order_action` values('36','24','admin','1','1','2','1','1111111','1337485481');");
E_D("replace into `ecs_order_action` values('37','24','admin','5','2','2','0','111111','1337485504');");
E_D("replace into `ecs_order_action` values('38','30','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('39','29','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('40','28','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('41','27','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('42','26','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('43','23','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('44','22','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('45','21','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('46','20','admin','3','0','0','0','11','1416962976');");
E_D("replace into `ecs_order_action` values('47','11','admin','3','0','0','0','11','1416962977');");

require("../../inc/footer.php");
?>