<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_cat`;");
E_C("CREATE TABLE `ecs_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_cat` values('55','753');");
E_D("replace into `ecs_goods_cat` values('55','780');");
E_D("replace into `ecs_goods_cat` values('56','781');");
E_D("replace into `ecs_goods_cat` values('57','753');");
E_D("replace into `ecs_goods_cat` values('57','780');");
E_D("replace into `ecs_goods_cat` values('58','753');");
E_D("replace into `ecs_goods_cat` values('58','780');");
E_D("replace into `ecs_goods_cat` values('59','753');");
E_D("replace into `ecs_goods_cat` values('59','780');");
E_D("replace into `ecs_goods_cat` values('60','753');");
E_D("replace into `ecs_goods_cat` values('60','780');");
E_D("replace into `ecs_goods_cat` values('61','753');");
E_D("replace into `ecs_goods_cat` values('61','780');");
E_D("replace into `ecs_goods_cat` values('62','753');");
E_D("replace into `ecs_goods_cat` values('62','780');");
E_D("replace into `ecs_goods_cat` values('63','753');");
E_D("replace into `ecs_goods_cat` values('63','780');");
E_D("replace into `ecs_goods_cat` values('113','782');");
E_D("replace into `ecs_goods_cat` values('114','735');");
E_D("replace into `ecs_goods_cat` values('115','735');");
E_D("replace into `ecs_goods_cat` values('116','735');");
E_D("replace into `ecs_goods_cat` values('117','735');");
E_D("replace into `ecs_goods_cat` values('118','735');");
E_D("replace into `ecs_goods_cat` values('119','735');");
E_D("replace into `ecs_goods_cat` values('120','735');");
E_D("replace into `ecs_goods_cat` values('121','735');");
E_D("replace into `ecs_goods_cat` values('122','781');");
E_D("replace into `ecs_goods_cat` values('123','781');");
E_D("replace into `ecs_goods_cat` values('124','781');");
E_D("replace into `ecs_goods_cat` values('125','781');");
E_D("replace into `ecs_goods_cat` values('126','781');");
E_D("replace into `ecs_goods_cat` values('127','781');");

require("../../inc/footer.php");
?>