<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL auto_increment,
  `ctype` varchar(10) default NULL,
  `cid` smallint(5) unsigned default NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2','','0','选购中心','1','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('6','','0','标签云','1','5','6','tag_cloud.php','top');");
E_D("replace into `ecs_nav` values('7','','0','免责条款','1','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('8','','0','隐私保护','1','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('9','','0','咨询热点','1','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('10','','0','联系我们','1','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('11','','0','公司简介','1','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('12','','0','批发方案','1','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('14','','0','配送方式','1','7','0','myship.php','bottom');");
E_D("replace into `ecs_nav` values('45','','0','供应商合作','1','2','0','#','middle');");
E_D("replace into `ecs_nav` values('46','','0','技术开发','1','3','0','#','middle');");
E_D("replace into `ecs_nav` values('23','','0','报价单','1','6','0','quotation.php','top');");
E_D("replace into `ecs_nav` values('47','','0','工作机会','1','4','0','#','middle');");
E_D("replace into `ecs_nav` values('38','','0','帮助中心','1','7','0','article_cat.php?id=3','top');");
E_D("replace into `ecs_nav` values('39','','0','会员中心','1','8','0','user.php','top');");

require("../../inc/footer.php");
?>