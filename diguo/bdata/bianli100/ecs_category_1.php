<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(90) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `cat_desc` varchar(255) NOT NULL default '',
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `sort_order` tinyint(1) unsigned NOT NULL default '50',
  `template_file` varchar(50) NOT NULL default '',
  `measure_unit` varchar(15) NOT NULL default '',
  `show_in_nav` tinyint(1) NOT NULL default '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  `grade` tinyint(4) NOT NULL default '0',
  `filter_attr` varchar(255) NOT NULL default '0',
  `cat_ico` varchar(255) NOT NULL,
  PRIMARY KEY  (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','日用百货','','','0','1','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('2','酒水饮料','','','0','0','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('3','方便食品','','','0','6','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('5','厨房调料','','','0','4','','','1','','1','0','','');");
E_D("replace into `ecs_category` values('6','牛奶/乳制品','','','0','7','','','1','','1','0','','');");
E_D("replace into `ecs_category` values('8','零食糕点','','','0','3','','','1','','1','0','','');");
E_D("replace into `ecs_category` values('9','菜米面油','','','0','5','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('10','化妆品','','','1','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('53','休闲零食','','','8','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('13','酒水','','','2','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('14','饮料','','','2','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('31','家庭日用','','','1','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('32','女士用品','','','1','50','','','0','','1','0','','');");
E_D("replace into `ecs_category` values('54','汽车用品','','','0','50','','','0','','1','0','0','');");
E_D("replace into `ecs_category` values('56','小家电','','','54','50','','','0','','1','0','','');");

require("../../inc/footer.php");
?>