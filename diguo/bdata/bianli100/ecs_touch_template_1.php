<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_template`;");
E_C("CREATE TABLE `ecs_touch_template` (
  `filename` varchar(30) NOT NULL default '',
  `region` varchar(40) NOT NULL default '',
  `library` varchar(40) NOT NULL default '',
  `sort_order` tinyint(1) unsigned NOT NULL default '0',
  `id` smallint(5) unsigned NOT NULL default '0',
  `number` tinyint(1) unsigned NOT NULL default '5',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `theme` varchar(60) NOT NULL default '',
  `remarks` varchar(30) NOT NULL default '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','bianli100','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/group_buy.lbi','0','0','3','0','bianli100','');");
E_D("replace into `ecs_touch_template` values('index','手机版首页Banner','/library/ad_position.lbi','0','1','4','4','bianli100','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_hot.lbi','0','0','3','0','bianli100','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_new.lbi','2','0','3','0','bianli100','');");
E_D("replace into `ecs_touch_template` values('index','中部主区域','/library/recommend_best.lbi','1','0','3','0','bianli100','');");

require("../../inc/footer.php");
?>