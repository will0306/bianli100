<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL auto_increment,
  `position_id` smallint(5) unsigned NOT NULL default '0',
  `media_type` tinyint(3) unsigned NOT NULL default '0',
  `ad_name` varchar(60) NOT NULL default '',
  `ad_link` varchar(255) NOT NULL default '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `link_man` varchar(60) NOT NULL default '',
  `link_email` varchar(60) NOT NULL default '',
  `link_phone` varchar(60) NOT NULL default '',
  `click_count` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('59','29','0','cate_740','#','1337484725461382442.jpg','1337443200','1624032000','','','','0','1');");
E_D("replace into `ecs_ad` values('60','29','0','cate_753','http://www.zuimoban.com','1337484825178827600.jpg','1337414400','1876464000','','','','0','1');");
E_D("replace into `ecs_ad` values('61','30','0','首页轮播广告1','#','20141029fyulll.jpg','1384790400','1576684800','','','','19','1');");
E_D("replace into `ecs_ad` values('62','31','0','首页轮播广告2','#','20141029mjvukh.jpg','1384790400','1576684800','','','','8','1');");
E_D("replace into `ecs_ad` values('63','32','0','首页轮播广告3','#','20141029unnfve.jpg','1384790400','1576684800','','','','10','1');");
E_D("replace into `ecs_ad` values('64','33','0','首页轮播广告4','#','20141029lqcnwf.jpg','1384790400','1545148800','','','','8','1');");
E_D("replace into `ecs_ad` values('65','34','0','首页轮播广告5','http://www.zuimoban.com','1384828181769031801.jpg','1384761600','1545120000','','','','15','1');");
E_D("replace into `ecs_ad` values('66','35','0','首页轮播右边广告','http://www.zuimoban.com','1414470496865206442.jpg','1384761600','1576656000','','','','2','1');");
E_D("replace into `ecs_ad` values('67','36','0','首页轮播下广告1','#','1384842151757083787.jpg','1384790400','1545148800','','','','17','1');");
E_D("replace into `ecs_ad` values('68','37','0','首页轮播下广告2','#','1384842166702408473.jpg','1384790400','1545148800','','','','11','1');");
E_D("replace into `ecs_ad` values('69','38','0','首页轮播下广告3','#','1384842181077697502.jpg','1384790400','1547827200','','','','10','1');");
E_D("replace into `ecs_ad` values('70','39','0','首页轮播下广告4','#','1384842195103778376.jpg','1384790400','1545148800','','','','18','1');");
E_D("replace into `ecs_ad` values('71','40','0','首页轮播下广告5','#','1384842208934520763.jpg','1384790400','1576684800','','','','9','1');");
E_D("replace into `ecs_ad` values('72','41','0','首页轮播下广告6','#','1384842220245596106.jpg','1384790400','1608307200','','','','11','1');");
E_D("replace into `ecs_ad` values('73','42','0','便当鲜食右边广告1','#','1384925697763397785.jpg','1384876800','1608393600','','','','10','1');");
E_D("replace into `ecs_ad` values('74','43','0','便当鲜食右边广告2','#','1384925712655462158.jpg','1384876800','1608393600','','','','17','1');");
E_D("replace into `ecs_ad` values('75','44','0','flow_1_8','#','1384932882589351929.jpg','1384848000','1545206400','','','','0','1');");
E_D("replace into `ecs_ad` values('76','45','0','cat_2_2','#','http://demo.ecmoban.com/shop/data/afficheimg/1394415497283455138.jpg','1384848000','1576742400','','','','0','1');");
E_D("replace into `ecs_ad` values('77','46','0','flow_1_2','#','1384933088221394505.jpg','1384848000','1576742400','','','','0','1');");
E_D("replace into `ecs_ad` values('78','47','0','flow_2_1','http://www.zuimoban.com','1384933170972463027.jpg','1384848000','1513670400','','','','0','1');");
E_D("replace into `ecs_ad` values('79','48','0','flow_1_8','http://www.zuimoban.com','1384933421375735115.jpg','1384848000','1545206400','','','','0','1');");
E_D("replace into `ecs_ad` values('80','49','0','cat_2_1','#','http://6.33hao.com/data/afficheimg/1384932932068924084.jpg','1384848000','1608364800','','','','0','1');");

require("../../inc/footer.php");
?>